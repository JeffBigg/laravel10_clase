<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts=DB::table('users')->get();
        return view('contact',['posts'=>$posts]);
    }
}
