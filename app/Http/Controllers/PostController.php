<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    
    public function index(Post $post)
    // Post（というModel）を$postという変数にぶち込む
    {
        return view('posts/index')->with(['posts'=>$post->getPaginateByLimit()]);
    
        /*
            view('XXX/XXX'):引数で指定したviewを呼び出す
            with([]):[]内の条件で取得する
            
        */
    }
    public function show(Post $post){
        return view('posts/show')->with(['post'=>$post]);
    }
    
    public function create(){
        return view('posts/create');
    }
}
