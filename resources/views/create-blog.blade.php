@extends('layouts.app')

@section('content')

<br>
<div class="container">
<form method="POST" action="/create">
@csrf
 <div class="form-group">
  <label for="Title">Title:</label>
  <input type="text" class="form-control" name="title">
</div>
<p style="font-size: 15px; color: red; margin-top: 0px"> @error('title'){{ $message }} @enderror </p>

<div class="form-group">
  <label for="subtitle">Subtitle:</label>
  <input type="text" class="form-control" name="subtitle">
</div> 
<p style="font-size: 15px; color: red; margin-top: 0px"> @error('subtitle'){{ $message }} @enderror </p>

<div class="form-group">
  <label for="article">Article (body)</label>
  <textarea class="form-control rounded-0" name="article" rows="10" id="article"></textarea>
</div>
<div class="form-group">
	  <button type="submit" class="btn btn-warning text-white">Submit</button>
</div>
</form>


</div>

@endsection