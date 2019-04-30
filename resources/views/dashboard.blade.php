@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{url('/posts/create')}}">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Acton</th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td><a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ url('posts/'.$post->id) }}" method="POST" class="float-right">
                                @method('delete')
                                @csrf
                                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p>You have no post</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
