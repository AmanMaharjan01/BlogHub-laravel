<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = 'blogs';
    protected $fillable = ['title','subtitle','body','user_id'];

    public function user () {

    	return $this->belongsTo('App\User', 'user_id', 'id');

    }
}
