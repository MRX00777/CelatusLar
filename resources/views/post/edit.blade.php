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

        <label for="category">Category</label>
        <select name="category_id" id="category" class="form-select mb-3" aria-label="Default select example">
            @foreach($categories as $category)

                <option {{ $category->id === $post->category->id ? ' selected' : '' }}

                        value="{{ $category->id }}">{{ $category->title }}</option>

            @endforeach
        </select>

        <div class="form-group mb-3">
            <label for="tags">Tags</label>
            <select name="tags[]" id="tags" class="form-select" multiple aria-label="Multiple select example">
                @foreach($tags as $tag)
                    <option
                            @foreach($post->tags as $postTag)
                                {{ $tag->id === $postTag->id ? ' selected' : '' }}
                            @endforeach

                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection
