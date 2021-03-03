<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Pdf</title>
</head>
<body>
    <div class="container">



        <div class="row">
            <div class="col-md-12">






        <table border="1" width="100%" style="margin-bottom: 10px">


            <tbody>
            <tr>

                    <td></td>

                <td>
                    <span style="font-size:20px; background-color: #ddd;">
    Shapla shoping mall

<br>

                        Uttar-Badda ,Dhaka

</span>

                </td>

                    <td>

                        <span>
Showroom: +880284754956
                            Owner No: 08439485934
</span>


                    </td>

                </tr>



            </tbody>

        </table>

    </div>
</div>

        <div class="row">
            <div class="col-md-12">

           <table>
               <tr>
                   <td width="50%">

                   </td>

                   <td>
                       <u>
                           <strong>
                              <span style="font-size:15px"> Daily Invoice Report({{date('d-m-y',strtotime($start_date))}}-{{date('d-m-y',strtotime($end_date))}})</span>
                           </strong>
                       </u>
                   </td>

                   <td width="30%">


                   </td>
               </tr>
           </table>



                </div>

                </div>




        <div class="row">

            <div class="col-md-12">


                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline table-responsive" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Customer Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Invoice No</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Description</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Total Amount</th>
                    </tr>

                    </thead>

                    <tbody>
                    @foreach($allData as $key=>$invoice)
                        <tr role="row" class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">{{$key+1}}</td>
                            <td>{{$invoice['payment']['customer']['name']}}
                                {{$invoice['payment']['customer']['mobile_no']}}--{{$invoice['payment']['customer']['address']}}</td>
                            <td> Invoice No #::{{$invoice->invoice_no}}</td>
                            <td>{{date('d-m-y',strtotime($invoice->date))}}</td>
                            <td>{{$invoice->description}}</td>

                            <td>{{$invoice->payment->total_amount}}</td>
                            <td style="width: 12%">

                                @if($invoice->status=='0')
                                    <a  title="Delete" id="delete" href="{{route('invoice.delete',['id'=>$invoice->id])}}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash">

                                        </i>
                                    </a>
                                @endif

                            </td>
                        </tr>

                    @endforeach
                    </tbody>


                </table>


        </div>

        </div>

        <div class="row">
            <div class="col-md-12">
            <hr>
            <table>
                <tbody>
                <tr>
                    <td style="width: 40%">
                        <p style="text-align:center; margin-left: 20px">Customer Signature</p>
                    </td>

                    <td style="width: 20%"></td>
                    <td style="width: 40%">
                        <p style="text-align:center; margin-left: 20px">Owner Signature</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>

</div>
</body>
</html>
