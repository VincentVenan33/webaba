<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use illuminate\validation;

class ContactController extends Controller
{
    public function viewcontact()
{
    $data = array();
    $contact_data = ContactModel::select('*')->orderBy('id', 'desc')->paginate(10); //menampilkan 10 data per halaman
    // Menghitung jumlah pesan masuk yang belum terbaca
    $unread_count = ContactModel::where('status', 0)->count();

    $data['title'] = "Inbox";
    $data['contact'] = $contact_data;
    $data['unread_count'] = $unread_count;

    return view('contact/viewcontact', $data);
}

    public function addcontact()
    {
        $data = array();
        $data['title'] = "Tambah Contact";
        return view('contact/addcontact', $data);
    }
    public function savecontact(Request $request)
    {
        $request->validate([
            "nama" => "required|min:5",
            "email" => "required|min:5",
            "pesan" => "required|min:5",

        ]);
        $contact_data = ContactModel::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
            'status' => ($request->status != "" ? "1" : "0"),
        ]);
        if ($contact_data) {
            return redirect()->route('viewcontact')->with('message', 'Data added Successfully');
        } else {
            return redirect()->route('viewcontact')->with('error', 'Data added Error');
        }
    }
    public function detailcontact($id)
{
    $data = array();
    $contact_data = ContactModel::findOrFail($id);

    // Update status pesan menjadi sudah dibaca
    ContactModel::where('id', $id)->update(['status' => 1]);

    // Menghitung jumlah pesan masuk yang belum terbaca
    $unread_count = ContactModel::where('status', 0)->count();

    $data['title'] = "Detail Pesan";
    $data['contact'] = $contact_data;
    $data['unread_count'] = $unread_count;

    return view('contact/detailcontact', $data);
}


    public function readAll()
    {
        ContactModel::where('status', 0)->update(['status' => 1]);

        return redirect()->back();
    }
    public function changecontact($id)
    {
        $data = array();
        $contact_data = ContactModel::select('*')
            ->where('id', $id)
            ->first();
        $data['title'] = "Ubah Contact";
        $data['contact'] = $contact_data;
        return view('contact/changecontact', $data);
    }
    public function updatecontact(Request $request)
    {


        $request->validate([
            "nama" => "required|min:5",
            "email" => "required|min:5",
            "pesan" => "required|min:5",
        ]);
        $contact_data = ContactModel::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'pesan' => $request->pesan,
                'status' => ($request->status != "" ? "1" : "0"),
            ]);

        return redirect()->route('viewcontact')->with('message', 'Data update succeesfully');
    }
    public function deletecontact($id)
    {
        $contact_data = ContactModel::where('id', $id)->first();
        $contact_data->delete();
        return redirect()->route('viewcontact')->with('error', 'Data Deleted');
    }
}