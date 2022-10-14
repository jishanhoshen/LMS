@extends('admin.layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Categories</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <div class="float-sm-right">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                                data-target="#modal-default">
                                Add Category
                            </button>
                        </div>
                    </div><!-- /.col -->
                    <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add New Category</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="{{ route('storeServices') }}" method="post" id="getService">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="serviceName">Category Name</label>
                                            <input type="text" class="form-control" name="serviceName" id="serviceName"
                                                placeholder="service">
                                        </div>
                                        <div class="form-group">
                                            <label for="serviceDesc">Category Description</label>
                                            <textarea type="text" class="form-control" name="serviceDesc" id="serviceDesc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="serviceIcon">Category Icon Class </label>
                                            <span>( get class from <a href="https://icofont.com/icons"
                                                    target="_blank">IcoFont</a>)</span>
                                            <input type="text" class="form-control" name="serviceIcon" id="serviceIcon"
                                                placeholder="service">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="serviceStatus"
                                                id="serviceStatus">
                                            <label class="form-check-label" for="serviceStatus">Deactive</label>
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
