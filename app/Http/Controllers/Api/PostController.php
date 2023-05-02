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
use Illuminate\Support\Facades\Validator;

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
        //define validation rules
        $validator = Validator::make($request->all(), [
            "nama" => "required|min:5",
            "email" => "required|min:5",
            "pesan" => "required|min:5",
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = ContactModel::create([
            "nama" => $request->input('nama'),
            "email" => $request->input('email'),
            "pesan" => $request->input('pesan'),
        ]);


        //return response
        return new PostResource(true, 'Data Contact Berhasil Ditambahkan!', $post);
    }
}
?>