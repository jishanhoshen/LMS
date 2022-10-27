@extends('admin.layout.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Course</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('storeCourse') }}" method="post" id="getCourse" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="d-inline pr-2" style="min-width:fit-content;">BASIC
                                            INFORMATION</span>
                                        <hr style="width: 100%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="courseName">COURSE TITLE <sup class="text-danger">*</sup>
                                        </label>
                                        <input type="text" class="form-control" name="courseName" id="courseName" placeholder="Course title" required>
                                        <small tabindex="-1" class="form-text text-muted">Course title Should be under
                                            80 carecter</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="courseDesc">Description <sup class="text-danger">*</sup>
                                        </label>
                                        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
                                        <div id="quillDesc" class="form-control"></div>
                                        <!-- <input type="hidden" name="courseDesc" id="courseDesc"> -->
                                        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header p-1" id="sectionId1">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block d-flex justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapseId1" aria-expanded="true" aria-controls="collapseId1">
                                                        Course Overview
                                                        <i class="fas fa-angle-down"></i>
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseId1" class="collapse show" aria-labelledby="sectionId1" data-parent="#accordionExample">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush">
                                                        <a href="#" class="list-group-item list-group-item-action px-3 py-2" aria-current="true">
                                                            <div class="d-flex justify-content-between">
                                                                <div><i class="fas fa-grip-lines pr-2"></i>Watch Trailer </div><span>1m 10s</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header p-1" id="sectionId2">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block d-flex justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapseId2" aria-expanded="true" aria-controls="collapseId2">
                                                        Getting Started with Angular
                                                        <i class="fas fa-angle-down"></i>
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseId2" class="collapse" aria-labelledby="sectionId2" data-parent="#accordionExample">
                                                <div class="card-body p-0">
                                                    <div class="list-group list-group-flush">
                                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action px-3 py-2" aria-current="true">
                                                            <div class="d-flex justify-content-between">
                                                                <div><i class="fas fa-grip-lines pr-2"></i> Introduction </div><span>8m 42s</span>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action px-3 py-2">
                                                            <div class="d-flex justify-content-between">
                                                                <div><i class="fas fa-grip-lines pr-2"></i> Introduction to TypeScript</div><span>50m 13s</span>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action px-3 py-2">
                                                            <div class="d-flex justify-content-between">
                                                                <div><i class="fas fa-grip-lines pr-2"></i> Comparing Angular to AngularJS</div><span>12m 10s</span>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action px-3 py-2">
                                                            <div class="d-flex justify-content-between">
                                                                <div><i class="fas fa-grip-lines pr-2"></i>Comparing Angular to AngularJS</div><span></span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-default" type="button" onclick="sectionModal()">Add Section</button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body  text-center">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="courseThumbnail">Thumbnail <sup class="text-danger">*</sup>
                                            </label>
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <input type="file" class="custom-file-input" id="courseThumbnail" accept="image/*" onchange="loadFile(event)" name="courseThumbnail" style="display: none;" required>
                                                    <label for="courseThumbnail" class="w-100 m-0" style="cursor: pointer;">
                                                        <img id="courseThumbnailPreview" class="w-100 p-5" style="object-fit: contain; max-height: 250px;" src="{{ asset('image-placeholder.png') }}">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="courseIntro">Intro Video <sub>(Optional)</sub>
                                            </label>
                                            <div class="card">
                                                <input type="file" class="custom-file-input" id="courseIntro" name="courseIntro" accept="video/*" onchange="loadFile(event)" style="display:none;">
                                                <label for="courseIntro" class="w-100 m-0" style="cursor: pointer;">
                                                    <video poster="{{ asset('video-placeholder.png') }}" id="courseIntroPreview" class="w-100" style="max-height: 250px;">
                                                    </video>
                                                </label>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="introVideoUrl">URL <sub>(Optional)</sub>
                                                        </label>
                                                        <input type="text" class="form-control" name="introVideoUrl" id="introVideoUrl" placeholder="https://youtu.be/yourvideos">
                                                        <small tabindex="-1" class="form-text text-muted">Enter a valid video URL.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="oldPrice">Old Price <sub>(Optional)</sub> </label>
                                                <input type="text" class="form-control" name="oldPrice" id="oldPrice" placeholder="Old Price">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nowPrice">Now Price <sup class="text-danger">*</sup>
                                                </label>
                                                <input type="text" class="form-control" name="nowPrice" id="nowPrice" placeholder="Now Price" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="courseCategory">Category <sup class="text-danger">*</sup>
                                                </label>
                                                <select class="form-control" id="courseCategory" name="courseCategory" required>
                                                    <option>select</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="courseLevel">Level <sup class="text-danger">*</sup>
                                                </label>
                                                <select class="form-control" id="courseLevel" name="courseLevel" required>
                                                    <option>select</option>
                                                    <option value="1">Beginner</option>
                                                    <option value="2">Intermediate</option>
                                                    <option value="3">Advance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="courseQuiz">Quizzes <sub>(Oprional)</sub></label>
                                                <input type="number" class="form-control" name="courseQuiz" id="courseQuiz" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Certificate <sub>(Optional)</sub></label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="courseCertificate" value="yes">
                                                    <label class="form-check-label">Yes</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="courseCertificate" value="no" checked="">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Course Status <sub>(Optional)</sub></label>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="courseStatus" id="courseStatus">
                                                    <label class="form-check-label" for="courseStatus">Deactive</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal fade" id="createSectionModal" aria-modal="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add New Section</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="modalForm">
                                        <div class="form-group">
                                            <label for="sectionNmaeField">Section Name
                                            </label>
                                            <input type="text" class="form-control" name="sectionNmaeField" id="sectionNmaeField" placeholder="Course title" required>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="makeSection()">Save changes</button>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    var createSectionModal = $('#createSectionModal');
    function sectionModal() {
        createSectionModal.modal('show');
    }

    function makeSection() {
        var accordion = $("#accordionExample");

        var sectionId = "sectionId" + (accordion.children().length + 1);
        var collapseId = "collapseId" + (accordion.children().length + 1);

        var sectionName = $('#sectionNmaeField').val();

        var sectionTemplate = '<div class="card"><div class="card-header p-1" id="' + sectionId + '"><h2 class="mb-0"><button class="btn btn-block d-flex justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#' + collapseId + '" aria-expanded="true" aria-controls="' + collapseId + '">' + sectionName + '<i class="fas fa-angle-down"></i></button></h2></div><div id="' + collapseId + '" class="collapse" aria-labelledby="' + sectionId + '" data-parent="#accordionExample"><div class="card-body p-0"><div class="list-group list-group-flush"></div></div></div></div>';
        accordion.append(sectionTemplate);
        createSectionModal.modal('hide');
        $('#modalForm')[0].reset();

    }
    var quill = new Quill('#quillDesc', {
        theme: 'snow'
    });
    $('.ql-editor').css({
        "height": "250px"
    });
    var loadFile = (event) => {
        var output;
        if (event.target.name == 'courseThumbnail') {
            output = document.getElementById('courseThumbnailPreview');
            output.classList.remove("p-5");
            output.classList.add("p-0");
            output.style.objectFit = "cover";
        } else {
            output = document.getElementById('courseIntroPreview');
            output.setAttribute('controls', true);
        }
        output.src = URL.createObjectURL(event.target.files[0]) + '#t=1';
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    $(function() {

        $('#getCourse').submit(function(e) {
            e.preventDefault();
            var form = new FormData(this);
            form.append('courseDesc', quill.root.innerHTML);
            var formPro = $(this);
            var actionUrl = formPro.attr('action');
            var Method = formPro.attr('method');
            $.ajax({
                type: Method,
                url: actionUrl,
                data: form,
                success: function(responce) {
                    console.log(responce);
                    // $('#service').DataTable().ajax.reload();
                    // $('#getService')[0].reset();
                    // $('#modal-default').modal('toggle');
                    // $(document).Toasts('create', {
                    //     class: 'bg-success fade',
                    //     title: 'Success',
                    //     subtitle: 'Category',
                    //     body: 'New Category Successfully Added'
                    // });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    });
</script>
@endsection