<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Service::get();
        $courses = Course::select('courses.*', 'services.id as categoryId', 'services.name as categoryName')->where('courses.status', 1)
            ->join('services', 'courses.category', '=', 'services.id')
            ->get();
        $setting = Setting::select('*')->get();

        return view('home', ['categories' => $categories, 'courses' => $courses, 'config' => $setting[0]]);
    }
}
