

@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Invoice</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Invoices</li>
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
                                <h3>Invoice List
{{--                                    <a class="btn btn-success float-right btn-sm" href="{{route('invoice.add')}}">--}}
{{--                                        <i class="fa fa-plus-circle">--}}

{{--                                        </i>--}}
{{--                                        Add Invoice--}}
{{--                                    </a>--}}

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable with Invoice</h3>
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
                                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline table-responsive" role="grid" aria-describedby="example1_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL</th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Customer Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Invoice No</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Date</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Description</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Total Amount</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Action</th>
                                                        </tr>

                                                        </thead>

                                                        <tbody>
                                                        @foreach($allData as $key=>$invoice)
                                                            <tr role="row" class="odd">
                                                                <td class="dtr-control sorting_1" tabindex="0">{{$key+1}}</td>
                                                                <td>{{$invoice['payment']['customer']['name']}}
                                                                    {{$invoice['payment']['customer']['mobile_no']}}--{{$invoice['payment']['customer']['address']}}</td>
                                                                <td> Invoice No #::{{$invoice->invoice_no}}</td>
                                                                <td>{{date('d-m-y',strtotime($invoice->date))}}</td>
                                                                <td>{{$invoice->description}}</td>

                                                                <td>{{$invoice->payment->total_amount}}</td>
                                                                <td style="width: 12%">


                                                                        <a  title="print" id="print" href="{{route('invoice.print.list',$invoice->id)}}" target="_blank" class="btn btn-sm btn-success">
                                                                            <i class="fa fa-print">

                                                                            </i>
                                                                        </a>


                                                                </td>

                                                            </tr>

                                                        @endforeach
                                                        </tbody>


                                                    </table>
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



