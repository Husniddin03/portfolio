<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\File;
use App\Models\Post;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function welcome()
    {
        $files = File::all();
        $quotes = Quote::all();
        $posts = Post::all();
        return view('welcome', compact('files', 'quotes', 'posts'));
    }
    public function myblog($id)
    {
        $post = Post::find($id);
        $post->increment('views');
        $otherPosts = Post::where('id', '!=', $id)
            ->orderBy('id', 'desc')
            ->limit(2)
            ->get();

        return view('myblog', compact('post', 'otherPosts'));
    }

    public function addComment(Request $request, $id)
    {
        $validate = $request->validate([
            'message' => 'string'
        ]);

        Comment::create([
            'message' => $validate['message'],
            'post_id' => $id,
            'user_id' => Auth::id()
        ]);
        return back()->with('success', "Izoh muoffaqiyatli yuborildi");
    }

    public function message(Request $request)
    {
        $validate = $request->validate([
            'message' => 'string|required|max:500'
        ]);
        Contact::create([
            'user_id' => Auth::id(),
            'message' => $validate['message']
        ]);
        return back()->with('success', 'Xabaringiz muoffaqiyatli yuborildi');
    }
}
