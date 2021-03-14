<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts;

class ClientController extends Controller
{
    public function index(){ 
       $posts = Posts::all();
        //
        return view('post.index')->with(['posts' => $posts]);
 }  

    public function store(Request $request) {
       Posts::create([
            'title' => $request->title,
            'body' => $request->body
       ]);
       return back(); 
    }

    public function get_post($id){
      $post = Posts::find($id);

      if ($post == null)
      return response(['message' => 'post not found'], 404);

      return view('post.detail')->with(['post' => $post]);
    }
}
