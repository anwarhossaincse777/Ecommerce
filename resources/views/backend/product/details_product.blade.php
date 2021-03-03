@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
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
                                <h3>Products List
                                    <a class="btn btn-success float-right btn-sm" href="{{route('product.view')}}">
                                        <i class="fa fa-list">

                                        </i>
                                         Product List
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable with Product Details</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                     <table class="table table-bordered table-sm">
                                        <tbody>

                                         <tr>
                                             <td width="50%">Category</td>
                                             <td width="50%">{{$product['category']['name']}}</td>
                                         </tr>
                                         <tr>
                                             <td width="50%">Brand</td>
                                             <td width="50%">{{$product['brand']['name']}}</td>
                                         </tr>

                                         <tr>
                                             <td width="50%">Product Name</td>
                                             <td width="50%">{{$product->name}}</td>
                                         </tr>

                                         <tr>
                                             <td width="50%">Price</td>
                                             <td>{{$product->price}}</td>
                                         </tr>

                                         <tr>
                                             <td width="50%">Short Description</td>
                                             <td>{{$product->short_desc}}</td>
                                         </tr>

                                         <tr>
                                             <td width="50%">Long Description</td>
                                             <td>{{$product->long_desc}}</td>
                                         </tr>

                                        <tr>
                                            <td width="50%">Image</td>
                                            <td width="50%">
                                                <div style="max-width:200px; max-height:200px;overflow: hidden">

                                                    <img src="{{(!empty($product->image))?url('/upload/product_images/'.$product->image):url('public/upload/no_image.jpg')}}" alt="User  picture">
                                                </div>

                                            </td>

                                        </tr>



                                         <tr>
                                             <td width="50%">Colors</td>


                                             <td>

                                              @php

                                              $colors=\App\Model\ProductColor::where('product_id',$product->id)->get();
                                              @endphp

                                            @foreach ($colors as $ccolor)

                                                {{$ccolor['color']['name']}} ,
                                                 @endforeach


                                             </td>
                                         </tr>

                                         <tr>
                                             <td width="50%">Size</td>


                                             <td>

                                              @php

                                                  $sizes=\App\Model\ProductSize::where('product_id',$product->id)->get();
                                              @endphp

                                            @foreach ($sizes as $s)

                                                {{$s['size']['name']}} ,
                                                 @endforeach


                                             </td>
                                         </tr>


                                         <tr>
                                             <td width="50%">Sub Images</td>


                                             <td>

                                                 @php

                                                     $sub_images=\App\Model\ProductSubImage::where('product_id',$product->id)->get();
                                                 @endphp

                                                 @foreach ($sub_images as $img)



                                                         <img src="{{(!empty($img->sub_image))?url('/upload/product_sub_images/'.$img->sub_image):url('public/upload/no_image.jpg')}}" style="max-width:100px; max-height:100px;overflow: hidden" alt="User  picture">





                                                 @endforeach


                                             </td>
                                         </tr>


                                        </tbody>


                                     </table>
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

@endsection



