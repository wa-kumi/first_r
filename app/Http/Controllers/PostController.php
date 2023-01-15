<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(3)]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function show(Post $post)
    {
        return view ('posts/show')->with(['post' => $post]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
        // dd($request->all());
    }
}
