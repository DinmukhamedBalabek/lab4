<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts;

class ClientController extends Controller
{
    public function index(){
       $posts = Posts::all();
        //
        return view('posts.index')->with(['posts' => $posts]);
 }
}
