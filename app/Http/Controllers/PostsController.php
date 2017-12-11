<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //Crea post da dati richiesta

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        //salva post su db

        //reindirizza browser
        return redirect('/');
    }
}
