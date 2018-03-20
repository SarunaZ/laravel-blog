<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function store(){
        Post::create(request()->all());
        return view('pages.home');
    }
    public function show(){
        $data = Post::all();
        return view('pages.home', compact('data'));
    }
    public function newPost(){
        return view('pages.new-entry');
    }
}