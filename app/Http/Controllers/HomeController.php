<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {$data = array();
        $data['title'] = "Home";
        return view('index', $data);
    }
}