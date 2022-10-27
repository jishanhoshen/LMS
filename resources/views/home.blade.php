@extends('layouts.app')

@section('content')
    <!-- banner section start here -->
    <section class="banner-section style-1">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-10">
                        <div class="banner-content">
                            <h6 class="subtitle text-uppercase fw-medium">Online education</h6>
                            <h2 class="title">
                                {!! $config->hero_slogan !!}
                            </h2>
                            <p class="desc">{{ $config->hero_desc }}</p>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6">
                        <div class="banner-thumb">
                            <img src="{{ asset('assets/images/banner/' . $config->hero_image) }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-shapes"></div>
        <div class="cbs-content-list d-none">
            <ul class="lab-ul">
                <?php $i = 1; ?>
                @foreach ($categories as $category)
                    <li class="ccl-shape shape-{{ $i }}"><a href="#">{{ $category->name }}</a></li>
                    @if ($i == 5)
                        @break
                    @endif
                    <?php $i++; ?>
                @endforeach

            {{-- <li class="ccl-shape shape-1"><a href="#">16M Students Happy</a></li>
                <li class="ccl-shape shape-2"><a href="#">130K+ Total Courses</a></li>
                <li class="ccl-shape shape-3"><a href="#">89% Successful Students</a></li>
                <li class="ccl-shape shape-4"><a href="#">23M+ Learners</a></li>
                <li class="ccl-shape shape-5"><a href="#">36+ Languages</a></li> --}}
        </ul>
    </div>
</section>
<!-- banner section ending here -->


<!-- sponsor section start here -->
<div class="sponsor-section section-bg">
    <div class="container">
        <div class="section-wrapper">
            <div class="sponsor-slider">
                <div class="swiper-wrapper">
                    @foreach (json_decode($config->clients, true) as $client)
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="{{ asset('assets/images/sponsor/' . $client) }}" alt="sponsor">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sponsor section ending here -->


<!-- category section start here -->
<div class="category-section padding-tb">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Popular Category</span>
            <h2 class="title">Popular Category For Learn</h2>
        </div>
        <div class="section-wrapper">
            <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                <?php $i = 0; ?>
                @foreach ($categories as $category)
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    {{-- <img src="assets/images/category/icon/01.jpg" alt="category"> --}}
                                </div>
                                <div class="category-content">
                                    <span
                                        style="
                                            background-color: #d6edf2;
                                            font-size: 50px;
                                            height: 90px;
                                            width: 90px;
                                            display: inline-flex;
                                            justify-content: center;
                                            align-items: center;
                                            border-radius: 50%;
                                            margin-bottom:20px;
                                            ">
                                        <i class="{{ $category->icon }}"></i>
                                    </span>

                                    @if ($category->status == 1)
                                        <a href="course">
                                            <h6>{{ $category->name }}</h6>
                                        </a>
                                        <span>Enrole Now</span>
                                    @else
                                        <a href="javascript:void(0)">
                                            <h6>{{ $category->name }}</h6>
                                        </a>
                                        <span>Comming Soon</span>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($i >= 5)
                    @break

                @else
                    <?php $i++; ?>
                @endif
            @endforeach
        </div>
        @if (count($categories) > 6)
            <div class="text-center mt-5">
                <a href="course.html" class="lab-btn"><span>Browse All Categories</span></a>
            </div>
        @endif
    </div>
</div>
</div>
<!-- category section start here -->


