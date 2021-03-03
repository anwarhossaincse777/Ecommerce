@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Profile: <strong>{{$user->name}}</strong>     </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="col-md-4 offset-md-5">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"

                                     src="{{(!empty($user->image))?url('/upload/user_image/'.$user->image):url('public/upload/no_image.jpg')}}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{$user->name}}</h3>

                            <p class="text-muted text-center">{{$user->usertype}}</p>

                            <table width="100%" class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td>Moble NO:</td>
                                    <td>{{$user->mobile}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td>{{$user->gender}}</td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>{{$user->address}}</td>
                                </tr>

                                </tbody>
                            </table>

                            <a href="{{route('profiles.edit',['id'=>$user->id])}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->

                    <!-- /.card -->
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection



