@extends('layouts.app')

@section('content')
     <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg'); margin: 0px;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1 style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;">BlogHub</h1><br>
            <span class="subheading">
               <span style="font-size: 35px;">Publish your passions, your way</span><br><br>

            <span style="font-size: 25px;">Create a unique and beautiful blog. It’s easy and free.</span>
            </span>
            <br><br>

            <a href="/create/add"><button class="btn btn-warning text-white">Create Blog</button></a>
          </div>
        </div>
      </div>
    </div>
  </header>
    <header class="masthead" style="background-image: url('img/bg8.jpg'); margin: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <span class="subheading">
               <h1 style="color: green; font-size: 60px;">Choose the perfect design </h1><br>
                <p class="lead" style="color: green;">Create a beautiful blog that fits your style.<br>
                Choose from a selection of easy-to-use templates<br>
                 all with flexible layouts and hundreds of background images<br>
                  or design something new. </p> 
            </span>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </header>

  <hr>
@endsection
