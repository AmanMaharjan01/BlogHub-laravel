<?php

namespace App;

use App\User;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = 'blogs';
    protected $fillable = ['title','subtitle','body','user_id'];

    public function user () {

    	return $this->belongsTo(User::class);
    }

     public function comments () {

    	return $this->hasMany(Comment::class);
    }


}