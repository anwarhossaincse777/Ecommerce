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
                                    @if(isset($editData))

                                        <h3 class="card-title">Edit Product</h3>
                                    @else
                                        <h3 class="card-title">Add Product</h3>
                                    @endif
                                </div>

                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable for Add Products</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form role="form" method="post" action="{{(@$editData)?route('product.update',$editData->id):route('product.store')}}" id="myForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <input type="text" name="name" id="name" value="{{@$editData->name}}" class="form-control input-sm" placeholder="Name" required>
                                                        <span style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select name="category_id" id="category" class="form-control " style="width: 100%;" >
                                                            <option value="" >Select Category</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{$category->id}}" {{(@$editData->category_id==$category->id)?"selected":""}} "> {{$category->name}}  </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Brands</label>
                                                        <select name="brand_id" id="brand" class="form-control " style="width: 100%;" >
                                                            <option value="" >Select Category</option>
                                                            @foreach($brands as $brand)
                                                                <option value="{{$brand->id}}" {{(@$editData->brand_id==$brand->id)?"selected":""}} "> {{$brand->name}}  </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Color</label>

                                                        <select name="color_id" id="color" class="form-control select2" multiple >
                                                            @foreach($colors as $color)
                                                                <option value="{{$color->id}}" {{(@in_array(['color_id'=>$color->id],$color_array))?"selected":""}}>{{$color->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>





                                            </div>

                                            <div class="row ">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Size</label>
                                                        <select name="size_id" id="size" class="form-control  select2 " style="width: 100%;" multiple >
                                                            @foreach($sizes as $size)
                                                                <option value="{{$size->id}}" {{(@in_array(['size_id'=>$size->id],$size_array))?"selected":""}}>{{$size->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Short Description</label>
                                                        <textarea name="short_desc"   class="form-control" id="" cols="30" rows="2">{{@$editData->short_desc}}</textarea>
                                                        <span style="color:red">{{($errors->has('short_desc'))?($errors->first('short_desc')):''}}</span>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Long Description</label>
                                                        <textarea name="long_desc"   class="form-control" id="" cols="30" rows="5">{{@$editData->long_desc}}</textarea>
                                                        <span style="color:red">{{($errors->has('long_desc'))?($errors->first('long_desc')):''}}</span>
                                                    </div>
                                                </div>


                                            </div>


                                        <div class="row">

                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-group">
                                                        <label>Price</label>
                                                        <input type="number" name="price" value="{{@$editData->price}}"  class="form-control" ></input>
                                                        <span style="color:red">{{($errors->has('price'))?($errors->first('price')):''}}</span>
                                                    </div>
                                                </div>



                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="image">Upload Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="image"  class="custom-file-input" id="image" onchange="loadFile(event)">
                                                        <label class="custom-file-label"  for="image">Chose Logo</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <div class="form-group">
                                                    <img id="show_image" src="{{(!empty($editData->image))?url('upload/product_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 150px; height: 160px; border: 1px solid #000;" alt="">
                                                </div>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="image">Sub Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="sub_image[]"  class="custom-file-input"  multiple>
                                                        <label class="custom-file-label"  for="image">Chose Sub Image</label>
                                                    </div>
                                                </div>
                                            </div>

                                            </div>

                                            <button type="submit" class="btn btn-primary">{{(@$editData)?"Update":"Submit"}}</button>

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
        $(document).ready(function () {

        $('#myForm').validate({

            rules:{

                name:{

                    required:true,
                },

                category_id:{

                    required:true,
                },

                brand_id:{

                    required:true,
                },

                short_desc:{

                    required:true,
                },

                long_desc:{

                    required:true,
                },

                price:{

                    required:true,
                },

            }

        })

        })

    </script>













    <script>
        var loadFile = function(event) {
            var output = document.getElementById('show_image');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };


        </script>



@endsection



