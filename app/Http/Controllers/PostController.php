<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('post/index',  compact('posts'));
    }



    public function create() {

        return view('post/create');

    }

    public function store() {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        Post::create($data);
        return redirect(route('post.index'));
    }

    public function update() {
        $posts = Post::find(6);

        $posts->update([
            'title' => 'title for post 6',
            'content' => 'content for post 6',
            'image' => 'image for post 6',
            'likes' => 10 ,
            'is_published' => 1,
        ]);
        dump('updated');
    }

    public function restore() {
        $post = Post::withTrashed()->find(1);
        $post->restore();
        dump('restored');
    }

    public function delete(){
        $post = Post::find(1);
        $post->delete();
        dump('deleted');
    }


    public function firstOrCreate() {

        $anotherPost = [
            'title' => 'someone post title',
            'content' => 'some post content',
            'image' => 'some post image',
            'likes' => 100 ,
            'is_published' => 1,
        ];

        Post::firstOrCreate([
            'title' => 'sometimes post title',
        ], $anotherPost);

        dd('created or not created');
    }



    public function updateOrCreate() {

        $randomPost = [
            'title' => 'random post title',
            'content' => 'random post content',
            'image' => 'random post image',
            'likes' => 500 ,
            'is_published' => 1,
        ];

        Post::updateOrCreate([
            'likes' => 100
        ], $randomPost);

        dd('updateOrCreate');
    }



}
