<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $courses = Course::select('*')->get();

        return view('course', ['courses' => $courses]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single()
    {
        $course = Course::select('*')->where('id', 1)->get();

        return view('course-single', ['course' => $course[0]]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {

        return view('course-view');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = '';
        if (Course::exists()) {
            $courses = Course::select('id,name,thumbnail')->where('status','1')->get();
        }
        
        return view('admin.course', ['courses' => $courses]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addcourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'courseName' => 'required',
            'courseDesc' => 'required',
            'nowPrice' => 'required',
            'courseCategory' => 'required',
            'courseLevel' => 'required',
            'courseIntro' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm|max:6144',
            'courseThumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->all();

        // $course = new Course();
        // $course->name = $request->courseName;
        // $course->category = $request->courseCategory;
        // $course->desc = $request->courseDesc;
        // $course->price = $request->nowPrice;

        // if ($request->has('oldPrice')) {
        //     $course->old_price = $request->oldPrice;
        // }


        // if ($request->hasFile('courseThumbnail')) {
        //     $image = $request->file('courseThumbnail');
        //     $imageExt = $image->getClientOriginalExtension();
        //     $imageName = 'course_' . $course->id . '.' . $imageExt;
        //     $image->move(public_path() . '/assets/images/course/', $imageName);
        // } else {
        //     $imageName = 'noimage';
        // }

        // if ($request->has('courseIntro')) {
        //     $video = $request->file('courseIntro');
        //     $videoExt = $video->getClientOriginalExtension();
        //     $videoName = 'course_' . $course->id . '.' . $videoExt;
        //     $video->move(public_path() . '/assets/videos/course/', $videoName);
        // } else {
        //     $videoName = 'novideo';
        // }

        return response()->json([
            "data" => $data,
            // "image" => $imageName,
            // "video" => $request->file('courseIntro')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
