<?php

namespace App\Http\Controllers\Api;

use App\Models\Catalog;
use App\Models\UserdataModel;
use App\Models\ProdukModel;
use App\Models\KatalogModel;
use App\Models\TeamModel;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\PengunjungModel;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class PostController extends Controller
{
    public function  getProduct(){
        $posts = ProdukModel::select('*')-> orderBy('id', 'desc')-> get();
        foreach ($posts as $post) {
            $post->image = url('images/' . $post->image);
        }
        return new PostResource(true,'List Data Product',$posts);
    }

    public function getCatalog(){
        $posts = KatalogModel::select('*')-> orderBy('id', 'desc')->get();
        foreach ($posts as $post) {
            $post->image = url('images/' . $post->image);
            $post->file = url('files/' . $post->file);
        }
        return new PostResource(true,'List Data Catalog',$posts);
    }

    public function getTeam(){
        $posts = TeamModel::select('*')-> orderBy('id', 'desc')->get();
        foreach ($posts as $post) {
            $post->image = url('images/' . $post->image);
        }
        return new PostResource(true,'List Data Team',$posts);
    }
    public function getContact(){
        $posts = ContactModel::select('*')-> orderBy('id', 'desc')->get();
        return new PostResource(true,'List Data Contact',$posts);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function postContact(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            "nama" => "required|min:3",
            "email" => "required|min:5|email",
            "pesan" => "required",
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Maaf pesan tidak dapat kami terima coba lagi',
                'errors' => $validator->errors()
            ], 422);
        }

        // Create post
        $post = ContactModel::create([
            "nama" => $request->input('nama'),
            "email" => $request->input('email'),
            "pesan" => $request->input('pesan'),
            "status" => 0,
        ]);

        // Return response
        return response()->json([
            'success' => true,
            'message' => 'Terima kasih telah mengirimkan pesan. Kami akan segera merespon permintaan Anda.',
            'data' => $post
        ], 200);
    }



    public function getpengunjung(Request $request)
{
    $currentTime = Carbon::now()->setTimezone('Asia/Jakarta');

    PengunjungModel::create([
        'page' => $request->pageURL,
        'ip' => $request->ipAddress,
        'created_at' => $currentTime,
        'updated_at' => $currentTime
    ]);

    return response()->json(['success' => true]);
}

}
?>