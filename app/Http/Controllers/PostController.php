<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index')
            ->with('posts', $posts);
    }

    /**
     * Display a listing of trashed resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('admin.posts.trashed')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create')
            ->with(compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'title' => ['required', 'string'],
            'category_id' => ['required'],
            'content' => ['required'],
            'post_image' => ['required', 'file', 'mimes:jpg,png'],
            "tags" => ['required', 'array']
        ]);

        $data = $validator->validated();
        if($request->file('post_image')){
            $file = $request->file('post_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/posts'), $filename);
            $data['post_image'] = $filename;
        }
        $post  = Post::create($data);
        $post->tags()->attach($data['tags']);
        return redirect(route('posts.index'))->with('success', 'Post created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with(['category', 'tags'])
            ->where('id', $id)->first();
        return view('admin.posts.show')
            ->with(compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::with(['category', 'tags'])
            ->where('id', $id)->first();
        return view('admin.posts.create')
            ->with(compact('post','categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Application|RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $post = Post::with(['category', 'tags'])
            ->where('id', $id)->first();

        $validator =  Validator::make($request->all(), [
            'title' => ['required', 'string'],
            'category_id' => ['required'],
            'content' => ['required'],
            'post_image' => ['file', 'mimes:jpg,png'],
            "tags" => ['required', 'array']
        ]);

        $data = $validator->validated();
        if($request->file('post_image')){
            $file = $request->file('post_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/posts'), $filename);
            $data['post_image'] = $filename;
        }

        $post->update($data);
        $post->tags()->sync($data['tags']);
        return redirect(route('posts.index'))->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->back()->with('success', 'Post trashed successfully');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function restore($id): RedirectResponse
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        return redirect()->back()->with('success', 'Post restored successfully');
    }
}
