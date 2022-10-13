@extends('admin.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Settings</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                                Logos
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('logostore') }}" method="post" enctype="multipart/form-data" id="getlogos">
                                @csrf
                                <label for="headerlogo">Mail Logo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="headerlogo" accept="image/*" id="headerlogo" required>
                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                </div>

                                <label for="footerlogo" class="mt-4">footer Logo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="footerlogo" accept="image/*" id="footerlogo" required>
                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">refresh</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                            <script>
                                $('#getlogos').submit(function(e) {
                                    e.preventDefault();
                                    var form = $(this);
                                    var actionUrl = form.attr('action');
                                    var Method = form.attr('method');
                                    $.ajax({
                                        type: Method,
                                        url: actionUrl,
                                        data: form.serialize(),
                                        success: function(responce) {
                                            console.log(responce);
                                            // $('#service').DataTable().ajax.reload();
                                            // $('#getService')[0].reset();
                                            // $('#modal-default').modal('toggle');
                                            // $(document).Toasts('create', {
                                            //     class: 'bg-success fade',
                                            //     title: 'Success',
                                            //     subtitle: 'Service',
                                            //     body: 'New Service Successfully Added'
                                            // });
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Hero Area
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="">
                                @csrf
                                <div class="form-group">
                                    <label for="projectName">Slogan 1</label>
                                    <input type="text" class="form-control" name="projectName" id="projectName" placeholder="Business Goals Achieved with Design">
                                </div>
                                <div class="form-group">
                                    <label for="projectName">Slogan 2</label>
                                    <input type="text" class="form-control" name="projectName" id="projectName" placeholder="Praesent rhoncus, felis nec accumsan mattis, urna urna laoreet acus vel ultrices">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="projectImages" accept="image/*" id="projectImages">
                                    <label class="custom-file-label" for="customFile">Choose Hero Image</label>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">refresh</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                About Us
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="">
                                @csrf
                                <div class="form-group">
                                    <label for="projectName">Title</label>
                                    <input type="text" class="form-control" name="projectName" id="projectName" placeholder="We Lead from the Front">
                                </div>
                                <div class="form-group">
                                    <label for="projectName">Description</label>
                                    <input type="text" class="form-control" name="projectName" id="projectName" placeholder="Praesent rhoncus, felis nec accumsan mattis, urna urna laoreet acus vel ultrices">
                                </div>
                                <div class="form-group">
                                    <label for="projectName">Youtube Video Link</label>
                                    <input type="text" class="form-control" name="projectName" id="projectName" placeholder="https://youtube.com">
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="projectName">HAPPY CLIENTS</label>
                                            <input type="text" class="form-control" name="projectName" id="projectName" placeholder="63+">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="projectName">PROJECTS COMPLETED</label>
                                            <input type="text" class="form-control" name="projectName" id="projectName" placeholder="350+">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="projectName">RUNNING PROJECTS</label>
                                            <input type="text" class="form-control" name="projectName" id="projectName" placeholder="631+">
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="projectImages" accept="image/*" id="projectImages">
                                    <label class="custom-file-label" for="customFile">Choose Hero Image</label>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">refresh</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Social Links
                            </h3>
                        </div>
                        <div class="card-body">

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