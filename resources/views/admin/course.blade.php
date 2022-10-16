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
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a href="{{ route('add-course') }}" class="btn btn-block btn-primary">
                            Add Course
                        </a>
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
                            <h3 class="card-title">Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="service" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Icon Name</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Icon Name</th>
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
        var table = $('#service').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('category') }}",
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'desc',
                    name: 'desc'
                },
                {
                    data: 'icon',
                    name: 'icon'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
        $('#getService').submit(function(e) {
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
                    $('#service').DataTable().ajax.reload();
                    $('#getService')[0].reset();
                    $('#modal-default').modal('toggle');
                    $(document).Toasts('create', {
                        class: 'bg-success fade',
                        title: 'Success',
                        subtitle: 'Category',
                        body: 'New Category Successfully Added'
                    });
                }
            });
        });
    });
</script>
@endsection