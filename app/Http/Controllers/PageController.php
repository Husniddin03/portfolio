<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use App\Models\Quote;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        $files = File::all();
        $quotes = Quote::all();
        $posts = Post::all();
        return view('welcome', compact('files', 'quotes', 'posts'));
    }
    public function myblog($id) {
        return view('myblog');
    }
}
