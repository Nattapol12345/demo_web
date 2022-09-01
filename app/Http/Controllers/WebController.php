<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Mon;
use App\Models\Tb_monster;

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
        return view('/detail',$data);
    }

    public function preview($id)
    {
        $datas = Tb_monster::find($id);
      
        return view('/preview',compact('datas'));
    }

    public function tier()
    {
        return view('tier');
    }

    public function list()
    {
        $info = Tb_monster::all();
        

        
        
        return view('/list',compact('info'));
    }
}
