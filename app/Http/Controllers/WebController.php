<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Mon;
use App\Models\Tb_monster;
use App\Models\Tb_combo_monster;
use App\Models\Tb_content;
use App\Models\combo;
use App\Models\Tb_combo;
use App\Models\Tb_combos;

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

    public function combo()
    {
        $com = Tb_content::all();
       
        return view('/combo',compact('com'));
    }
    public function combo_monsters()
    {
        $com = Tb_content::all();
       
        return view('/combo_monsters',compact('com'));
    }
    
}