<!-- course section start here -->
<div class="course-section padding-tb section-bg">
<div class="container">
    <div class="section-header text-center">
        <span class="subtitle">Featured Courses</span>
        <h2 class="title">Pick A Course To Get Started</h2>
    </div>
    <div class="section-wrapper">
        <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
            @foreach ($courses as $course)
                <div class="col">
                    <div class="course-item">
                        <div class="course-inner">
                            <div class="course-thumb">
                                <img src="{{ asset('assets/images/course/' . $course->thumbnail) }}" alt="course">
                            </div>
                            <div class="course-content">
                                <div class="course-price">${{ $course->price }}</div>
                                <div class="course-category justify-content-between mt-2 mb-4">
                                    <div class="course-cate">
                                        <a href="#">{{ $course->categoryName }}</a>
                                    </div>
                                    <div class="course-reiew">
                                        <span class="ratting">
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                        </span>
                                        <span class="ratting-count">
                                            03 reviews
                                        </span>
                                    </div>
                                </div>
                                <a href="{{ route('single_course', $course->id) }}">
                                    <h5>{{ $course->name }} </h5>
                                </a>
                                <div class="course-footer course-details">
                                    <div class="couse-count"><i class="icofont-video-alt"></i>
                                        {{ $course->lessions }} Lesson</div>
                                    <div class="couse-topic"><i class="icofont-signal"></i>{{ $course->classes }}
                                        Class</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
<!-- course section ending here -->


<!-- abouts section start here -->
<div class="about-section">
<div class="container">
    <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-end flex-row-reverse">
        <div class="col">
            <div class="about-right padding-tb">
                <div class="section-header">
                    <span class="subtitle">About Our {{ config('app.name') }}</span>
                    <h2 class="title">{{ $config->aboutus_title }}</h2>
                </div>
                <div class="section-wrapper">
                    {!! $config->aboutus_desc_html !!}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="about-left">
                <div class="about-thumb">
                    <img src="assets/images/about/01.png" alt="about">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- about section ending here -->


<!-- Instructors Section Start Here -->
<div class="instructor-section padding-tb section-bg">
<div class="container">
    <div class="section-header text-center">
        <span class="subtitle">World-class Instructors</span>
        <h2 class="title">Classes Taught By Real Creators</h2>
    </div>
    <div class="section-wrapper">
        <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
            <div class="col">
                <div class="instructor-item">
                    <div class="instructor-inner">
                        <div class="instructor-thumb">
                            <img src="assets/images/instructor/01.jpg" alt="instructor">
                        </div>
                        <div class="instructor-content">
                            <a href="team-single.html">
                                <h4>Emilee Logan</h4>
                            </a>
                            <p>Master of Education Degree</p>
                            <span class="ratting">
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                            </span>
                        </div>
                    </div>
                    <div class="instructor-footer">
                        <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                            <li><i class="icofont-book-alt"></i> 08 courses</li>
                            <li><i class="icofont-users-alt-3"></i> 30 students</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="instructor-item">
                    <div class="instructor-inner">
                        <div class="instructor-thumb">
                            <img src="assets/images/instructor/02.jpg" alt="instructor">
                        </div>
                        <div class="instructor-content">
                            <a href="team-single.html">
                                <h4>Donald Logan</h4>
                            </a>
                            <p>Master of Education Degree</p>
                            <span class="ratting">
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                            </span>
                        </div>
                    </div>
                    <div class="instructor-footer">
                        <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                            <li><i class="icofont-book-alt"></i> 08 courses</li>
                            <li><i class="icofont-users-alt-3"></i> 30 students</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="instructor-item">
                    <div class="instructor-inner">
                        <div class="instructor-thumb">
                            <img src="assets/images/instructor/03.jpg" alt="instructor">
                        </div>
                        <div class="instructor-content">
                            <a href="team-single.html">
                                <h4>Oliver Porter</h4>
                            </a>
                            <p>Master of Education Degree</p>
                            <span class="ratting">
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                            </span>
                        </div>
                    </div>
                    <div class="instructor-footer">
                        <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                            <li><i class="icofont-book-alt"></i> 08 courses</li>
                            <li><i class="icofont-users-alt-3"></i> 30 students</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="instructor-item">
                    <div class="instructor-inner">
                        <div class="instructor-thumb">
                            <img src="assets/images/instructor/04.jpg" alt="instructor">
                        </div>
                        <div class="instructor-content">
                            <a href="team-single.html">
                                <h4>Nahla Jones</h4>
                            </a>
                            <p>Master of Education Degree</p>
                            <span class="ratting">
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                            </span>
                        </div>
                    </div>
                    <div class="instructor-footer">
                        <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                            <li><i class="icofont-book-alt"></i> 08 courses</li>
                            <li><i class="icofont-users-alt-3"></i> 30 students</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center footer-btn">
            <p>Want to help people learn, grow and achieve more in life?<a href="team.html">Become an
                    instructor</a></p>
        </div>
    </div>
