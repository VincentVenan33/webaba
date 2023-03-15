<?php

namespace App\Http\Controllers;
use App\Models\KatalogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class KatalogController extends Controller
{
    public function viewkatalog()
    {   $data = array();
        $katalog_data = KatalogModel::select('*')
             ->get();
        $data['title'] = "List Katalog";
        $data['katalog'] = $katalog_data;
        return view('katalog/viewkatalog', $data);
    }

    public function addkatalog()
    {   $data = array();
        $data['title'] = "Tambah Katalog";
        return view('katalog/addkatalog', $data);
    }

    public function savekatalog(Request $request)
    {
        $request->validate([
            "nama" => "required|min:5",
            "keterangan" => "required|min:5",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048'

        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
        }else{
            $filename = null;
        }
        $fileName = time().'.'.$request->file->extension();
        $request->file->storeAs('public/files', $fileName);
        $katalog_data = KatalogModel::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'image' => $filename,
            'file' => $filename,
            'status' => ($request->status != "" ? "1" : "0"),
        ]);
        if($katalog_data){
            return redirect()->route('viewkatalog')->with('message','Data added Successfully');
        }else{
            // debug
            dd('Failed to save data to database');
            // return redirect()->route('viewkatalog')->with('error','Data added Error');
        }

    }

    public function changekatalog($id)
    {   $data = array();
        $katalog_data = KatalogModel::select('*')
                    ->where('id', $id)
                    ->first();
        $data['title'] = "Ubah Katalog";
        $data['katalog'] = $katalog_data;
        return view('katalog/changekatalog', $data);
    }

    public function updatekatalog(Request $request)
    {
        $request->validate([
            "nama" => "required|min:5",
            "keterangan" => "required|min:5",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048'

        ]);
        if ($request->hasFile('image')) {
            // Menghapus gambar lama
            Storage::delete('public/images/'.$filename);

            // Upload gambar baru
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/images', $filename);
        }
        if ($request->hasFile('file')) {
            // Menghapus dokumen lama
            Storage::delete('public/files/'.$filename);

            // Upload dokumen baru
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/files', $filename);
        }
        $katalog_data = KatalogModel::where('id', $request->id)
                    ->update([
                        'nama' => $request->nama,
                        'keterangan' => $request->keterangan,
                        'image' => $filename,
                        'file' => $filename,
                        'status' => ($request->status != "" ? "1" : "0"),
                    ]);

        return redirect()->route('viewkatalog')->with('message','Data update succeesfully');
    }

    public function deletekatalog($id){
    $katalog_data = KatalogModel::where('id', $id)
              ->delete();
              return redirect()->route('viewkatalog')->with('error','Data Deleted');
            }
}
?>