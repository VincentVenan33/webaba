<?php

namespace App\Http\Controllers;

use App\Models\UserdataModel;
use Illuminate\Http\Request;

class UserdataController extends Controller
{
    public function viewuserdata()
    {
        $user_data = UserdataModel::select('*')
             ->get();
        return view('viewuserdata', ['user' => $user_data]);
    }

    public function adduser()
    {
        return view('adduserdata');
    }

    public function saveuser(Request $request)
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

        return redirect()->route('viewuserdata');
    }
}