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
                        <li class="breadcrumb-item"><a href="{{ route('services') }}">services</a></li>
                        <li class="breadcrumb-item active">edit</li>
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
                            <form action="{{ route('updateServices', $serviceEdit->id) }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="serviceName">service Name</label>
                                        <input type="text" class="form-control" name="serviceName" id="serviceName" placeholder="service" value="{{ $serviceEdit['name'] }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="serviceDesc">service Description</label>
                                        <textarea type="text" class="form-control" name="serviceDesc" id="serviceDesc">{{ $serviceEdit['desc'] }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="serviceIcon">service Icon Class </label> <span>( get class from <a href="https://icofont.com/icons"
                                            target="_blank">IcoFont</a>)</span>
                                        <input type="text" class="form-control" name="serviceIcon" id="serviceIcon" placeholder="service" value="{{ $serviceEdit['icon'] }}">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="serviceStatus" id="serviceStatus" {{ ($serviceEdit['status'] == 1) ? "" : "checked" }}>
                                        <label class="form-check-label" for="serviceStatus">Deactive</label>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
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