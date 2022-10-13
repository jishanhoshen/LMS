@extends('admin.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Portfolio</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a href="{{ route('addPortfolio') }}" class="btn btn-block btn-primary">Add Project</a>
                        
                    </div>
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
                            <h3 class="card-title">Project</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="portfolio" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Images</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Images</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
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
    $(function() {
        var table = $('#portfolio').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('portfolio') }}",
            columns: [
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                {
                    data: 'desc',
                    name: 'desc'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
        // $('#getProject').submit(function(e) {
        //     e.preventDefault();
        //     var form = $(this);
        //     var actionUrl = form.attr('action');
        //     var Method = form.attr('method');
        //     console.log(form);
        //     $.ajax({
        //         type: Method,
        //         url: actionUrl,
        //         data: form.serialize(),
        //         success: function(responce) {
        //             console.log(responce);
        //             // $('#service').DataTable().ajax.reload();
        //             // $('#getProject')[0].reset();
        //             // $('#modal-default').modal('toggle');
        //             $(document).Toasts('create', {
        //                 class: 'bg-success fade',
        //                 title: 'Success',
        //                 subtitle: 'Service',
        //                 body: 'New Service Successfully Added'
        //             });
        //         }
        //     });
        // });
    });
</script>
@endsection