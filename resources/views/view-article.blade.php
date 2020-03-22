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
     <form>
       <div class="form-group">
       <h5 for="comment">Add Comment</h5>
      <textarea class="form-control rounded-0" name="article" id="comment"></textarea> 
     </div>
     </form><hr>
     <div style="position: static; width: 100%; height: 300px;">
     <h4>Recent Comments</h4>
     <span style="margin-bottom: 10px;">
       No Comments Yet
     </span><br>
   </div>
  </div>


@endsection