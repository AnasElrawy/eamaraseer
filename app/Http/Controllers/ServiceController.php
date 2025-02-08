<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('dashboard.services.index', compact('services'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('dashboard.services.show', compact('service'));
    }

    public function create()
    {
        return view('dashboard.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
            'icon' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('services', 'public');

        $iconPath = $request->file('icon')->store('icons', 'public');

        Service::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'image' => $imagePath,
            'icon' => $iconPath,
        ]);

        return redirect()->route('services.index')->with('success', 'تمت إضافة الخدمة بنجاح!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('dashboard.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'icon' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $imagePath = $request->file('image')->store('services', 'public');
            $validated['image'] = $imagePath;
        }

        if ($request->hasFile('icon')) {
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }
            $iconPath = $request->file('icon')->store('icons', 'public');
            $validated['icon'] = $iconPath;
        }

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'تم تحديث الخدمة بنجاح!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'تم حذف الخدمة بنجاح!');
    }
}
