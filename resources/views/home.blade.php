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
                            <h2 class="title"><span class="d-lg-block">Learn The</span> Skills You Need <span
                                    class="d-lg-block">To Succeed</span></h2>
                            <p class="desc">Free online courses from the world’s Leading experts. join 18+ million
                                Learners today.</p>
                            <form action="https://demos.codexcoder.com/">
                                <div class="banner-icon">
                                    <i class="icofont-search"></i>
                                </div>
                                <input type="text" placeholder="Keywords of your course">
                                <button type="submit">Search Course</button>
                            </form>
                            <div class="banner-catagory d-flex flex-wrap">
                                <p>Most Popular : </p>
                                <ul class="lab-ul d-flex flex-wrap">
                                    <li><a href="#">Figma</a></li>
                                    <li><a href="#">Adobe XD</a></li>
                                    <li><a href="#">illustration</a></li>
                                    <li><a href="#">Photoshop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6">
                        <div class="banner-thumb">
                            <img src="assets/images/banner/01.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-shapes"></div>
        <div class="cbs-content-list d-none">
            <ul class="lab-ul">
                <li class="ccl-shape shape-1"><a href="#">16M Students Happy</a></li>
                <li class="ccl-shape shape-2"><a href="#">130K+ Total Courses</a></li>
                <li class="ccl-shape shape-3"><a href="#">89% Successful Students</a></li>
                <li class="ccl-shape shape-4"><a href="#">23M+ Learners</a></li>
                <li class="ccl-shape shape-5"><a href="#">36+ Languages</a></li>
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
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/01.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/02.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/03.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/04.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/05.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/06.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
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
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/01.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html">
                                        <h6>Computer Science</h6>
                                    </a>
                                    <span>24 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/02.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html">
                                        <h6>Civil Engineering</h6>
                                    </a>
                                    <span>40 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/03.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html">
                                        <h6>Business Analysis</h6>
                                    </a>
                                    <span>27 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/04.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html">
                                        <h6>Data Science Analytics</h6>
                                    </a>
                                    <span>28 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/05.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html">
                                        <h6>Learning Management</h6>
                                    </a>
                                    <span>78 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/06.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html">
                                        <h6>Computer Engineering</h6>
                                    </a>
                                    <span>38 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="course.html" class="lab-btn"><span>Browse All Categories</span></a>
                </div>
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
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/01.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Adobe XD</a>
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
                                    <a href="course-single.html">
                                        <h5>Fundamentals of Adobe XD Theory Learn New</h5>
                                    </a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/01.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">William Smith</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i
                                                    class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/02.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Photoshop</a>
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
                                    <a href="course-single.html">
                                        <h5>Certified Graphic Design with Free Project Course</h5>
                                    </a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/02.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Lora Smith</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i
                                                    class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/03.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Photoshop</a>
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
                                    <a href="course-single.html">
                                        <h5>Theory Learn New Student And Fundamentals</h5>
                                    </a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/03.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Robot Smith</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i
                                                    class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/04.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Adobe XD</a>
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
                                    <a href="course-single.html">
                                        <h5>Computer Fundamentals Basic Startup Ultricies Vitae</h5>
                                    </a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/04.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Zinat Zaara</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i
                                                    class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/05.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Adobe XD</a>
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
                                    <a href="course-single.html">
                                        <h5>Boozy Halloween Drinks for the Grown Eleifend Kuismod</h5>
                                    </a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/05.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Billy Rivera</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i
                                                    class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/06.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Adobe XD</a>
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
                                    <a href="course-single.html">
                                        <h5>Student Want to Learn About Science And Arts</h5>
                                    </a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/06.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Subrina Kabir</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i
                                                    class="icofont-external-link"></i></a>
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
    <!-- course section ending here -->


    <!-- abouts section start here -->
    <div class="about-section">
        <div class="container">
            <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-end flex-row-reverse">
                <div class="col">
                    <div class="about-right padding-tb">
                        <div class="section-header">
                            <span class="subtitle">About Our Edukon</span>
                            <h2 class="title">Good Qualification Services And Better Skills</h2>
                            <p>Distinctively provide acces mutfuncto users whereas transparent proceses somes ncentivize
                                eficient functionalities rather than extensible archtectur communicate leveraged services
                                and cross-platform.</p>
                        </div>
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-left">
                                        <img src="assets/images/about/icon/01.jpg" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>Skilled Instructors</h5>
                                        <p>Distinctively provide acces mutfuncto users whereas communicate leveraged
                                            services</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-left">
                                        <img src="assets/images/about/icon/02.jpg" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>Get Certificate</h5>
                                        <p>Distinctively provide acces mutfuncto users whereas communicate leveraged
                                            services</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-left">
                                        <img src="assets/images/about/icon/03.jpg" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>Online Classes</h5>
                                        <p>Distinctively provide acces mutfuncto users whereas communicate leveraged
                                            services</p>
                                    </div>
                                </li>
                            </ul>
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
    <div class="student-feedbak-section padding-tb shape-img">
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
    </div>
    <!-- student feedbak section ending here -->


    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">FORM OUR BLOG POSTS</span>
                <h2 class="title">More Articles From Resource Library</h2>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/01.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html">
                                        <h4>Scottish Creatives To Receive Funded Business.</h4>
                                    </a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg
                                        Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/02.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html">
                                        <h4>Scottish Creatives To Receive Funded Business.</h4>
                                    </a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg
                                        Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/03.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html">
                                        <h4>Scottish Creatives To Receive Funded Business.</h4>
                                    </a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg
                                        Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->


    <!-- Achievement section start here -->
    <div class="achievement-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">START TO SUCCESS</span>
                <h2 class="title">Achieve Your Goals With Edukon</h2>
            </div>
            <div class="section-wrapper">
                <div class="counter-part mb-4">
                    <div class="row g-4 row-cols-lg-4 row-cols-sm-2 row-cols-1 justify-content-center">
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="30" data-speed="1500"></span><span>+</span>
                                        </h2>
                                        <p>Years of Language Education Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="3080" data-speed="1500"></span><span>+</span>
                                        </h2>
                                        <p>Learners Enrolled in Edukon Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="330" data-speed="1500"></span><span>+</span>
                                        </h2>
                                        <p>Qualified Teachers And Language Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="2300" data-speed="1500"></span><span>+</span>
                                        </h2>
                                        <p>Innovative Foreign Language Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
