<?php

namespace App\Http\Controllers;

use App\Models\UserdataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserdataController extends Controller
{
    public function viewuserdata()
    {   $data = array();
        $user_data = UserdataModel::select('*')-> orderBy('id', 'desc')
             ->get();
        $data['title'] = "List User";
        $data['user'] = $user_data;
        return view('user/viewuserdata', $data);
    }

    public function adduser()
    {   $data = array();
        $data['title'] = "Tambah User";
        return view('user/adduserdata', $data);
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
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'permission' => $request->permission,
            'status' => ($request->status != "" ? "1" : "0"),
        ]);
        if($user_data){
            return redirect()->route('viewuserdata')->with('message','Data added Successfully');
        }else{
            return redirect()->route('viewuserdata')->with('error','Data added Error');
        }
    }

    public function changeuser($id)
    {   $data = array();
        $user_data = UserdataModel::select('*')
                    ->where('id', $id)
                    ->first();
        $data['title'] = "Ubah User";
        $data['user'] = $user_data;
        return view('user/changeuserdata', $data);
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
                        'password' => ($request->newpassword != "" ? Hash::make($request->newpassword) : $request->password),
                        'email' => $request->email,
                        'permission' => $request->permission,
                        'status' => ($request->status != "" ? "1" : "0"),
                    ]);

        return redirect()->route('viewuserdata')->with('message','Data update succeesfully');
    }

    public function deleteuser($id){
    $user_data = UserdataModel::where('id', $id)
              ->delete();
              return redirect()->route('viewuserdata')->with('error','Data Deleted');
            }

}
?>