<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(auth()->id());
        // session()->flash('flash.banner', 'Welcome to the blog');
        // session()->flash('flash.bannerStyle', 'success');

        // $posts = Post::where('user_id', auth()->id())->get();
        $posts = Post::where('user_id', auth()->id())->orderBy('id','DESC')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $topics = Topic::all();
        return view('admin.posts.create', compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200|unique:posts',
            'slug' => 'required|string|max:255|unique:posts',
            'topic_id' => 'required|integer|exists:topics,id',
        ]);

        // $post = Post::create([
        //     'title' => $request->title,
        //     'topic_id' => $request->topic_id,
        // ]);

        $post = Post::create($request->all());

        session()->flash('flash.banner', 'Post creado con éxito');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $topics = Topic::all();
        $tags = Tag::orderBy('name', 'ASC')->get();
        return view('admin.posts.edit', compact('post','topics','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // dd($request->all());

        $tags = []; // Recuperar Tags String
        foreach ($request->tags ?? [] as $tag) {
            $tags[] = is_numeric($tag) ? $tag : Tag::create(['name' => $tag])->id;

        }
        $post->tags()->sync($tags);



        $post->update($request->all());

        session()->flash('flash.banner', 'Post actualizado con éxito');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('flash.banner', 'El Post se elimino con éxito');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.posts.index', $post);
    }
}
