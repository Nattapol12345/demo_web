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

    public function combo()
    {
        $com = Tb_content::get();
       
        return view('/combo',compact('com'));
    }
    public function combo_monsters($id)
    {
        
        
        $combos =  Tb_content::find($id)
        ->leftjoin('tb_combos','tb_contents.id','=','tb_combos.content_id')
        ->leftjoin('tb_combo_monsters','tb_combos.id','=','tb_combo_monsters.combo_id')
        ->leftjoin('tb_monsters','tb_combo_monsters.monster_id','=','tb_monsters.id')
        ->select('tb_combos.name','tb_combos.remark','tb_combos.id','tb_monsters.*') 
        ->where('tb_contents.id',$id)
        ->get();

        
      
         

        

     
        
        return view('/combo_monsters',compact('combos'));
    }
    
}


