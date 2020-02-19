@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="/create">
@csrf
 <div class="form-group">
  <label for="Title">Title:</label>
  <input type="text" class="form-control" name="title">
</div>
<div class="form-group">
  <label for="subtitle">Subtitle:</label>
  <input type="text" class="form-control" name="subtitle">
</div> 
<div class="form-group">
  <label for="article">Article</label>
  <textarea class="form-control rounded-0" name="article" rows="10" id="article"></textarea>
  <script>
        CKEDITOR.replace( 'article' );
    </script>
</div>
<div class="form-group">
	  <button type="submit" class="btn btn-warning text-white">Submit</button>
</div>
</form>
</div>

@endsection