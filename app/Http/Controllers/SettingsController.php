<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('dashboard.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'logo' => 'nullable|image',
                'footer_logo' => 'nullable|image',
                'site_description' => 'nullable|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'receiving_email' => 'nullable|email',
                'physical_address' => 'required|string',
                'map_address' => 'required|string',
                'copyright' => 'required|string',
                'favicon' => 'nullable|image',
                'meta_title' => 'nullable|string',
                'meta_description' => 'nullable|string',
                'meta_keywords' => 'nullable|string',
            ]);

            $settings = Setting::first();

            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('uploads/settings', 'public');
                $validated['logo'] = $logoPath;
            }

            if ($request->hasFile('footer_logo')) {
                $footerLogoPath = $request->file('footer_logo')->store('uploads/settings', 'public');
                $validated['footer_logo'] = $footerLogoPath;
            }

            if ($request->hasFile('favicon')) {
                $faviconPath = $request->file('favicon')->store('uploads/settings', 'public');
                $validated['favicon'] = $faviconPath;
            }

            $settings->update($validated);

            return redirect()->route('settings.index')->with('success', 'تحديث الإعدادات بنجاح!');
        } catch (\Exception $e) {
            dd([
                'error_message' => $e->getMessage(),
                'request_data' => $request->all(),
                'trace' => $e->getTraceAsString()
            ]);
        }
    }
}
