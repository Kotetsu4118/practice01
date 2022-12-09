<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

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
    
    public function store(PostRequest $request, Post $post){
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect("/posts/".$post->id);
    }
    
    public function edit(Post $post){
        return view('posts/edit')->with(['post'=>$post]);
        
    }
}
