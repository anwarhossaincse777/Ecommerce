@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Customer</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Customers</li>
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
                                <h3>Add Customer
                                    <a class="btn btn-success float-right btn-sm" href="{{route('customers.view')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        View Customers
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Customers</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form role="form" method="post" action="{{route('customers.store')}}" id="myForm" enctype="">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Customer Name</label>
                                                        <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Name" required>
                                                        <span style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <input type="text" name="mobile" id="mobile" class="form-control input-sm" placeholder="mobile Number" required>
                                                        <span style="color:red">{{($errors->has('mobile'))?($errors->first('name')):''}}</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email" required>
                                                        <span style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" name="address" id="address" class="form-control input-sm" placeholder="address" required>
                                                    </div>
                                                </div>

                                            </div>


                                            <input type="submit" value="Submit" class="btn btn-info btn-block">

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


    {{--//jquery validation for the insertation    --}}


    <script type="text/javascript">
        $(document).ready(function() {

            $('#myForm').validate({
                rules: {

                    name: {
                        required: true,

                    },

                    mobile: {
                        required: true,

                    },

                    email: {
                        required: true,
                        email: true,
                    },
                    address: {
                        required: true,

                    },

                },
                messages: {

                    name:{

                        required: "Please enter a name",
                    },
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
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






@endsection



