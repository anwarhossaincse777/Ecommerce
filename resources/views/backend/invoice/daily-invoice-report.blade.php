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
                                <h3>Select Criteria
{{--                                    <a class="btn btn-success float-right btn-sm" href="{{route('invoice.view')}}">--}}
{{--                                        <i class="fa fa-plus-circle">--}}

{{--                                        </i>--}}
{{--                                        View Invoice--}}
{{--                                    </a>--}}

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable for Add Invoice</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">


                                        <form method="GET" action="{{route('daily.invoice.report.pdf')}}" target="_blank" id="myForm">

                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-4">
                                                    <div class="form-group">
                                                        <label>Start Date</label>
                                                        <input type="date" name="start_date" id="start_date"  class="form-control input-sm datepicker form-control-sm" placeholder="YYY-MM-DD"   required>
                                                        <span style="color:red">{{($errors->has('date'))?($errors->first('date')):''}}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-4">
                                                    <div class="form-group">
                                                        <label>End Date</label>
                                                        <input type="date" name="end_date" id="end_date"  class="form-control input-sm datepicker1 form-control-sm" placeholder="YYY-MM-DD"   required>
                                                        <span style="color:red">{{($errors->has('date'))?($errors->first('date')):''}}</span>
                                                    </div>
                                                </div>


                                                <div class="form-group col-md-1" style="padding-top:30px;">

                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Search

                                                    </button>

                                                </div>



                                            </div>



                                        </form>










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



    {{--    //jeibabe ajax use korbo eita korsi supplier select kroar shathe shathe default babe ki kore coutroy name gula show korbo sei jonno--}}







    {{--    //jeibabe ajax use korbo eita korsi category select kroar shathe shathe default babe ki kore products name gula show korbo sei jonno--}}











    {{--// submit korar por ei data gula scriopt er maddome show koraisi--}}






    {{--//akhon j data gula submit koral oigula js diye dore show korabo--}}








    {{--//jquery validation for the insertation    --}}







    {{--add new customer a click korle jeno data gula ase tr kj korbo akhon--}}

    <script type="text/javascript">
        $(document).ready(function() {

            $('#myForm').validate({
                rules: {

                    start_date: {
                        required: true,

                    },

                    end_date: {
                        required: true,
                    },

                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>












































    {{--//for date--}}

    <script>
        $( ".datepicker" ).datepicker({
            uilibrary:'bootstrap4',
            dateFormat: 'dd-mm-yy'
        });

        $( ".datepicker1" ).datepicker({
            uilibrary:'bootstrap4',
            dateFormat: 'dd-mm-yy'
        });

    </script>



@stop




