@extends('admin.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Service</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li class="breadcrumb-item active">add</li>
                    </ol>
                </div><!-- /.col -->
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
                            <h3 class="card-title">
                                Edit Service
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('storePortfolio') }}" method="post" id="getProject" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="projectName">Project Name</label>
                                        <input type="text" class="form-control" name="projectName" id="projectName" placeholder="Project">
                                    </div>
                                    <div class="form-group">
                                        <label for="projectType">Project Type</label>
                                        <input type="text" class="form-control" name="projectType" id="projectType" placeholder="Type">
                                    </div>
                                    <div class="form-group">
                                        <label for="projectDesc">Project Description</label>
                                        <textarea type="text" class="form-control" name="projectDesc" id="projectDesc"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile">Images </label>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="projectImages[]" multiple accept="image/*" id="projectImages">
                                            <label class="custom-file-label" for="customFile">Choose Images</label>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="projectStatus" id="projectStatus">
                                        <label class="form-check-label" for="projectStatus">Deactive</label>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection