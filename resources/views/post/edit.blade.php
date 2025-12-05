@extends('layauts.shablon')
@section('content')


    <form action="{{ route('post.update', $post->id) }}" method="post">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content" placeholder="Content">{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input name="image" type="text" class="form-control" id="image" placeholder="Image" value="{{ $post->image }}">
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection
