<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\AdminNotificationMail;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Setting;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('dashboard.contacts.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('dashboard.contacts.show', compact('contact'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        // Send email to admin
        $setting = Setting::first();
        $adminEmail = 'anas_elrawy@yahoo.com';
        // $adminEmail = $setting->email;
        Mail::to($adminEmail)->send(new ContactMessageMail($validated));


        return redirect()->back()->with('success', 'تم إضافة الاتصال بنجاح!');
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $contact->update($validated);
        return redirect()->route('contacts.index')->with('success', 'تم تحديثها بنجاح!');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'تم حذف الاتصال بنجاح!');
    }
}
