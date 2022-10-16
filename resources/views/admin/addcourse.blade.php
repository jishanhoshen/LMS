@extends('admin.layout.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Course</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add New Course</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('storeCourse') }}" method="post" id="getCourse" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="courseName">Course Name <sup class="text-danger">*</sup> </label>
                                                <input type="text" class="form-control" name="courseName" id="courseName" placeholder="Course Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="courseDesc">Course Description <sup class="text-danger">*</sup> </label>
                                                <textarea type="text" class="form-control" name="courseDesc" id="courseDesc" required></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="courseThumbnail">Thumbnail <sup class="text-danger">*</sup> </label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="courseThumbnail" accept="image/*" onchange="loadFile(event)" name="courseThumbnail" required>
                                                            <label class="custom-file-label" for="courseThumbnail">Choose image</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <img src="" id="courseThumbnailPreview" style="height:inherit;width:inherit;display:none">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="courseIntro">Intro Video <sub>(Optional)</sub> </label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="courseIntro" name="courseIntro" accept="video/*" onchange="loadFile(event)">
                                                            <label class="custom-file-label" for="courseIntro">Choose video</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <video src="" id="courseIntroPreview" controls style="height:inherit;width:inherit;display:none"></video>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Course Status <sub>(Optional)</sub></label>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="courseStatus" id="courseStatus">
                                                    <label class="form-check-label" for="courseStatus">Deactive</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="oldPrice">Old Price <sub>(Optional)</sub> </label>
                                                        <input type="text" class="form-control" name="oldPrice" id="oldPrice" placeholder="Old Price">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="nowPrice">Now Price <sup class="text-danger">*</sup> </label>
                                                        <input type="text" class="form-control" name="nowPrice" id="nowPrice" placeholder="Now Price" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="courseCategory">Category <sup class="text-danger">*</sup> </label>
                                                        <select class="form-control" id="courseCategory" name="courseCategory" required>
                                                            <option>select</option>
                                                            <option>option 1</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="courseLevel">Level <sup class="text-danger">*</sup> </label>
                                                        <select class="form-control" id="courseLevel" name="courseLevel" required>
                                                            <option>select</option>
                                                            <option>option 1</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="courseQuiz">Quizzes <sub>(Oprional)</sub></label>
                                                        <input type="number" class="form-control" name="courseQuiz" id="courseQuiz" placeholder="Course Name">
                                                    </div>
                                                </div>
                                                <div class="col-6">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
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
    var loadFile = (event) => {
        var output;
        if (event.target.name == 'courseThumbnail') {
            output = document.getElementById('courseThumbnailPreview');
        } else {
            output = document.getElementById('courseIntroPreview');
        }
        output.style.display = "block";
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    $(function() {

        $('#getCourse').submit(function(e) {
            e.preventDefault();
            var form = new FormData(this);
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