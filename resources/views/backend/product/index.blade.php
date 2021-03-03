@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
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
                                <h3>Products List
                                    <a class="btn btn-success float-right btn-sm" href="{{route('product.create')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        Add Product
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable with Products</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row">

                                                <div class="col-sm-12 col-md-6">

                                                    <div class="dt-buttons btn-group flex-wrap">
                                                        <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                                            <span>Copy</span>
                                                        </button>
                                                        <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                                            <span>CSV</span>
                                                        </button>
                                                        <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                                            <span>Excel</span>
                                                        </button>
                                                        <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                                            <span>PDF</span>
                                                        </button>
                                                        <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                                                            <span>Print</span>
                                                        </button>
                                                        <div class="btn-group">
                                                            <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false">
                                                                <span>Column visibility</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div id="example1_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Product Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Category</th>
{{--                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Brand</th>--}}
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Price</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Selling Price</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Image</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                                                        </tr>

                                                        </thead>

                                                        <tbody>
                                                        @foreach($products as $key=>$product)
                                                            <tr class="{{$product->id}}"role="row" class="odd">
                                                                <td class="dtr-control sorting_1" tabindex="0">{{$key+1}}</td>
                                                                <td>{{$product->name}}</td>

{{--                                                                <td>{{$product['brand']['name']}}</td>--}}
                                                                <td></td>
                                                                <td>{{$product->price}}</td>
                                                                <td>{{$product->selling_price}}</td>
                                                                <td>
                                                                    <div style="max-width:200px; max-height:200px;overflow: hidden">

                                                                        <img src="{{(!empty($product->image))?url('/upload/product_images/'.$product->image):url('public/upload/no_image.jpg')}}" alt="User  picture">
                                                                    </div>

                                                                </td>





                                                                <td>
                                                                    <a  title="Edit" href="{{route('product.edit',['product'=>$product->id])}}" class="btn btn-sm btn-primary">

                                                                        <i class="fa fa-edit">

                                                                        </i>

                                                                    </a>
{{--                                                                    <a  title="Details" href="{{route('product.details',['id'=>$product->id])}}" class="btn btn-sm btn-success">--}}

{{--                                                                        <i class="fa fa-eye">--}}

{{--                                                                        </i>--}}

{{--                                                                    </a>--}}


{{--                                                                    <a  title="Delete" id="delete" href="{{route('product.delete')}}" data-token="{{csrf_token()}}" data-id="{{$product->id}}" class="btn btn-sm btn-danger">--}}

{{--                                                                        <i class="fa fa-trash">--}}

{{--                                                                        </i>--}}

{{--                                                                    </a>--}}


                                                                </td>
                                                            </tr>

                                                        @endforeach
                                                        </tbody>

                                                        <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">SL</th>
                                                            <th rowspan="1" colspan="1">Product Name</th>
                                                            <th rowspan="1" colspan="1">Category</th>
                                                            <th rowspan="1" colspan="1">Brand</th>
                                                            <th rowspan="1" colspan="1">Price</th>
                                                            <th rowspan="1" colspan="1">Image</th>
                                                            <th rowspan="1" colspan="1">Action</th>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row"><div class="col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                                </div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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



