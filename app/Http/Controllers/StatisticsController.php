<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StatisticsController extends Controller
{
    public function index()
    {
        $statistics = Statistic::all();
        return view('dashboard.statistics.index', compact('statistics'));
    }

    public function show($id)
    {
        $statistic = Statistic::findOrFail($id);
        return view('dashboard.statistics.show', compact('statistic'));
    }

    public function create()
    {
        return view('dashboard.statistics.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'count' => 'required|integer',
            'icon' => 'required|image',
        ]);

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('icons', 'public');
        }

        Statistic::create([
            'name' => $validated['name'],
            'count' => $validated['count'],
            'icon' => $iconPath,
        ]);

        return redirect()->route('statistics.index')->with('success', 'وأضاف الإحصاء بنجاح!');
    }

    public function edit($id)
    {
        $statistic = Statistic::findOrFail($id);
        return view('dashboard.statistics.edit', compact('statistic'));
    }

    public function update(Request $request, $id)
    {
        $statistic = Statistic::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'count' => 'required|integer',
            'icon' => 'nullable|image',
        ]);

        if ($request->hasFile('icon')) {
            if ($statistic->icon) {
                Storage::disk('public')->delete($statistic->icon);
            }

            $iconPath = $request->file('icon')->store('icons', 'public');
        } else {
            $iconPath = $statistic->icon;
        }

        $statistic->update([
            'name' => $validated['name'],
            'count' => $validated['count'],
            'icon' => $iconPath,
        ]);

        return redirect()->route('statistics.index')->with('success', 'تم تحديث الإحصاء بنجاح!');
    }

    public function destroy($id)
    {
        $statistic = Statistic::findOrFail($id);
        $statistic->delete();
        return redirect()->route('statistics.index')->with('success', 'تم حذف الإحصاء بنجاح!');
    }
}
