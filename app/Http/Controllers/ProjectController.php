<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.projects.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.show', compact('project'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image',
            'description' => 'required|string',
            'content' => 'required|string',
            'images' => 'required',
            'images.*' => 'image',
        ]);

        $imagePath = $request->file('image')->store('projects', 'public');

        $imagesPaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $imagesPaths[] = $file->store('projects/images', 'public');
            }
        }

        Project::create([
            'title' => $validated['title'],
            'image' => $imagePath,
            'description' => $validated['description'],
            'content' => $validated['content'],
            'images' => json_encode($imagesPaths),
        ]);

        return redirect()->route('projects.index')->with('success', 'أضاف المشروع بنجاح!');
    }
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.edit', compact('project'));
    }


    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'description' => 'required|string',
            'content' => 'required|string',
            'images' => 'nullable',
            'images.*' => 'image',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $imagePath = $request->file('image')->store('projects', 'public');
            $project->image = $imagePath;
        }

        if ($request->hasFile('images')) {
            if ($project->images) {
                foreach (json_decode($project->images, true) as $oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
            $imagesPaths = [];
            foreach ($request->file('images') as $file) {
                $imagesPaths[] = $file->store('projects/images', 'public');
            }
            $project->images = json_encode($imagesPaths);
        }

        $project->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'content' => $validated['content'],
        ]);

        return redirect()->route('projects.index')->with('success', 'تم تحديث المشروع بنجاح!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'تم حذف المشروع بنجاح!');
    }
}
