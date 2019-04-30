@extends('layouts.app')
@section('content')
	<h3>Add New Post</h3>
	<form action="{{ url('posts') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title</label>
			<input class="form-control" type="text" name="title" id="title" placeholder="Title">
		</div>
		<div class="form-group">
			<label>Body</label>
			<textarea class="form-control textarea" name="body"  ></textarea>
		</div>
		<div class="form-group">
			<input type="file" name="cover_image">
		</div>
		<div class="form-group">
			<input class="btn btn-primary" type="submit" name="btnSubmit">
		</div>
	</form>
@endsection