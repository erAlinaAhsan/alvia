<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Response;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
    public function create()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        if (auth()->user()->username !== 'alina ahsan') {
            abort(Response::HTTP_FORBIDDEN);
        }
        return view('posts.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => 'required',
            'excerpt' => ['required', Rule::unique('posts', 'slug')],
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Post::create($attributes);
        return redirect('/');
    }
}
