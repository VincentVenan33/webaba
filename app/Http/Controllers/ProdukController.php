<?php

namespace App\Http\Controllers;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\validation;
use Illuminate\Http\UploadedFile;

class ProdukController extends Controller
{
    public function viewproduk()
    {   $data = array();
        $produk_data = ProdukModel::select('*')
             ->get();
        $data['title'] = "List Produk";
        $data['produk'] = $produk_data;
        return view('produk/viewproduk', $data);
    }

    public function addproduk()
    {   $data = array();
        $data['title'] = "Tambah Produk";
        return view('produk/addproduk', $data);
    }

    public function saveproduk(Request $request)
    {
        $request->validate([
            "nama" => "required|min:5",
            "harga" => "required|min:5",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "keterangan" => "required"

        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
        }else{
            $filename = null;
        }
        $produk_data = ProdukModel::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'image' => $filename,
            'keterangan' => $request->keterangan,
            'status' => ($request->status != "" ? "1" : "0"),
        ]);
        if($produk_data){
            return redirect()->route('viewproduk')->with('message','Data added Successfully');
        }else{
            return redirect()->route('viewproduk')->with('error','Data added Error');
        }
    }

    public function changeproduk($id)
    {   $data = array();
        $produk_data = ProdukModel::select('*')
                    ->where('id', $id)
                    ->first();
        $data['title'] = "Ubah Produk";
        $data['produk'] = $produk_data;
        return view('produk/changeproduk', $data);
    }

    public function updateproduk(Request $request)
    {


        $request->validate([
            "nama" => "required|min:5",
            "harga" => "required|min:5",
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',

            "keterangan" => "required"

        ]);
        
        $produk_data = ProdukModel::findOrFail($request->id);

    $filename = $produk_data->image; // default filename

    if ($request->hasFile('image')) {
        // delete old image
        if ($filename && Storage::exists('public/images/'.$filename)) {
            Storage::delete('public/images/'.$filename);
        }

        // upload new image
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->storeAs('public/images', $filename);

        if (!$file->isValid()) {
            return redirect()->back()->withErrors(['error' => 'Upload failed: '.$file->getErrorMessage()]);
        }
    }

        $produk_data = ProdukModel::where('id', $request->id)
                    ->update([
                        'nama' => $request->nama,
                        'harga' => $request->harga,
                        'image' => $filename,
                        'keterangan' => $request->keterangan,
                        'status' => ($request->status != "" ? "1" : "0"),
                    ]);

        return redirect()->route('viewproduk')->with('message','Data update succeesfully');
    }

    public function deleteproduk($id){
        $produk_data = ProdukModel::where('id', $id)->first();

        if($produk_data && file_exists(public_path('images/'.$produk_data->image))){
            unlink(public_path('images/'.$produk_data->image));
        }

        $produk_data->delete();
        return redirect()->route('viewproduk')->with('error','Data Deleted');
    }
}
?>