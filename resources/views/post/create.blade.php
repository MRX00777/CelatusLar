@extends('layauts.shablon')
@section('content')


    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{ old('title') }}" name="title" type="text" class="form-control" id="title" placeholder="Title">
            @error('title')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content" placeholder="Content">{{ old('content') }}</textarea>
            @error('content')
            <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input name="image" type="text" class="form-control" id="image" placeholder="Image" value="{{ old('image') }}">
            @error('image')
            <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>

        <div class="form-group">
        <label for="category">Category</label>
        <select name="category_id" id="category" class="form-select mb-3" aria-label="Default select example">
            @foreach($categories as $category)

            <option {{ old('category_id') == $category->id ? ' selected' : '' }}

                    value="{{ $category->id }}">{{ $category->title }}</option>

                @endforeach
                @error('category_id')
                <p class="text-danger"> {{ $message }} </p>
                @enderror
        </select>
        </div>
        <div class="form-group mb-3">
            <label for="tags">Tags</label>
        <select name="tags[]" id="tags" class="form-select" multiple aria-label="Multiple select example">
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
            @endforeach
        </select>
            @error('tags')
            <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>


@endsection
