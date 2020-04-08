<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use App\Comment;
use Illuminate\Http\Request;

class commentsController extends Controller
{

	public function display()
	{
       $comment = Comment::paginate(5);
       return view('view-article',['comments' => $comment]);
	}

     public function store($id)
    {

        $article = new Comment;
        $article->body = request('comment');
        $article->user_id = auth()->user()->id;
        $article->blog_id = $id;

        $article->save();

        return redirect()->back();
    }
}
