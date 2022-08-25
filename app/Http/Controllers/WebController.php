<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WebController extends Controller
{
    public function index()
    {
       $data["posts"] = Post::all();
        return view('index',$data);
    }

    public function home()
    {
        
        return view('home',compact('posts'));
    }
    public function detail($id)
    {
        $data["post"] = Post::find($id);
        // $data["posts"] = Post::all();

        return view('/detail', $data);
    }
    
    
}
