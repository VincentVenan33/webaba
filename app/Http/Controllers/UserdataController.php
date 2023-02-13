<?php

namespace App\Http\Controllers;

use App\Models\UserdataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserdataController extends Controller
{
    public function viewuserdata()
    {
        $user_data = UserdataModel::select('*')
             ->get();
        return view('user/viewuserdata', ['user' => $user_data]);
    }

    public function adduser()
    {
        return view('user/adduserdata');
    }

    public function saveuser(Request $request)
    {
        $request->validate([
            "nama" => "required|min:5",
            "username" => "required|min:5",
            "password" => "required|min:5",
            "email" => "required",
            "permission" => 'required|in:"administrator","operator"'

        ]);

        $user_data = UserdataModel::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'permission' => $request->permission,
            'status' => ($request->status != "" ? "1" : "0"),
        ]);

        return redirect()->route('viewuserdata')->with('message','Data added Successfully');
    }

    public function changeuser($id)
    {
        $user_data = UserdataModel::select('*')
                    ->where('id', $id)
                    ->first();
        return view('user/changeuserdata', ['user' => $user_data]);
    }

    public function updateuser(Request $request)
    {
        $request->validate([
            "nama" => "required|min:5",
            "username" => "required|min:5",
            "password" => "required|min:5",
            "email" => "required",
            "permission" => 'required|in:"administrator","operator"'

        ]);

        $user_data = UserdataModel::where('id', $request->id)
                    ->update([
                        'nama' => $request->nama,
                        'username' => $request->username,
                        'password' => $request->password,
                        'email' => $request->email,
                        'permission' => $request->permission,
                        'status' => ($request->status != "" ? "1" : "0"),
                    ]);

        return redirect()->route('viewuserdata')->with('Message','Data update succeesfully');
    }

    public function deleteuser($id){
    $user_data = UserdataModel::where('id', $id)
              ->delete();
              return redirect()->route('viewuserdata')->with('error','Data Deleted');
            }
}