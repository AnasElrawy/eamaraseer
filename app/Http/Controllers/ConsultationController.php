<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Mail\AdminNotificationMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceRequestMail;
use App\Models\Setting;

class ConsultationController extends Controller
{
    public function index()
    {
        // $consultations = Consultation::with('service')->get();
        $consultations = Consultation::with('service')->latest()->get();
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
            'service_id' =>'required',
            'message' => 'required|string',
        ]);

        Consultation::create($validated);

        // Send email to admin
        $setting = Setting::first();
        // $adminEmail = 'abdulelah@eamaraseer.sa';
        // $adminEmail = 'anas_elrawy@yahoo.com';
        $adminEmail = $setting->receiving_email;
        Mail::to($adminEmail)->send(new ServiceRequestMail($validated));



        return redirect()->back()->with('success', 'استلام طلب الخدمة بنجاح!');
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
