<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('dashboard.gallery.index', compact('gallery'));
    }

    public function show($id)
    {
        $image = Gallery::findOrFail($id);
        return view('dashboard.gallery.show', compact('image'));
    }

    public function create()
    {
        return view('dashboard.gallery.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'image' => $imagePath,
        ]);

        return redirect()->route('gallery.index')->with('success', 'أضافت الصورة بنجاح!');
    }

    public function edit($id)
    {
        $image = Gallery::findOrFail($id);
        return view('dashboard.gallery.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $image = Gallery::findOrFail($id);

        $validated = $request->validate([
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($image->image)) {
                Storage::disk('public')->delete($image->image);
            }

            $imagePath = $request->file('image')->store('gallery', 'public');
        } else {
            $imagePath = $image->image;
        }

        $image->update([
            'image' => $imagePath,
        ]);

        return redirect()->route('gallery.index')->with('success', 'تم تحديث الصورة بنجاح!');
    }

    public function destroy($id)
    {
        $image = Gallery::findOrFail($id);
        $image->delete();
        return redirect()->route('gallery.index')->with('success', 'تم حذف الصورة بنجاح!');
    }
}
