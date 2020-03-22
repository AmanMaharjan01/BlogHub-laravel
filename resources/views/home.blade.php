@extends('layouts.app')

@section('content')
     <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/about-bg.jpg'); height: 674px; margin: 0px;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1 style=" font-size: 50px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;"> Hello {{ Auth::user()->name }} </h1><br>
            <span class="subheading">
               <span style="font-size: 30px;"> Welcome To BlogHub</span><br><br>
            </span>

            <a href="/create/add"><button class="btn btn-warning text-white" style="border-radius: 25px 25px 25px 25px">Create Blog</button></a>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection
