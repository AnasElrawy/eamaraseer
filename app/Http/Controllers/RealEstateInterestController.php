<?php

namespace App\Http\Controllers;

use App\Models\RealEstateInterest;
use Illuminate\Http\Request;

class RealEstateInterestController extends Controller
{

    public function index()
    {
        $realEstateInterests = RealEstateInterest::all();
        return view('dashboard.real_estate_interests.index', compact('realEstateInterests'));
    }

    public function show($id)
    {
        $realEstateInterest = RealEstateInterest::findOrFail($id);
        return view('dashboard.contacts.show', compact('realEstateInterest'));
    }

    
    public function store(Request $request) {
        $validated = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        RealEstateInterest::create($validated);

        return back()->with('success', 'تم إرسال اهتمامك بنجاح!');
    }


    public function update(Request $request, $id)
    {
        $RealEstateInterest = RealEstateInterest::findOrFail($id);

        $validated = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $RealEstateInterest->update($validated);
       
        return back()->with('success', 'تم التحديث بنجاح!');
        // return redirect()->route('contacts.index')->with('success', 'تم التحديث بنجاح!');
    }


    public function destroy($id)
    {
        $RealEstateInterest = RealEstateInterest::findOrFail($id);
        $RealEstateInterest->delete();

        return back()->with('success', 'تم حذف الاهتمام بنجاح!');
        // return redirect()->route('contacts.index')->with('success', 'تم حذف الهتمام بنجاح!');
    }


}
