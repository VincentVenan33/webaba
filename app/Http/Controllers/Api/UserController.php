<?php

namespace App\Http\Controllers\Api;

use App\Models\UserdataModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class UserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // Get posts
        $posts = UserdataModel::latest()->paginate(5);

        // Return collection of posts as a resource
        return new PostResource(true, 'List Data User', $posts);
    }
}
?>