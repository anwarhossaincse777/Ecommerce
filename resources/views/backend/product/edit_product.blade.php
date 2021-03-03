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
                                    <a class="btn btn-success float-right btn-sm" href="{{route('product.view')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        View Products
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Product <strong>{{$editData->name}}</strong>  </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form role="form" method="post" action="{{route('product.update',['id'=>$editData->id])}}" id="myForm" enctype="">
                                            @csrf
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <input type="text" name="name" id="name" class="form-control input-sm" value="{{$editData->name}}" required>
                                                        <span style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select name="category_id" id="category" class="form-control select2" style="width: 100%;" >
                                                            <option value="" >Select Category</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}" {{($editData->category_id==$category->id)?"selected":''}}>{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Suppliers</label>
                                                        <select name="supplier_id" id="supplier" class="form-control select2" style="width: 100%;" >
                                                            <option value="" >Select Suppliers</option>
                                                            @foreach($suppliers as $supply)
                                                                <option value="{{$supply->id}}" {{($editData->supplier_id==$supply->id)?"selected":''}}>{{$supply->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Units</label>
                                                        <select name="unit_id" id="unit" class="form-control select2" style="width: 100%;" >
                                                            <option value="" >Select Unit</option>
                                                            @foreach($units as $unit)
                                                                <option value="{{$unit->id}}" {{($editData->unit_id==$unit->id)?"selected":''}}>{{$unit->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row ">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Quantity</label>
                                                        <input type="text" name="quantity" id="quantity" class="form-control input-sm" value="{{$editData->quantity}}" required>
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



