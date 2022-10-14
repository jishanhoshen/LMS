@extends('layouts.app')

@section('content')
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="padding:72px 0px">
        <div class="container">
        </div>
    </div>
    <!-- Page Header section ending here -->
    <!-- group select section start here -->
    <div class="group-select-section">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-center g-4">
                    <div class="col-md-1">
                        <div class="group-select-left">
                            <i class="icofont-abacus-alt"></i>
                            <span>Filters</span>
                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="group-select-right">
                            <div class="row g-2 row-cols-lg-4 row-cols-sm-2 row-cols-1">
                                <div class="col">
                                    <div class="select-item">
                                        <select>
                                            <option value="">All Categories</option>
                                            <option value="uncategorized">Uncategorized</option>
                                            <option value="academy">Academy</option>
                                            <option value="agency">Agency</option>
                                            <option value="app">App</option>
                                            <option value="bar">Bar</option>
                                        </select>
                                        <div class="select-icon">
                                            <i class="icofont-rounded-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="select-item">
                                        <select>
                                            <option value="">All Language</option>
                                            <option value="java">JAVA</option>
                                            <option value="php">PHP</option>
                                            <option value="html">HTML</option>
                                            <option value="python">PYTHON</option>
                                            <option value="javascript">JAVASCRIPT</option>
                                        </select>
                                        <div class="select-icon">
                                            <i class="icofont-rounded-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="select-item">
                                        <select>
                                            <option value="">All Prices</option>
                                            <option value="29">29</option>
                                            <option value="39">39</option>
                                            <option value="69">69</option>
                                            <option value="99">99</option>
                                            <option value="199">199</option>
                                        </select>
                                        <div class="select-icon">
                                            <i class="icofont-rounded-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="select-item">
                                        <select>
                                            <option value="">All Skills</option>
                                            <option value="html">HTML</option>
                                            <option value="css">CSS</option>
                                            <option value="php">PHP</option>
                                            <option value="java">JAVA</option>
                                            <option value="javascript">JAVASCRIPT</option>
                                            <option value="wordpress">WORDPRESS</option>
                                            <option value="react">REACT</option>
                                            <option value="vue">VUE</option>
                                            <option value="angular">ANGULAR</option>
                                        </select>
                                        <div class="select-icon">
                                            <i class="icofont-rounded-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- group select section ending here -->


    <!-- course section start here -->
    <div class="course-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="course-showing-part">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="course-showing-part-left">
                            <p>Showing 1-6 of 10 results</p>
                        </div>
                        <div class="course-showing-part-right d-flex flex-wrap align-items-center">
                            <span>Sort by :</span>
                            <div class="select-item">
                                <select>
                                    <option value="">Select Oder</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="php">PHP</option>
                                    <option value="java">JAVA</option>
                                    <option value="javascript">JAVASCRIPT</option>
                                </select>
                                <div class="select-icon">
                                    <i class="icofont-rounded-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                    @foreach ($courses as $course)
                        <div class="col">
                            <div class="course-item">
                                <div class="course-inner">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/images/course/'. $course->thumbnail) }}" alt="course">
                                    </div>
                                    <div class="course-content">
                                        <div class="course-price">${{ $course->price }}</div>
                                        <div class="course-category justify-content-between mt-2 mb-4">
                                            <div class="course-cate">
                                                <a href="#">{{ $course->category }}</a>
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
                                            <div class="couse-count"><i class="icofont-video-alt"></i> {{ $course->lessions }} Lesson</div>
                                            <div class="couse-topic"><i class="icofont-signal"></i>{{ $course->classes }} Class</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <ul class="default-pagination lab-ul">
                    <li>
                        <a href="#"><i class="icofont-rounded-left"></i></a>
                    </li>
                    <li>
                        <a href="#">01</a>
                    </li>
                    <li>
                        <a href="#" class="active">02</a>
                    </li>
                    <li>
                        <a href="#">03</a>
                    </li>
                    <li>
                        <a href="#"><i class="icofont-rounded-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- course section ending here -->
@endsection
