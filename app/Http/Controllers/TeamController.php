<?php

namespace App\Http\Controllers;
use App\Models\TeamModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\validation;

class TeamController extends Controller
{
    public function viewteam()
    {
        $data = array();
        $team_data = TeamModel::select('*')-> orderBy('id', 'desc')->paginate(10);
        $data['title'] = "List Team";
        $data['team'] = $team_data;
        return view('team/viewteam', $data);
    }

    public function addteam()
    {
        $data = array();
        $data['title'] = "Tambah Team";
        return view('team/addteam', $data);
    }
    public function saveteam(Request $request)
    {
        $request->validate([
            "nama" => "required|min:5",
            "jabatan" => "required|min:5",
            "deskripsi" => "required|min:5",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
        }else{
            $filename = null;
        }
        $team_data = TeamModel::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'deskripsi' => $request->deskripsi,
            'image' => $filename,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'keterangan' => $request->keterangan,
            'status' => ($request->status != "" ? "1" : "0"),
        ]);
        if ($team_data) {
            return redirect()->route('viewteam')->with('message', 'Data added Successfully');
        } else {
            return redirect()->route('viewteam')->with('error', 'Data added Error');
        }
    }
    public function changeteam($id)
    {
        $data = array();
        $team_data = TeamModel::select('*')
            ->where('id', $id)
            ->first();
        $data['title'] = "Ubah Team";
        $data['team'] = $team_data;
        return view('team/changeteam', $data);
    }

    public function updateteam(Request $request)
    {


        $request->validate([
            "nama" => "required|min:5",
            "jabatan" => "required|min:5",
            "deskripsi" => "required|min:5",
            'newimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $team_data = TeamModel::find($request->id);
        if (!$team_data) {
            return response()->json(['message' => 'Team tidak ditemukan'], 404);
        }
        $filename = $team_data->image;
        // Menghapus gambar lama jika ada gambar baru yang diupload
    if ($request->hasFile('newimage')) {
        if ($filename && file_exists(public_path('images/' . $filename))) {
            unlink(public_path('images/' . $filename));
        }
        $image = $request->file('newimage');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);
    }
        $team_data = TeamModel::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'deskripsi' => $request->deskripsi,
                'image' => $filename,
                'linkedin' => $request->linkedin,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'keterangan' => $request->keterangan,
                'status' => ($request->status != "" ? "1" : "0"),
            ]);

        return redirect()->route('viewteam')->with('message', 'Data update succeesfully');
    }

    public function deleteteam($id)
    {
        $team_data = TeamModel::where('id', $id)->first();

        if($team_data && file_exists(public_path('images/'.$team_data->image))){
            unlink(public_path('images/'.$team_data->image));
        }

        $team_data->delete();
        return redirect()->route('viewteam')->with('error', 'Data Deleted');
    }
}
?>