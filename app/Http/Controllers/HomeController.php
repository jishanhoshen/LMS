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
        $courses = Course::select('*')->get();
        $setting = Setting::select('*')->get();

        return view('home', ['categories' => $categories, 'courses' => $courses, 'config'=> $setting[0]]);
    }
}
