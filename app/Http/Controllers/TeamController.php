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
        $team_data = TeamModel::select('*')
            ->get();
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
            "linkedin" => "required|min:5",
            "facebook" => "required|min:5",
            "instagram" => "required|min:5",

        ]);
        $team_data = TeamModel::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'deskripsi' => $request->deskripsi,
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
            "linkedin" => "required|min:5",
            "facebook" => "required|min:5",
            "instagram" => "required|min:5",

        ]);
        $team_data = TeamModel::find($request->id);
        if (!$team_data) {
            return response()->json(['message' => 'Team tidak ditemukan'], 404);
        }
        $team_data = TeamModel::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'deskripsi' => $request->deskripsi,
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

        $team_data->delete();
        return redirect()->route('viewteam')->with('error', 'Data Deleted');
    }
}
?>