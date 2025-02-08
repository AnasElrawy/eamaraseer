<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('dashboard.sliders.index', compact('sliders'));
    }

    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('dashboard.sliders.show', compact('slider'));
    }

    public function create()
    {
        return view('dashboard.sliders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'required|image',
        ]);

        // رفع الصورة وتخزينها
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sliders', 'public');
            $validated['image'] = $imagePath;
        }

        Slider::create($validated);
        return redirect()->route('sliders.index')->with('success', 'أضاف شريط التمرير بنجاح!');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('dashboard.sliders.edit', compact('slider'));
    }


    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }

            $imagePath = $request->file('image')->store('sliders', 'public');
            $validated['image'] = $imagePath;
        }

        $slider->update($validated);
        return redirect()->route('sliders.index')->with('success', 'تم تحديث شريط التمرير بنجاح!');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'تم حذف شريط التمرير بنجاح!');
    }
}
