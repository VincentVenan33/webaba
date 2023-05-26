<?php

namespace App\Http\Controllers;

use App\Models\PengunjungModel;
use Illuminate\Http\Request;
use illuminate\validation;

class PengunjungController extends Controller
{
    public function viewpengunjung()
    {   $data = array();
        $pengunjung_data = PengunjungModel::select('*')-> orderBy('id', 'desc')->paginate(10);
        $data['title'] = "List Pengunjung";
        $data['pengunjung'] = $pengunjung_data;
        return view('pengunjung/viewpengunjung', $data);
    }
    public function addpengunjung()
    {   $data = array();
        $data['title'] = "Tambah Pengujung";
        return view('pengunjung/addpengunjung', $data);
    }
    public function savepengunjung(Request $request)
    {
        $request->validate([
            "page" => "required|min:3",
            "ip" => "required|min:3",

        ]);

        $pengunjung_data = PengunjungModel::create([
            'page' => $request->page,
            'ip' => $request->ip,
        ]);
        if($pengunjung_data){
            return redirect()->route('viewpengunjung')->with('message','Data added Successfully');
        }else{
            return redirect()->route('viewpengunjung')->with('error','Data added Error');
        }
    }
    public function changepengunjung($id)
    {   $data = array();
        $pengunjung_data = PengunjungModel::select('*')
                    ->where('id', $id)
                    ->first();
        $data['title'] = "Ubah Pengunjung";
        $data['pengunjung'] = $pengunjung_data;
        return view('pengunjung/changepengunjung', $data);
    }
    public function updatepengunjung(Request $request)
    {
        $request->validate([
            "ip" => "required|min:3",
            "page" => "required|min:3"


        ]);

        $pengunjung_data = PengunjungModel::where('id', $request->id)
                    ->update([
                        'ip' => $request->ip,
                        'page' => $request->page,
                    ]);

        return redirect()->route('viewpengunjung')->with('message','Data update succeesfully');
    }
    public function deletepengunjung($id){
        $pengunjung_data = PengunjungModel::where('id', $id)
                  ->delete();
                  return redirect()->route('viewpengunjung')->with('error','Data Deleted');
                }
}