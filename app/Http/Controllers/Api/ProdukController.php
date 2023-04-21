<?php

namespace App\Http\Controllers\Api;

use App\Models\ProdukModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class ProdukController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // Get posts
        $posts = ProdukModel::latest()->paginate(5);

        // Return collection of posts as a resource
        return new PostResource(true, 'List Data Produk', $posts);
    }
}
?>