@extends('layouts.app')
@section('content')
	<h3>Posts</h3>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="row">
				<div col-sm-4>
					<img style="width: 200px;" src="storage/cover_images/{{ $post->cover_image }}">
				</div>
				<div col-sm-8>
					<div class="alert alert-success" role="alert">
				<h3><a href="{!! url('/posts'); !!}/{{$post->id}}">{{ $post->title }}</a></h3>
				<small>Created on {{ $post->created_at }} By {{ $post->user->name }}</small>		
			</div>
				</div>
			</div>	
		@endforeach
		{{ $posts->links() }}
	@else
	<p>No Post found</p>
	@endif
@endsection