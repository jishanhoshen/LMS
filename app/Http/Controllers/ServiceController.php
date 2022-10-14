<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::select('*')->orderBy('id','asc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<div class="d-flex justify-content-between"><a href="' . route('editService', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a> '
                        .
                        ' 
                        <form action="'.route('destroyService', $row->id).'" id="serviceDelete'.$row->id.'" method="post" class="d-inline">
                            '.csrf_field().'
                            '.method_field("DELETE").'
                            <button class="delete btn btn-danger  btn-sm" type="submit" onclick="return confirm(`Are you Sure`)">Delete</button>
                        </form>
                        <script>
                            $("#serviceDelete'.$row->id.'").submit(function(e){
                                e.preventDefault();
                                var form = $(this);
                                var actionUrl = form.attr("action");
                                var Method = form.attr("method");
                                $.ajax({
                                    type: Method,
                                    url: actionUrl,
                                    data: form.serialize(),
                                    success: function(responce) {
                                        console.log(responce);
                                        $("#service").DataTable().ajax.reload();
                                        $(document).Toasts("create", {
                                            class: "bg-danger fade",
                                            title: "Deleted",
                                            subtitle: "Service",
                                            body: "Your service is destroyed."
                                        });
                                    }
                                });
                            });
                        </script>
                        </div>
                        ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.service');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'serviceName' => 'required'
        ]);
        $data = $request->all();

        $service = new Service();
        $service->name = $data['serviceName'];
        $service->desc = $data['serviceDesc'];
        $service->icon = $data['serviceIcon'];
        if ($request->input('serviceStatus') == 'on') {
            $service->status = 0;
        }
        $service->save();

        return response()->json(
            [
                'data' => $data,
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *      
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::where('id', $id)->first();
        return view('admin.serviceedit', ['serviceEdit' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'serviceName' => 'required',
            'serviceDesc' => 'required',
            'serviceIcon' => 'required',
        ]);
        $data = $request->all();

        $service = Service::where('id', $id)->first();

        $service->name = $data['serviceName'];
        $service->desc = $data['serviceDesc'];
        $service->icon = $data['serviceIcon'];
        if ($request->input('serviceStatus') == 'on') {
            $service->status = 0;
        }else{
            $service->status = 1;
        }
        $service->save();
        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
    }
}
