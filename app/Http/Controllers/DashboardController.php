<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Project;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function employeeDashbord() {

        $userId = auth()->id(); // جلب معرف الموظف المسجل

        // عدد المشاريع الخاصة بالموظف
        $myProjectsCount = Project::where('employee_id', $userId)->count();

     

        // آخر 5 مشاريع للموظف
        $latestMyProjects = Project::where('employee_id', $userId)
                                  ->latest()
                                  ->take(5)
                                  ->get();

        return view('dashboard.employeeDashbord', compact('myProjectsCount', 'latestMyProjects'));

        // return view('dashboard.employeeDashbord');
    }
}
