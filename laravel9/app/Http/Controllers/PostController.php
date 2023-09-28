<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts=DB::table('users')->get();
        return view('contact',['posts'=>$posts]);
    }
    public function agregar()
    {
        return view('agregar');
    }
    public function store (Request $request)
    {
        $post=new User;
        $post->name=$request->input('nombre');
        $post->fullname=$request->input('apellido');
        $post->cellphone=$request->input('celular');
        $post->email=$request->input('email');
        $post->save();
        return to_route('contact');
    }
    

}