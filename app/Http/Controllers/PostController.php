<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{
 public function __construct()
 {
    $this->middleware('auth');
 }
    public function store(){
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        /*Post::create(request()->all());*/
        Post::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' => request('body')
        ]);
        return view('pages.home');
    }

    public function newPost(){
        return view('pages.new-entry');
    }

    public function editPost(Post $data){
        if(Gate::denies('edit-post', $data)){
            return view(page.restriction);
        }
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