</div>
</div>
<!-- Instructors Section Ending Here -->


<!-- student feedbak section start here -->
{{-- <div class="student-feedbak-section padding-tb shape-img">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Loved by 200,000+ students</span>
            <h2 class="title">Students Community Feedback</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center row-cols-lg-2 row-cols-1">
                <div class="col">
                    <div class="sf-left">
                        <div class="sfl-thumb">
                            <img src="assets/images/feedback/01.jpg" alt="student feedback">
                            <a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" class="video-button"
                                data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="stu-feed-item">
                        <div class="stu-feed-inner">
                            <div class="stu-feed-top">
                                <div class="sft-left">
                                    <div class="sftl-thumb">
                                        <img src="assets/images/feedback/student/01.jpg" alt="student feedback">
                                    </div>
                                    <div class="sftl-content">
                                        <a href="#">
                                            <h6>Oliver Beddows</h6>
                                        </a>
                                        <span>UX designer</span>
                                    </div>
                                </div>
                                <div class="sft-right">
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="stu-feed-bottom">
                                <p>Rapidiously buildcollaboration anden deas sharing viaing and with bleedng edgeing
                                    nterfaces fnergstcally plagiarize teams anbuling paradgms whereas goingi forward
                                    process and monetze</p>
                            </div>
                        </div>
                    </div>
                    <div class="stu-feed-item">
                        <div class="stu-feed-inner">
                            <div class="stu-feed-top">
                                <div class="sft-left">
                                    <div class="sftl-thumb">
                                        <img src="assets/images/feedback/student/02.jpg" alt="student feedback">
                                    </div>
                                    <div class="sftl-content">
                                        <a href="#">
                                            <h6>Madley Pondor</h6>
                                        </a>
                                        <span>UX designer</span>
                                    </div>
                                </div>
                                <div class="sft-right">
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="stu-feed-bottom">
                                <p>Rapidiously buildcollaboration anden deas sharing viaing and with bleedng edgeing
                                    nterfaces fnergstcally plagiarize teams anbuling paradgms whereas goingi forward
                                    process and monetze</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- student feedbak section ending here -->



<!-- Achievement section start here -->
<div class="achievement-section padding-tb">
<div class="container">
    <div class="section-header text-center">
        <span class="subtitle">START TO SUCCESS</span>
        <h2 class="title">Achieve Your Goals With Edukon</h2>
    </div>
    <div class="section-wrapper">
        <div class="achieve-part">
            <div class="row g-4 row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="achieve-item">
                        <div class="achieve-inner">
                            <div class="achieve-thumb">
                                <img src="assets/images/achive/01.png" alt="achieve thumb">
                            </div>
                            <div class="achieve-content">
                                <h4>Start Teaching Today</h4>
                                <p>Seamlessly engage technically sound coaborative reintermed goal oriented content
                                    rather than ethica</p>
                                <a href="#" class="lab-btn"><span>Become A Instructor</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="achieve-item">
                        <div class="achieve-inner">
                            <div class="achieve-thumb">
                                <img src="assets/images/achive/02.png" alt="achieve thumb">
                            </div>
                            <div class="achieve-content">
                                <h4>If You Join Our Course</h4>
                                <p>Seamlessly engage technically sound coaborative reintermed goal oriented content
                                    rather than ethica</p>
                                <a href="#" class="lab-btn"><span>Register For Free</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Achievement section ending here -->
@endsection
