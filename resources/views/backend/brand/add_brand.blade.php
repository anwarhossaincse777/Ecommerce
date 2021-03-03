@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Brands</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Brands</li>
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
                                <h3>Add Brands
                                    <a class="btn btn-success float-right btn-sm" href="{{route('brand.view')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        View Brands
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        @if(isset($allData))

                                        <h3 class="card-title">Edit Brand</h3>
                                        @else
                                            <h3 class="card-title">Add Brand</h3>
                                        @endif
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form role="form" method="post" action="{{(@$editData)?route('brand.update',$editData->id):route('brand.store')}}" id="myForm" enctype="">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <label>Brand Name</label>
                                                        <input type="text" name="name" id="name" class="form-control input-sm"  value="{{@$editData->name}}" placeholder="Enter Brand Name" required>
                                                        <span style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-2 col-sm-2 col-md-2" style="padding-top:30px;">

                                                    <button type="submit" class="btn btn-primary">{{(@$editData)?"Update":"Submit"}}</button>

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



