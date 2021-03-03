@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage password</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Password</li>
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
                                <h3>Add User
                                    <a class="btn btn-success float-right btn-sm" href="{{route('user.view')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        Edit password
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable for Add user</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form role="form" method="post" action="{{route('profiles.password.update')}}" id="myForm" enctype="">
                                            @csrf




                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="Current_password">Current Password</label>
                                                        <input type="password" name="Current_password" id="Current_password" class="form-control input-sm" placeholder="Password" required>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="new_password">New Password</label>
                                                        <input type="password" name="new_password" id="new_password" class="form-control input-sm" placeholder="Password" required>
                                                    </div>
                                                </div>

                                            </div>


                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="password_confirmation"> Confirm new Password</label>
                                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
                                                    </div>
                                                </div>


                                            <input type="submit" value="Update" class="btn btn-info btn-block">

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
                    Current_password: {
                        required: true,
                        minlength: 6
                    },
                    new_password: {
                        required: true,
                        minlength: 6

                    },

                    password_confirmation: {
                        required: true,
                        equalTo:'#new_password'
                    },
                },
                messages: {
                    Current_password: {
                        required: "Please enter current  password",

                    },
                    new_password:{
                        required: "Please enter new password",
                        minlength: 'password will be at least 6 character',
                    },
                    password_confirmation:{
                        required: "Please confrim new password",
                        equalTo: "Confrim password password does not match"
                    }
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



