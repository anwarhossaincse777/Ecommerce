@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
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
                                       View users
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

                                        <form role="form" method="post" action="{{route('user.store')}}" id="myForm" enctype="">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>User Type</label>
                                                        <select name="usertype" id="userype" class="form-control select2" style="width: 100%;" >
                                                            <option value="" >Select Role</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="user">User</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" id="last_name" class="form-control input-sm" placeholder="Name" required>
                                                        <span style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</span>
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
                                                        <label>Password</label>
                                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                                                    </div>
                                                </div>

                                                </div>

                                            <div class="row ">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
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
                    usertype: {
                        required: true,

                    },

                    name: {
                        required: true,

                    },

                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    password_confirmation: {
                        required: true,
                        equalTo:'#password'
                    },
                },
                messages: {
                    usertype:{

                        required: "Please select User role",
                    },

                    name:{

                        required: "Please enter a name",
                    },
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    password: {
                        required: "Please enter a password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    password_confirmation:{
                        required: "Please enter Confrim password",
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



