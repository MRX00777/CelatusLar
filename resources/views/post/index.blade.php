@extends('layauts.shablon')
@section('content')

    <h1>Posts page</h1>

    @foreach($posts as $post)


        <div>{{ $post->id }}. {{ $post->title }}</div>
    @endforeach
@endsection
