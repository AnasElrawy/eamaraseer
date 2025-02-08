<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::all();
        return view('dashboard.consultations.index', compact('consultations'));
    }

    public function show($id)
    {
        $consultation = Consultation::findOrFail($id);
        return view('dashboard.consultations.show', compact('consultation'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        Consultation::create($validated);
        return redirect()->back()->with('success', 'استلام طلب الاستشارة بنجاح!');
    }

    public function update(Request $request, $id)
    {
        $consultation = Consultation::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        $consultation->update($validated);
        return redirect()->route('consultations.index')->with('success', 'تم تحديث الاستشارة بنجاح!');
    }

    public function destroy($id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->delete();
        return redirect()->route('consultations.index')->with('success', 'تم حذف الاستشارة بنجاح!');
    }
}
