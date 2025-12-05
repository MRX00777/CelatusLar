@extends('layauts.shablon')
@section('content')

    <h1>Show page</h1>




    <div>{{ $post->id }}. {{ $post->title }}</div>
    <div>{{ $post->content }}</div>
    <button><a href="{{ route('post.edit', $post->id) }}">Edit</a></button>
    <form action="{{ route('post.delete', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    <button><a href="{{ route('post.index') }}">Back</a></button>
@endsection
