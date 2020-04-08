@extends('layouts.app')

@section('content')
<br>
<div class="container">
  <header class="masthead" style="background-image: url('/img/bg.jpg'); height: 400px; margin: 5px;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading text-white" style="padding: 50px">
            <h1 style="color: white;">{{$posts->title}}</h1>
            <h4>{{$posts->subtitle}}</h4><br>
            <span class="meta">Posted by
              <a href="#">{{$posts->user->name}}</a><br>
            </span>
          </div>
        </div>
      </div>
    </div>
  </header><br>
  
     <span class="article">
      {{$posts->body}}
     </span><br><br><hr>

     <form method="POST" action="/addcomment/{{$posts->id}}">

      @csrf
       <div class="form-group">
       <h5 for="comment">Add Comment</h5>
      <textarea class="form-control rounded-0" name="comment" id="comment"></textarea><br>
      <div class="form-group">
      <button type="submit" class="btn btn-warning text-white">Submit</button>
      </div>
     </div>
     </form><hr>
     
     <h3>Comments</h3><hr>
     <div style="position: static; width: 100%; height: 300px;">
      @foreach($posts->comments as $comment)
           <img src="/images/an.jpg" width="50" height="50" style="border-radius: 50%;">
           <span style="color: #4077e1; font-size: 19px;"><b>{{$comment->user->name}}</b></span>
           <div style="margin: 0px;">
           <span style="padding-left: 60px; font-size: 17px;">{{$comment->body}}</span><br><hr>
           </div>
       @endforeach


   </div>
  </div>


@endsection