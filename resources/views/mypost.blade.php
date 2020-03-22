@extends('layouts.app')

@section('content')

<!-- Page Header -->
<br>
<div class="container">
  @foreach($posts as $post)
  <header class="masthead" style="background-image: url('/img/bg.jpg'); height: 400px; margin: 5px;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading text-white" style="padding: 50px">
            <h1 style="color: white; text-decoration: none;">{{$post->title}}</h1>
            <h4>{{$post->subtitle}}</h4><br>
            <span class="meta">Posted by
              <a href="#">{{$post->user->name}}</a><br>
              {{$post->created_at}}</span><br><br>
              <a href="/post/{{$post->id}}"><button class="btn btn-warning">Read More ></button></a>
          </div>
        </div>
      </div>
    </div>
  </header>
  @endforeach
  </article>
 </div>
  <hr>

  @endsection