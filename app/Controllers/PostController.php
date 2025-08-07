<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Post;

class PostController
{
    public function index()
    {
        $posts = Post::all();
        View::render('post/index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        View::render('post/show', ['post' => $post]);
    }

    public function create()
    {
        View::render('post/create');
    }

    public function store()
    {
        Post::create($_POST);
        header('Location: /post');
//        View::render('post/create');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        View::render('post/edit', ['post' => $post]);
    }

    public function update($id)
    {
        Post::update($id, $_POST);
        header('Location: /post');
    }

    public function delete($id)
    {
        Post::delete($id);
        header('Location: /post');
    }
}
