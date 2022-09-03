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

    public function combo($id)
    {   
        
        $datas1 = Tb_monster::find($id);

        $datas2 = Tb_combo::join('tb_contents','tb_combos.content_id','=','tb_contents.id')
        ->select('tb_contents.name','tb_combos.content_id')
        ->get();
         
        $datas3 = Tb_combo::all();
             
        
        return view('combo',compact('datas1','datas2','datas3'));
    }
}
