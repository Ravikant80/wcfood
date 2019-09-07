<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
	body {
    background: grey;
    margin-top: 120px;
    margin-bottom: 120px;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <!-- <img src="{{asset('ecommerce/assets/images/logo.png')}}"> -->
                       
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1"><!-- Order Id: {{$subscribes->id}} --> </p>
                            <p class="text-muted">Cancel Date: <?php echo date("d-m-Y, H:i:sa"); ?></p>
                         </div>
                    </div>

                        <!-- <h2>Order Received </h2> -->

                        @if(Auth::user()==true)

                      <h3> Hi {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}<h3>
                        <h2>Order Cancel Successfully</h2>
                         <div class="row pb-5 p-5">
                                    <p class="font-weight-bold mb-4">Your Cancel  Email Information:</p>
                                    <p class="mb-1"><span class="text-muted">Email: </span> {{$cancelorder->email}}</p>
                                 
                               
                            </div>
                               <div class="text-light mt-5 mb-5 text-center small">©{{ date('Y') }} <a class="text-light" target="_blank" href="http://etwshoppingmall.com/">Wcfood.</a>@lang('All rights reserved.')</div>

                            </div>

                         @else

                        <h2> your order cancel successfully!!!</h2>
                      
                    <hr class="my-5">

                            <div class="row pb-5 p-5">
                                    <p class="font-weight-bold mb-4">Cancel Email Information:</p>
                                    <p class="mb-1"><span class="text-muted">Email: </span> {$cancelorder->email}}</p>
                                             
                                           
                                    </div>
                                 </div>    
                            </div>
                         </div>
                    </div>
                 </div>
                </div>      
                <div class="text-light mt-5 mb-5 text-center small">©{{ date('Y') }} 
             <a class="text-light" target="_blank" href="http://etwshoppingmall.com/">Wcfood.</a>
                            @lang('All rights reserved.')
        </div>
</div>


@endif








































