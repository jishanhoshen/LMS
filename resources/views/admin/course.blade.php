@extends('admin.layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Courses</h1>
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
            <div class="container">
                <div class="row justify-content-center">
                    @if (!empty($courses))
                        @foreach ($courses as $course)
                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="card card-sm mx-2"
                                    style="border: 1px solid #dfe2e6; border-radius: 0.5rem; box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
                                    <div class="editable"
                                        style="position: absolute; display: flex; width: 100%; justify-content: space-between; padding: 0.5rem 1rem;background-image: linear-gradient(#545454, #ffffff00); border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem;">
                                        <a href="#" class="text-white">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="text-red">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </div>
                                    <img src="{{ asset('assets/images/course/' . $course->thumbnail) }}"
                                        class="card-img-top" alt=""
                                        style="height: 168px;object-fit: cover;border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem;">
                                    <div class="card-body" style="padding:.625rem .75rem">
                                        <h5 class="card-title"
                                            style="font-weight: 500;white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: -webkit-fill-available;"
                                            title="Advanced Adobe Photoshop For Everyone">{{ $course->name }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <div class="col-12 text-center">
                        <h4 style="height: 350px;line-height: 350px; color:#545454;">Course Not Found</h4>
                    </div>
                    @endif
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
