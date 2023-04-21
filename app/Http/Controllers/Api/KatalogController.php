<?php

namespace App\Http\Controllers\Api;

use App\Models\KatalogModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class KatalogController extends Controller
{
      /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // Get posts
        $posts = KatalogModel::latest()->paginate(5);

        // Return collection of posts as a resource
        return new PostResource(true, 'List Data Katalog', $posts);
    }
}
?>