@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Logo</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Logo</li>
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
                                <h3>Edit Logo
                                    <a class="btn btn-success float-right btn-sm" href="{{route('logos.view')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                       View Logos
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable for Edit Logos</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form role="form" id="uploadForm" method="post" action="{{route('logos.update',['id'=>$logoData->id])}}" id="myForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="image">Edit Logo</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="logo"  class="custom-file-input" id="logo" onchange="loadFile(event)">
                                                            <label class="custom-file-label"  for="image">Chose Logo</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <img id="show_logo" src="{{(!empty($logoData->image))?url('upload/logo/'.$logoData->image):url('public/upload/no_image.jpg')}}" style="width: 150px; height: 160px; border: 1px solid #000;" alt="">


                                                    </div>
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



