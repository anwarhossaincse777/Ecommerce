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

                    <td>Invoice NO: # {{$invoice->invoice_no}}</td>

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
                              <span style="font-size:15px"> Customer Invoice</span>
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

              @php

                  $payment=\App\Model\Payment::where('invoice_id',$invoice->id)->first();
              @endphp


              <table width="100%">

                  <tbody>
                  <tr>
                      <td width="30%"><strong>
                                  Name:
                              </strong>
                              {{$payment['customer']['name']}} </td>
                      <td width="30%"><p><strong>Mobile No </strong>: {{$payment['customer']['mobile_no']}} </p></td>
                      <td width="40%"><p><strong>Address </strong>: {{$payment['customer']['address']}} </p></td>


                  </tr>

                  </tbody>

              </table>



          </div>

        </div>


        <div class="row">

        <div class="col-md-12">
            <table border="1" width="100%" style="margin-bottom: 10px">


                <tbody>


                @php
                    $total_sum='0';

                @endphp

                @foreach($invoice['invoice_details'] as $key=>$details)
                    <tr class="text-center">
                        <td>{{$key+1}}</td>
                        <td>{{$details['category']['name']}}</td>
                        <td>{{$details['product']['name']}}</td>
                        <td class="text-center" style="background-color: #ddd;padding: 1px;">{{$details['product']['quantity']}}</td>
                        <td class="text-center" >{{$details->selling_qty}}</td>
                        <td class="text-center">{{$details->unit_price}}</td>
                        <td class="text-center">{{$details->selling_price}}</td>
                    </tr>

                    @php
                        $total_sum+=$details->selling_price; //that means joto bar loop ta gurbe selling price ta jog hoiye jabe

                    @endphp


                @endforeach
                <tr>
                    <td colspan="6" class="text-right"> <strong>Sub Total</strong> </td>
                    <td class="text-center">{{$total_sum}}</td>
                </tr>

                <tr>
                    <td colspan="6" class="text-right"><strong>Discount</strong></td>
                    <td class="text-center"> <strong>{{$payment->discount_amount}}</strong></td>

                </tr>

                <tr>
                    <td colspan="6" class="text-right"><strong>Paid amount</strong></td>
                    <td class="text-center"> <strong>{{$payment->paid_amount}}</strong></td>

                </tr>

                <tr>
                    <td colspan="6" class="text-right"><strong>Due amount</strong></td>
                    <td class="text-center"> <strong>{{$payment->due_amount}}</strong></td>


                </tr>

                <tr>
                    <td colspan="6" class="text-right"><strong>Grand Total</strong></td>
                    <td class="text-center"> <strong>{{$payment->total_amount}}</strong></td>

                </tr>
                </tbody>

            </table>

            @php
             $date=new DateTime('now', new DateTimeZone('Asia/Dhaka'));


            @endphp

            <i> Printing time :{{$date->format('F j,y,g:i a')}}</i>

        </div>


        </div>

    </div>
</body>
</html>
