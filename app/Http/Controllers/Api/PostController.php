<?php

namespace App\Http\Controllers\Api;

use App\Models\Catalog;
use App\Models\UserdataModel;
use App\Models\ProdukModel;
use App\Models\KatalogModel;
use App\Models\TeamModel;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function getProduct(){
        $posts = ProdukModel::select('*')->get();
        foreach ($posts as $post) {
            $post->image = url('images/' . $post->image);
        }
        return new PostResource(true,'List Data Product',$posts);
    }

    public function getCatalog(){
        $posts = KatalogModel::select('*')->get();
        foreach ($posts as $post) {
            $post->image = url('images/' . $post->image);
        }
        return new PostResource(true,'List Data Catalog',$posts);
    }

    public function getTeam(){
        $posts = TeamModel::select('*')->get();
        foreach ($posts as $post) {
            $post->image = url('images/' . $post->image);
        }
        return new PostResource(true,'List Data Team',$posts);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

}
?>