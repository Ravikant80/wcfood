@extends('frontend.template')


@section('content')

<center><h2><i>My Order</i></h2></center>
 @if($userorders->count() > 0)

<!-- cart-main-area start -->

<div class="cart-main-area section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ol-lg-12">
                <form action="#" method="post"> 
                    @csrf              
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr class="title-top">
                              
                                    <th class="product-subtotal">Product Name</th>
                                   <!--  <th class="product-subtotal">Product Image</th> -->
                                    <th class="product-subtotal">Quantity</th>
                                       <th class="product-subtotal">Total</th>
                                       <th class="product-subtotal">Status</th>
                                    <th class="product-subtotal">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                	   @foreach($userorders as $order)
                     <tr>
                         <td>{{$order->item_name}}</td>
                         <td>{{$order->quantity}}</td>
           
                     </div>
 
            </td>




            <td>{{$order->billing_total}}</td>
            <td>{{$order->order_status}}</td>
             <td>
                <a href="{{url('/checkout-init')}}">
              
             <button type="button" class="btn btn-info">Reorder</button> 
            </a>
            </td> 
                       
            </tr>
                 @endforeach
                </tbody>
                </table>
            </div>
            </form> 
           
            </div>
        </div>
    </div>  
</div>


   
@else
<section class="food__acconrdion__area bg--white section-padding--lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section__title title__style--2 service__align--center">
                    <h2 class="title__line">You Have No Orders</h2>
                    <a href="{{url('/')}}">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</section>
  
@endif 

@endsection
