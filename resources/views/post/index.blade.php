@extends('layauts.shablon')
@section('content')

    <h1>Posts page</h1>

    <div><a class="btn btn-primary mb-3" href="{{ route('post.create') }}">Add post</a></div>

    @foreach($posts as $post)


        <div><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></div>
    @endforeach
@endsection
