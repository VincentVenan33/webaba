<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_dataModel;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class User_dataController extends Controller
{
    public function tampiluser_data()
    {
        return view('tampiluser_data');
    }

    public function tambahuser_data()
    {
        return view('tambahuser_data');
    }

    public function simpanuser_data(Request $request)
    {
        $user_data = user_dataModel::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'permission' => $request->permission,
            'status' => $request->status,
        ]);

        return redirect()->route('tampiluser_data');
    }
}