@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Contacts</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Contacts</li>
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
                                <h3>Add Units
                                    <a class="btn btn-success float-right btn-sm" href="{{route('contact.view')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        View Contact
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Contact</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form role="form" method="post" action="{{route('contact.store')}}" id="myForm" enctype="">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" name="address" id="address" class="form-control input-sm" placeholder="address" required>
                                                        <span style="color:red">{{($errors->has('address'))?($errors->first('address')):''}}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-2 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label>Mobile No</label>
                                                        <input type="text" name="mobile_no" id="mobile_no" class="form-control input-sm" placeholder="Enter your Mobile NO" required>
                                                        <span style="color:#ff0000">{{($errors->has('mobile_no'))?($errors->first('mobile_no')):''}}</span>
                                                    </div>
                                                </div>

                                                    <div class="col-xs-2 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Enter Your Mobile No" required>
                                                        <span style="color:#ff0000">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                                                    </div>
                                                    </div>

                                                <div class="col-xs-2 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input type="text" name="twitter" id="twitter" class="form-control input-sm" placeholder="Enter Your Mobile No" required>
                                                        <span style="color:#ff0000">{{($errors->has('twitter'))?($errors->first('twitter')):''}}</span>
                                                    </div>
                                                    </div>


                                                <div class="col-xs-2 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" name="facebook" id="facebook" class="form-control input-sm" placeholder="Enter Your Facebook" required>
                                                        <span style="color:#ff0000">{{($errors->has('facebook'))?($errors->first('facebook')):''}}</span>
                                                    </div>

                                                </div>


                                                <div class="col-xs-2 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label>Youtube</label>
                                                        <input type="text" name="youtube" id="youtube" class="form-control input-sm" placeholder="Enter Your Youtube" required>
                                                        <span style="color:#ff0000">{{($errors->has('youtube'))?($errors->first('youtube')):''}}</span>
                                                    </div>

                                                </div>

                                                <div class="col-xs-2 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label>Google Plus</label>
                                                        <input type="text" name="google_plus" id="google_plus" class="form-control input-sm" placeholder="Enter Your Google Plus" required>
                                                        <span style="color:#ff0000">{{($errors->has('google_plus'))?($errors->first('google_plus')):''}}</span>
                                                    </div>

                                                </div>




                                            </div>


                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2" style="padding-top:30px;">

                                                    <input type="submit" value="Submit" class="btn btn-info btn-block">

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


    {{--//jquery validation for the insertation    --}}


    <script type="text/javascript">
        $(document).ready(function() {

            $('#myForm').validate({
                rules: {

                    name: {
                        required: true,

                    },


                },
                messages: {

                    name:{

                        required: "Please enter a name",
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



