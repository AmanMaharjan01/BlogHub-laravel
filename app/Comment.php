<?php

namespace App;

use App\User;
use App\Blog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'comments';

        public function user () {

    	return $this->belongsTo(User::class);

        }

        public function blog () {

    	return $this->belongsTo('App\User', 'blog_id', 'id');

        }

}
