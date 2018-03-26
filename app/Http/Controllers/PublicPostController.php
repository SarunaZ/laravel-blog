<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PublicPostController extends Controller
{
    public function show(){
        $data = Post::paginate(3);
        return view('pages.home', compact('data'));
    }
    public function viewPost(Post $data){

        return view('pages.viewPost', compact('data'));
    }
}
