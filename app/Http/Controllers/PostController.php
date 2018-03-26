<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
 public function __construct()
 {
    $this->middleware('auth');
 }
    public function store(){
        Post::create(request()->all());
        return view('pages.home');
    }

    public function newPost(){
        return view('pages.new-entry');
    }

    public function editPost(Post $data){

        return view('pages.editPost', compact('data'));
    }

    public function upEditPost(Request $request, Post $data){
        Post::where('id', $data->id)->update($request->only(['title', 'body']));
        return redirect('/');
    }
    public function deletePost(Post $data){
        $data->delete();
        return redirect('/');
    }
    public function dashboard(){
        $data = Post::all();
        return view('pages.dashboard', compact('data'));
    }
}