<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('dashboard.faqs.index', compact('faqs'));
    }

    public function show($id)
    {
        $faq = Faq::findOrFail($id);
        return view('dashboard.faqs.show', compact('faq'));
    }

    public function create()
    {
        return view('dashboard.faqs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Faq::create($validated);
        return redirect()->route('faqs.index')->with('success', 'وأضاف الأسئلة الشائعة بنجاح!');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('dashboard.faqs.edit', compact('faq'));
    }


    public function update(Request $request, $id)
    {
        $faq = Faq::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $faq->update($validated);
        return redirect()->route('faqs.index')->with('success', 'تم تحديث الأسئلة الشائعة بنجاح!');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'تم حذف الأسئلة الشائعة بنجاح!');
    }
}
