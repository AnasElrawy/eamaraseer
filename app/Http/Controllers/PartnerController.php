<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('dashboard.partners.index', compact('partners'));
    }

    public function show($id)
    {
        $partner = Partner::findOrFail($id);
        return view('dashboard.partners.show', compact('partner'));
    }

    public function create()
    {
        return view('dashboard.partners.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('partners'), $imageName);
        }

        Partner::create([
            'name' => $validated['name'],
            'image' => 'partners/' . $imageName,
        ]);

        return redirect()->route('partners.index')->with('success', 'وأضاف الشريك بنجاح!');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('dashboard.partners.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if (file_exists(public_path($partner->image))) {
                unlink(public_path($partner->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('partners'), $imageName);

            $partner->image = 'partners/' . $imageName;
        }

        $partner->name = $validated['name'];
        $partner->save();

        return redirect()->route('partners.index')->with('success', 'تم تحديث الشريك بنجاح!');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'تم حذف الشريك بنجاح!');
    }
}
