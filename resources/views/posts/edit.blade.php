@extends('layouts.app')
@section('content')
	<h3>Edit Post</h3>
	<form action="{{ url('posts/'.$post->id) }}" method="POST">
		@method('put')
            @csrf
		<div class="form-group">
			<label for="title">Title</label>
			<input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ $post->title }}">
		</div>
		<div class="form-group">
			<label>Body</label>
			<textarea class="form-control textarea" name="body" placeholder="Body Text" rows="5">{{ $post->body }}</textarea>
		</div>
		<div class="form-group">
			<input class="btn btn-primary" type="submit" name="btnSubmit" value="Update">
		</div>
	</form>
@endsection