@extends('layouts.app')
@section('content')
	<a class="btn btn-secondary" role="button" href="{!! url('/posts') !!}">Go Back</a>
	<h3>{{ $post->title }}</h3>	
	<img style="width: 100%;" src="storage/cover_images/{{ $post->cover_image }}">
	<div>
		{!! $post->body !!}
	</div>
	<hr>
	<small>Written on {{ $post->created_at }}</small>
	<br>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user->id)
			<a href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-primary">Edit</a>
			<form action="{{ url('posts/'.$post->id) }}" method="POST" class="float-right">
				@method('delete')
		        @csrf
				<input type="submit" name="delete" value="Delete" class="btn btn-danger">
			</form>
		@endif
	@endif
	
	
@endsection