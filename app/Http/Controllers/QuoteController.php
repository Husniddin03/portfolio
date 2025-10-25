<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::latest()->get();
        return view('quotes.index', compact('quotes'));
    }

    public function create()
    {
        return view('quotes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'quote' => 'required|string',
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'img' => 'nullable|image',
        ]);

        $imgPath = null;
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('uploads/quotes', 'public');
        }

        Quote::create([
            'quote' => $request->quote,
            'name' => $request->name,
            'job' => $request->job,
            'img' => $imgPath,
        ]);

        return redirect()->route('quotes.index')->with('success', 'Quote muvaffaqiyatli qo‘shildi!');
    }

    public function destroy(Quote $quote)
    {
        if ($quote->img && Storage::disk('public')->exists($quote->img)) {
            Storage::disk('public')->delete($quote->img);
        }

        $quote->delete();

        return redirect()->route('quotes.index')->with('success', 'Quote o‘chirildi!');
    }
}
