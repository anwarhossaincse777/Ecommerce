@extends('backend.layouts.master')



@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mnanage Purchase</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Purchase</li>
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
                                <h3>Add Purchase
                                    <a class="btn btn-success float-right btn-sm" href="{{route('purchase.view')}}">
                                        <i class="fa fa-plus-circle">

                                        </i>
                                        View Purchases
                                    </a>

                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable for Add Purchase</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">


                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input type="date" name="date" id="date" class="form-control input-sm datepicker form-control-sm " placeholder="YYY-MM-DD"   required>
                                                        <span style="color:red">{{($errors->has('date'))?($errors->first('date')):''}}</span>
                                                    </div>
                                                </div>


                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Purchase No</label>
                                                        <input type="text" name="purchase_no" id="purchase_no" class="form-control input-sm form-control-sm" placeholder="purchase_no" required>
                                                        <span style="color:red">{{($errors->has('purchase_no'))?($errors->first('purchase_no')):''}}</span>
                                                    </div>
                                                </div>


                                                </div>




                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Suppliers Name</label>
                                                        <select name="supplier_id" id="supplier_id" class="form-control select2" style="width: 100%;" >
                                                            <option value="" >Select Suppliers</option>
                                                            @foreach($suppliers as $supply)
                                                                <option value="{{$supply->id}}">{{$supply->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select name="category_id" id="category_id" class="form-control select2" style="width: 100%;" >
                                                            <option value="">Select Category</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row ">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <select name="product_id" id="product_id" class="form-control select2" style="width: 100%;" >
                                                            <option value="">Select Products</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                      <div class="form-group col-md-2">

                                          <a class="btn btn-success addeventmore">

                                              <i class="fa fa-plus-circle">

                                              </i>
                                              Add Item
                                          </a>

                                      </div>



                                    </div>
                                    <!-- /.card-body -->


                                    <div class="card">

                                        <form role="form" method="post" action="{{route('purchase.store')}}" id="myForm" enctype="">

                                            @csrf
                                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Category</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Product Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">pcs/kg</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Unit Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Description</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Total Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                                                </tr>

                                                </thead>

                                                <tbody id="addRow" class="addRow">

                                                </tbody>


                                                <tbody>

                                                <tr>
                                                    <td colspan="5"></td>

                                                    <td>
                                                      <input type="text" name="estimated_amount"  value="0" id="estimated_amount" class="form-control form-control-sm text-right estimated_amount" readonly style="background-color:#D8FDBA">

                                                    </td>
                                                    <td></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                            <br>
                                            <div class="form-group form-control-sm" style="margin-left:20px;">
                                                <button type="submit" class="btn btn-primary" id="storeButton"> Purchase Store</button>
                                            </div>

                                        </form>

                                  </div>


                                </div>
                            </div>

                        </div>


                    </section>

                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>



{{--    //jeibabe ajax use korbo eita korsi supplier select kroar shathe shathe default babe ki kore coutroy name gula show korbo sei jonno--}}

        <script type="text/javascript">

          $(function () {

              $(document).on('change','#supplier_id',function () {

                  var supplier_id=$(this).val();
                  $.ajax({
                     url:"{{route('get-category')}}",
                      type:"GET",
                      data:{supplier_id:supplier_id}, //prothom ta hoilo controlelr er suppiler id , porer ta hoilo jei variable ta nisi var maddome oita
                      success:function (data) {
                          var html='<option value=""> Select Category</option>';

                          $.each(data,function (key,v) {

                           html+='<option value="'+v.category_id+'">'+v.category.name+'</option>';

                          });
                          $('#category_id').html(html);
                      }

                  });
              });
          });


        </script>





{{--    //jeibabe ajax use korbo eita korsi category select kroar shathe shathe default babe ki kore products name gula show korbo sei jonno--}}





    <script type="text/javascript">

        $(function () {

            $(document).on('change','#category_id',function () {

                var category_id=$(this).val();
                $.ajax({
                    url:"{{route('get-product')}}",
                    type:"GET",

                               // prothom ta hoilo controlelr er suppiler id , porer ta hoilo jei variable ta nisi var maddome oita

                    data:{category_id:category_id},
                    success:function (data) {
                        var html='<option value=""> Select product</option>';

                        $.each(data,function (key,v) {

                            html+='<option value="'+v.id+'">'+v.name+'</option>';

                        });
                        $('#product_id').html(html);
                    }

                });
            });
        });


    </script>






{{--// submit korar por ei data gula scriopt er maddome show koraisi--}}


    <script id="document-template" type="text/x-handlebars-template">

    <tr class="delete_add_more_item" id="delete_add_more_item">

        <input type="hidden" name="date[]" value="@{{date}}">
        <input type="hidden" name="purchase_no[]" value="@{{purchase_no}}">
        <input type="hidden" name="supplier_id[]" value="@{{supplier_id}}">

        <td>
            <input type="hidden" name="category_id[]" value="@{{category_id}}">
            @{{category_name}}

        </td>


        <td>
            <input type="hidden" name="product_id[]" value="@{{product_id}}">
            @{{product_name}}

        </td>
        <td>
            <input type="number"  min="1"  class="form-control form-control-sm text-right buying_qty" name="buying_qty[]" value="1">

        </td>

        <td>
            <input type="number"  min="1"  class="form-control form-control-sm text-right unit_price" name="unit_price[]" value="">

        </td>

        <td>
            <input type="text"   class="form-control form-control-sm " name="description[]">

        </td>


        <td>
            <input class="form-control form-control-sm text-right buying_price" name="buying_price[]" value="0" readonly>

        </td>

        <td> <i class="btn btn-danger btn-sm fa fa-window-close removeeventmore"></i> </td>

    </tr>

    </script>



{{--//akhon j data gula submit koral oigula js diye dore show korabo--}}


    <script type="text/javascript">

    $(document).ready(function () {

        $(document).on("click",".addeventmore",function () {

            var date = $('#date').val();

            var purchase_no = $('#purchase_no').val();
            var supplier_id = $('#supplier_id').val();
            var category_id = $('#category_id').val();
            var category_name = $('#category_id').find('option:selected').text();
            var product_id = $('#product_id').val();
            var product_name = $('#product_id').find('option:selected').text();

            if (date == '') {

                $.notify("Date is required", {globalPosition: 'top right', className: 'error'});
                return false;
            }

            if (purchase_no == '') {

                $.notify("Purchase is required", {globalPosition: 'top right', className: 'error'});
                return false;
            }

            if (supplier_id == '') {

                $.notify("Supplier is required", {globalPosition: 'top right', className: 'error'});
                return false;
            }

            if (category_id == '') {

                $.notify("Category is required", {globalPosition: 'top right', className: 'error'});
                return false;
            }

            if (product_id == '') {

                $.notify("product is required", {globalPosition: 'top right', className: 'error'});
                return false;
            }

            var source = $("#document-template").html();
            var template = Handlebars.compile(source);
            var data = {

                date: date,
                purchase_no: purchase_no,
                supplier_id: supplier_id,
                category_id: category_id,
                category_name: category_name,
                product_id: product_id,
                product_name: product_name

            };


            var html = template(data);
            $("#addRow").append(html);
        });

        $(document).on("click",".removeeventmore",function (event) {
          $(this).closest(".delete_add_more_item").remove();
          totalAmountPrice();
        });


     $(document).on('keyup click','.unit_price,.buying_qty',function () {

         var unit_price=$(this).closest("tr").find("input.unit_price").val();
         var qty=$(this).closest("tr").find("input.buying_qty").val();
         var total=unit_price*qty;
         $(this).closest("tr").find("input.buying_price").val(total);
         totalAmountPrice();

     });

    // /calculate sum of amount in invoice

        function totalAmountPrice() {

          var sum=0;
            $(".buying_price").each(function () {

                var value=$(this).val();
                if(!isNaN(value)&& value.length!=0){

               sum+=parseFloat(value);

                }
            });
            $('#estimated_amount').val(sum);
        }

    });

    </script>





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


{{--//for date--}}

    <script>
        $( ".datepicker" ).datepicker({
            uilibrary:'bootstrap4',
            dateFormat: 'dd-mm-yy'
        });

    </script>



@stop



