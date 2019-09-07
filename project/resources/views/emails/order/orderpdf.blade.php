<html>
  <head>
    <meta charset="utf-8">
    <title></title>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

          <!-- Bootstrap core CSS-->
          <link href="{{ asset('asset/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

          <!-- Custom fonts for this template-->
          <link href="{{ asset('asset/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

          <!-- Page level plugin CSS-->
          <link href="{{ asset('asset/admin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

          <!-- Custom styles for this template-->
          <link href="{{ asset('asset/css/sb-admin.css')}}" rel="stylesheet">
          <link href="{{ asset('asset/css/custome.css')}}" rel="stylesheet">

        </head>
            <body>
               <div>
                  
                  
                    <h3> Hi {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}<h3>
                        <h2>Thank you for order</h2>
                   
               </div>
           <table class="table table-bordered">
                <thead>
                <tr>
              
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>City</th>
               </tr>
              </thead>

            <tbody>
           
            
              
          <tr>
            
              <td>{{$order->user_name}}</td>
              <td >{{$order->billing_email}}</td>
              <td>{{$order->billing_city}}</td>
              <td>{{$order->billing_address}}</td>
              <td>{{$order->billing_pincode}}</td>
              <td>{{$order->billing_state}}</td>
          </tr>
               
            </tbody>
            <br><br>
            <div class="col-md-6 text-right">
                <p class="font-weight-bold mb-4">Payment Mode</p>
                <p class="mb-1"><span class="text-muted">Cash On Delivery</p>
                <p class="mb-1"><span class="text-muted">Total: </span> {{$order->billing_total}}
                </p>
            </div>
            
        <p>you can get further details about your order by logging into our website</p>
        Thank you again for choosing us.
        Regards,<br/>
        <div class="text-light mt-5 mb-5 text-center small">©{{ date('Y') }} <a class="text-light" target="_blank" href="http://etwshoppingmall.com/">Wcfood.</a>@lang('All rights reserved.')</div>
        </div>
          </table>  
        </body>
  </html>
