<?php

namespace App\Http\Controllers\Api;

use App\Models\TeamModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class TeamController extends Controller
{
      /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // Get posts
        $posts = TeamModel::latest()->paginate(5);

        // Return collection of posts as a resource
        return new PostResource(true, 'List Data Team', $posts);
    }
}
?>