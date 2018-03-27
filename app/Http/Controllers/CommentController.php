<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use App\Post;
class CommentController extends Controller
{
    public function upComment(Post $post)
    {
        comment::create([
            'user_id' => $post->user_id,
            'body' => request('body'),
            'post_id' => $post->id
        ]);
    return back();
    }

}
