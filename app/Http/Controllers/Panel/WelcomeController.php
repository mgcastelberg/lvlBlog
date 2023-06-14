<?php

namespace App\Http\Controllers\Panel;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function __invoke(){

        $menu = Topic::all();

        $posts = Post::where('is_published',true)
                    ->orderBy('published_at', 'desc')
                    ->paginate(10);

        return view('panel.dashboard', compact('posts', 'menu'));
    }
}
