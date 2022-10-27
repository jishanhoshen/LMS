<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

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
    public function single($id)
    {
        $course = Course::select('courses.*', 'services.id as categoryId', 'services.name as categoryName')->where('courses.id', $id)
        ->join('services','courses.category','=','services.id')
        ->get();

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
            $courses = Course::select('id,name,thumbnail')->where('status', '1')->get();
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
        $categories = Service::all();
        return view('admin.addcourse', ['categories' => $categories]);
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
            'courseIntro' => 'mimes:mp4,ogx,oga,ogv,ogg,webm|max:6144',
            'courseThumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->all();

        $course = new Course();
        $course->name = $request->courseName;
        $course->category = $request->courseCategory;
        $course->desc = $request->courseDesc;
        $course->price = $request->nowPrice;
        $course->certificate = $request->courseCertificate;
        $course->quizzes = $request->courseQuiz;
        $course->level = $request->courseLevel;
       
        if($request->has('courseStatus') && $request->courseStatus == 'on'){
            $course->status = 0;
        }

        if ($request->has('oldPrice')) {
            $course->old_price = $request->oldPrice;
        }
        $course->save();

        if ($request->hasFile('courseThumbnail')) {
            $image = $request->file('courseThumbnail');
            $imageExt = $image->getClientOriginalExtension();
            $imageName = 'course_' . $course->id . '.' . $imageExt;
            $image->move(public_path() . '/assets/images/course/', $imageName);
        } else {
            $imageName = 'noimage';
        }

        if ($request->has('courseIntro')) {
            $video = $request->file('courseIntro');
            $videoExt = $video->getClientOriginalExtension();
            $videoName = 'course_' . $course->id . '.' . $videoExt;
            $video->move(public_path() . '/assets/videos/course/', $videoName);
        } else {
            $videoName = 'novideo';
        }

        $course->thumbnail = $imageName;
        $course->intro = $videoName;
        $course->save();

        return response()->json([
            "data" => $data,

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
