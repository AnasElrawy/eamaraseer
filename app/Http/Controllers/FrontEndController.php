<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Review;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Statistic;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $statistics = Statistic::take(4)->get();
        $services = Service::take(3)->get();
        $projects = Project::all();
        $reviews = Review::all();
        $partners = Partner::all();
        $gallery = Gallery::all();



        return view('content.index', compact('sliders', 'statistics', 'services', 'projects', 'reviews', 'partners', 'gallery'));
    }

    public function about()
    {
        $services = Service::all();
        $partners = Partner::all();
        $reviews = Review::all();

        return view('content.about.index', compact('services', 'partners', 'reviews'));
    }


    public function consulting()
    {
        $services = Service::all();
        return view('content.consulting.index',compact('services'));
    }


    public function faqs()
    {

        $faqs = Faq::all();

        return view('content.faqs.index', compact('faqs'));
    }

    public function contact()
    {
        return view('content.contact.index');
    }

    public function project($id)
    {
        $project = Project::findOrFail($id);

        return view('content.projects.show', compact('project'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view('content.projects.index', compact('projects'));
    }

}
