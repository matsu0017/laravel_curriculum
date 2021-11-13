<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    } 
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    public function create()
    {
        return view('posts/create');
    }
     // ユーザーの入力情報を利用する場合はrequestを使用
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        // SQLのインサート構文が実行されDBに保存される
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
