<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Post;
use App\Models\PostMediafile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    public function add($id)
    {
        $post = Post::find($id);
        return view('blog.add', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Ma'lumotlarni tekshiramiz
        $validate = $request->validate([
            'title' => 'required|string|max:255|min:5',
            'content' => 'required|string',
            'url' => 'nullable|string',
            'url_img' => 'nullable|image',
            'url_video' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime',
        ]);

        // 2. Post yaratamiz
        $post = Post::firstOrCreate([
            'title' => $validate['title']
        ]);

        // 3. Content yaratamiz
        $content = Content::create([
            'content' => $validate['content'],
            'post_id' => $post->id,
        ]);

        // 4. Rasm faylini saqlaymiz (agar mavjud bo‘lsa)
        if ($request->hasFile('url_img')) {
            $file = $request->file('url_img');
            $filePath = $file->store('uploads/post/img', 'public');

            PostMediafile::create([
                'url' => $filePath,
                'type' => 'image',
                'content_id' => $content->id,
            ]);
        }

        // 5. Video faylini saqlaymiz (agar mavjud bo‘lsa)
        if ($request->hasFile('url_video')) {
            $file = $request->file('url_video');
            $filePath = $file->store('uploads/post/video', 'public');

            PostMediafile::create([
                'url' => $filePath,
                'type' => 'video',
                'content_id' => $content->id,
            ]);
        }

        // 6. URL orqali media (masalan, YouTube havolasi) bo‘lsa
        if (!empty($validate['url'])) {
            PostMediafile::create([
                'url' => $validate['url'],
                'type' => 'url',
                'content_id' => $content->id,
            ]);
        }

        // 7. Natijani qaytaramiz
        return redirect()->route('blog.index')->with('success', "Muvaffaqiyatli yuklandi!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('blog.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        // Postga tegishli contentlarni topamiz
        foreach ($post->contents as $content) {
            // Har bir contentga tegishli media fayllarni o‘chiramiz
            foreach ($content->mediafiles as $media) {
                if (in_array($media->type, ['image', 'video']) && Storage::disk('public')->exists($media->url)) {
                    Storage::disk('public')->delete($media->url);
                }
                $media->delete();
            }
            $content->delete();
        }

        $post->delete();

        return redirect()->route('blog.index')->with('success', 'Post va fayllar o‘chirildi!');
    }
}
