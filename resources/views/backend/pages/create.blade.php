
@extends('backend.layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Supplier</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Supliers</li>
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
                                <h3>Add Pages
                                  <a class="btn btn-success float-right btn-sm" href="{{route('page.index')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        View Pages
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Pages</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form class="my-20"  method="POST" action="{{ route('page.store') }}">
                                        @csrf

                                        <!-- Name -->
                                            <div class="form-group">
                                                <x-label for="name" :value="__('Name')" />

                                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                                                @error('name')

                                                <div class="text-red-600">{{$message}}</div>

                                                @enderror

                                            </div>

                                            <!-- Email Address -->
                                            <div class="form-group">
                                                <x-label for="slug" :value="__('URL/')" />

                                                <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" required />

                                                @error('slug')

                                                <div class="text-red-600">{{$message}}</div>

                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <x-label for="content" :value="__('Content')" />

                                                <textarea id="editor"  class="block mt-1 w-full" name="content" id="content" cols="30" rows="10">{{old('content')}}</textarea>

                                                @error('content')

                                                <div class="text-red-600">{{$message}}</div>

                                                @enderror

                                            </div>



                                            <div class="col-12">
                                                <button class="btn btn-primary text-right" type="submit">Submit</button>
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

























{{--script--}}

<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js">



</script>


        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

@endsection
