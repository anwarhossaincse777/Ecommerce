@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Products</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
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
                                <h3>Edit Products
                                    <a class="btn btn-success float-right btn-sm" href="{{route('product.index')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        View Products
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Product <strong>{{$product->name}}</strong>  </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form action="{{ route('product.update',$product->id) }}" method="POST">

                                            @csrf

                                            @method('PUT')
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <input type="text" name="name" id="name" class="form-control input-sm" value="{{$product->name}}" required>
                                                        <span style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select name="category_id" id="category" class="form-control select2" style="width: 100%;" >
                                                            <option>Select Category</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}" {{($product->category_id==$category->id)?"selected":''}}>{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Price</label>
                                                        <input type="text" name="price" id="price" class="form-control input-sm" value="{{$product->price}}">
                                                        <span style="color:red">{{($errors->has('price'))?($errors->first('price')):''}}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Selling Price</label>
                                                        <input type="text" name="selling_price" id="selling_price" class="form-control input-sm" value="{{$product->selling_price}}" required>
                                                        <span style="color:red">{{($errors->has('selling_price'))?($errors->first('selling_price')):''}}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Slug</label>
                                                        <input type="text" name="slug" id="slug" class="form-control input-sm" value="{{$product->slug}}" required>
                                                        <span style="color:red">{{($errors->has('slug'))?($errors->first('slug')):''}}</span>
                                                    </div>
                                                </div>


                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <input type="text" name="description" id="description" class="form-control input-sm" value="{{$product->description}}" required>
                                                        <span style="color:red">{{($errors->has('description'))?($errors->first('description')):''}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-2 col-sm-2 col-md-2" style="padding-top:30px;">

                                                <input type="submit" value="Update" class="btn btn-info btn-block">

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

                    supplier_id: {
                        required: true,

                    },
                    category_id: {
                        required: true,

                    },
                    unit_id: {
                        required: true,

                    },

                    quantity: {
                        required: true,

                    },
                },
                messages: {

                    name:{

                        required: "Please enter a name",
                    },
                    supplier_id: {
                        required: "Please enter a supplier",

                    },

                    category_id: {
                        required: "Please enter a category",

                    },

                    unit_id: {
                        required: "Please enter a unit",

                    },

                    quantity: {
                        required: "Please enter a quantity",

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



