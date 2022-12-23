<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostViews;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Polyfill\Ctype\Ctype;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('web.blog.index')->with('posts', $posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->first();
        PostViews::updateOrCreate([
            'ip' => \request()->ip(),
            "post_id" => $post->id
        ]);
        $categories = Category::all()->take(4);
        $tags = Tag::all();
        $recentPosts = Post::where('slug', '!=', $slug)->orderBy('created_at','desc')->get()->take(4);
        return view('web.blog.show')->with(compact('post', 'categories', 'tags', 'recentPosts'));
    }
}
