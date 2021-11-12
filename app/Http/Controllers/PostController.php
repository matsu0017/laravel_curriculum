<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
    // ViewにController内で取得した変数を渡したい場合は、Viewインスタンスに対してwithというメソッドを使用する。
    // この時、変数名 => 値という形で渡し、View側ではこの時指定した変数名で値を参照します。
        return view('posts/index')->with(['posts' => $post->get()]);  
    }
}