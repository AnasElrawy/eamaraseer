<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;

class ProjectController extends Controller
{
    public function index()
    {

        if (auth()->user()->role == 'admin') {
            $projects = Project::all();
        } else {
            $projects = Project::where('employee_id', auth()->id())->get();
        }
    
        // $projects = Project::all();
        $services = Service::all();

        return view('dashboard.projects.index', compact('projects','services'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.show', compact('project'));
    }

    public function create()
    {
        $services = Service::all();

        return view('dashboard.projects.create', compact('services'));
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
            'service_id' => 'required|exists:services,id',

        ]);

        $imagePath = $request->file('image')->store('projects', 'public');

        $imagesPaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $imagesPaths[] = $file->store('projects/images', 'public');
            }
        }

        $userId = auth()->id();

        Project::create([
            'title' => $validated['title'],
            'image' => $imagePath,
            'description' => $validated['description'],
            'content' => $validated['content'],
            'images' => json_encode($imagesPaths),
            'service_id' => $validated['service_id'],
            'employee_id' => $userId, 

        ]);

        $user = auth()->user();

        if ($user->role === 'admin') {
            return redirect()->route('projects.index')->with('success', 'أضاف المشروع بنجاح!');
        }
        elseif ($user->role === 'employee')
        {
            return redirect()->route('employee.projects.index')->with('success', 'أضاف المشروع بنجاح!');
        }
    }
    public function edit($id)
    {

        $user = auth()->user();
        $userId = auth()->id();
        
        $project = Project::findOrFail($id);

        if ($user->role == 'employee' && $project->employee_id != $userId) {
            return abort(403, 'ليس لديك صلاحية التعديل على هذا المشروع.');
        }

        $services = Service::all(); 
        return view('dashboard.projects.edit', compact('project','services'));
    }


    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $project = Project::findOrFail($id);

        if ($user->role === 'employee' && $project->employee_id !== $user->id) {
            return abort(403, 'ليس لديك صلاحية التعديل على هذا المشروع.');
        }
        

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'description' => 'required|string',
            'content' => 'required|string',
            'images' => 'nullable',
            'images.*' => 'image',
            'service_id' => 'required|exists:services,id',
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
            'service_id' => $validated['service_id']

        ]);

        if ($user->role === 'admin') {
            return redirect()->route('projects.index')->with('success', 'تم تحديث المشروع بنجاح!');
        }
        elseif ($user->role === 'employee')
        {
            return redirect()->route('employee.projects.index')->with('success', 'تم تحديث المشروع بنجاح!');
        }

    }

    public function destroy($id)
    {
        $user = auth()->user();
        $project = Project::findOrFail($id);

        if ($user->role === 'employee' && $project->employee_id !== $user->id) {
            return abort(403, 'ليس لديك صلاحية حذف هذا المشروع.');
        }
        $project->delete();

        if ($user->role === 'admin') {
            return redirect()->route('projects.index')->with('success', 'تم حذف المشروع بنجاح!');
        }
        elseif ($user->role === 'employee')
        {
            return redirect()->route('employee.projects.index')->with('success', 'تم حذف المشروع بنجاح!');
        }
    }
}
