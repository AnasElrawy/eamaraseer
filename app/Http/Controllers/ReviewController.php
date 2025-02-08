<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('dashboard.reviews.index', compact('reviews'));
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('dashboard.reviews.show', compact('review'));
    }

    public function create()
    {
        return view('dashboard.reviews.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'rating' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('reviews', 'public');

        $review = Review::create([
            'name' => $validated['name'],
            'rating' => $validated['rating'],
            'image' => $imagePath,
        ]);

        return redirect()->route('reviews.index')->with('success', 'مراجعة أضيفت بنجاح!');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('dashboard.reviews.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'rating' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($review->image) {
                Storage::disk('public')->delete($review->image);
            }

            $imagePath = $request->file('image')->store('reviews', 'public');

            $review->update([
                'name' => $validated['name'],
                'rating' => $validated['rating'],
                'image' => $imagePath,
            ]);
        } else {
            $review->update([
                'name' => $validated['name'],
                'rating' => $validated['rating'],
            ]);
        }

        return redirect()->route('reviews.index')->with('success', 'مراجعة تحديث بنجاح!');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'مراجعة حذف بنجاح!');
    }
}
