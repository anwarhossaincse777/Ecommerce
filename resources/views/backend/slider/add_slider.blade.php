@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Slider</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Slider</li>
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
                                    <a class="btn btn-success float-right btn-sm" href="{{route('slider.view')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                       View Slider
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable for Add Sliders</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form role="form" id="uploadForm" method="post" action="{{route('slider.store')}}" id="myForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="image">Upload Slider Image</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="sliderImage"  class="custom-file-input" id="slider" onchange="loadFile(event)">
                                                            <label class="custom-file-label"  for="image">Chose Slider Image</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <img id="show_logo" src="{{url('public/upload/slider/no_image.jpg')}}" style="width: 150px; height: 160px; border: 1px solid #000;" alt="">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>Slider short Title</label>
                                                            <input type="text" name="short_title"  class="form-control input-sm" placeholder="Slider short Title" required>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">


                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>Slider Long Title</label>

                                                                <textarea  id="" cols="30" rows="10" name="long_title"  class="form-control input-sm" placeholder="Slider short Title" required>



                                                                </textarea>

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




{{--    script for image real time loading--}}
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('show_logo');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>

@endsection



