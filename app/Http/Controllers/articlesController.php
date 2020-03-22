<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;

class articlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        $art = Blog::latest()->paginate(4);
        return view('post',['posts' => $art]);
    }
    public function index()
    {
        return view('frontpage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Blog;
        $article->title = request('title');
        $article->subtitle = request('subtitle');
        $article->body = request('article');
        $article->user_id = auth()->user()->id;

        $article->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Blog::find($id);
        return view('view-article',['posts' => $article]);
    }

    public function myarticle($id)
    {
         $article = Blog::where('user_id', $id)->latest()->paginate(5);
         return view('mypost',['posts' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
