<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog extends Controller
{
    public function index()
    {
        return view('blog.blogs');
    }
}
