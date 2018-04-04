<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class comment extends Model
{
    protected $fillable = ['user_id','body','post_id'];
    public function comments()
    {

		return $this->hasManyThrough(Post::class, User::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
