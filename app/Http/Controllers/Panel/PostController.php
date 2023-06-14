<?php

namespace App\Http\Controllers\Panel;

use App\Models\Topic;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {   $menu = Topic::all();
        return view('panel.post.show', compact('post','menu'));
    }
}
