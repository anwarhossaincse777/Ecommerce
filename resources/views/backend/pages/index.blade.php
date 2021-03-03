@extends('backend.layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage pages</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Pages </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="div row">

                    <section class="col-md-12">

                        <div class="card">
                            <div class="card-header">
                                <h3>Pages
                                    <a class="btn btn-success float-right btn-sm" href="{{route('page.create')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        Add Page
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable with pages</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-body">
                                                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                                        <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL</th>
                                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Name</th>
                                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">URL</th>
                                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Role</th>
                                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                                                                        </tr>

                                                                        </thead>

                                                                        <tbody>
                                                                        @foreach($pages as $key=>$page)
                                                                            <tr role="row" class="odd">
                                                                                <td class="dtr-control sorting_1" tabindex="0">{{$key+1}}</td>
                                                                                <td>{{$page->name}}</td>
                                                                                <td>{{$page->slug}}</td>
                                                                                <td>{{}}</td>


{{--                                                                                @php--}}
{{--                                                                                    $count_supplier=\App\Product::where('supplier_id',$supplier->id)->count() ;  //j suplier_id ta suplier table a ase oita product tabel a koto bar use hoise seita ber korlam--}}

{{--                                                                                @endphp--}}


                                                                                <td>
{{--                                                                                    <a  title="Edit" href="{{route('suppliers.edit',['id'=>$supplier->id])}}" class="btn btn-sm btn-primary">--}}

                                                                                        <i class="fa fa-edit">

                                                                                        </i>

                                                                                    </a>

                                                                                    {{--                                                            //product tabel a jodi supplier id ta na duke ta hole delete krote parbe--}}

{{--                                                                                    @if($count_supplier<1)--}}

{{--                                                                                        <a  title="Delete" id="delete" href="{{route('suppliers.delete',['id'=>$supplier->id])}}" class="btn btn-sm btn-danger">--}}

                                                                                            <i class="fa fa-trash">

                                                                                            </i>

                                                                                        </a>
{{--                                                                                    @endif--}}

                                                                                </td>
                                                                            </tr>

                                                                        @endforeach
                                                                        </tbody>

                                                                        <tfoot>
                                                                        <tr>
                                                                            <th rowspan="1" colspan="1">Sl</th>
                                                                            <th rowspan="1" colspan="1">Name</th>
                                                                            <th rowspan="1" colspan="1">URL</th>
                                                                            <th rowspan="1" colspan="1">Role</th>
                                                                            <th rowspan="1" colspan="1">Action</th>
                                                                        </tr>
                                                                        </tfoot>
                                                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>

                        </div>


                    </section>

                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
