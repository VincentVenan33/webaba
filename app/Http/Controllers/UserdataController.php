<?php

namespace App\Http\Controllers;

use App\Models\UserdataModel;
use Illuminate\Http\Request;

class UserdataController extends Controller
{
    public function tampiluser()
    {
        return view('userdata');
    }

    public function tambahuser()
    {
        return view('userdata');
    }

    public function simpanuser(Request $request)
    {
        $user_data = UserdataModel::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'permission' => $request->permission,
            'status' => $request->status,
        ]);

        return redirect()->route('tampiluser');
    }
}
