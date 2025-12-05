<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::all();

        $categories = Category::find(1);
        $posts = Post::find(1);


        dd($posts->category);
        // return view('post/index',  compact('posts'));
    }


    public function create()
    {

        return view('post/create');

    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        Post::create($data);
        return redirect(route('post.index'));
    }

    public function update(Post $post)
    {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        $post->update($data);
        return redirect(route('post.show', $post->id));
    }

    public function show(Post $post)
    {
        return view('post/show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post/edit', compact('post'));
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('post.index'));
    }

}
