<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        $files = File::latest()->get();
        return view('files.index', compact('files'));
    }

    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'url_img' => 'nullable|image',
            'url_video' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime',
            'url' => 'nullable|string',
        ]);

        $url = null;
        $type = null;

        if ($request->hasFile('url_img')) {
            $url = $request->file('url_img')->store('uploads/files/img', 'public');
            $type = 'image';
        } elseif ($request->hasFile('url_video')) {
            $url = $request->file('url_video')->store('uploads/files/video', 'public');
            $type = 'video';
        } elseif ($request->filled('url')) {
            $url = $request->input('url');
            $type = 'url';
        }

        File::create([
            'title' => $request->title,
            'content' => $request->content,
            'url' => $url,
            'type' => $type,
        ]);

        return redirect()->route('files.index')->with('success', 'Fayl muvaffaqiyatli qo‘shildi!');
    }

    public function destroy(File $file)
    {
        if (in_array($file->type, ['image', 'video']) && Storage::disk('public')->exists($file->url)) {
            Storage::disk('public')->delete($file->url);
        }

        $file->delete();

        return redirect()->route('files.index')->with('success', 'Fayl o‘chirildi!');
    }
}
