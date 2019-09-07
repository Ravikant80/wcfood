@extends('frontend.template')

@section('content')
@if(Session::has('Error_Message'))
<div id="alerts">
    <div class="alert alert-dismissable alert-{{ Session::get('alert-class', 'danger') }}">{{ Session::get('Error_Message') }}
        <button class="close" role="close" data-dismiss="alert">&times;</button>
    </div>
</div>
@endif


<style media="screen">
   .inc,.dec{
     width: 28px;
    height: 28px;
    background: linear-gradient(#fff,#f9f9f9);
    display: inline-block;
    border: 1px solid #c2c2c2;
    cursor: pointer;
    font-size: 16px;
    border-radius: 50%;
    padding-top: 1px;
    line-height: 1;
   }
   .qtnt{
     display: inline-block;
padding: 3px 6px;
width: calc(100% - 60px);
height: 100%;
width: 46px;
height: 28px;
border-radius: 2px;
background-color: #fff;
border: 1px solid #c2c2c2;
margin: 0 9px;
   }

.decrement{
    float: left;
    border: 1px;
    width: 30px;
    position: relative;
    left: 2.9em;
    font-size: 35px;
    top: -0.5em;
    cursor: pointer;
   }
.increment{
    font-size: 15px;
    position: relative;
    font-weight: bold;
    cursor: pointer;
    width: 20px;
    top: -4.3em;
    left: 12.7em;
}
 </style>



 



 @if(Cart::getContent()->count() > 0)

<!-- cart-main-area start -->

<div class="cart-main-area section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ol-lg-12">
                <form action="#">               
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove Item</th>
                                </tr>
                            </thead>
                            <tbody>
                @foreach($cartdata as $cartdatas)
                <?php $pdata =getPoductDetails($cartdatas->id);  ?>

        <tr>
            <td class="product-thumbnail"><a><img src="assets/images/cart/2.jpg" alt="product img" /></a></td>
            <td class="product-name">{{$cartdatas->name}}</td>
            <input type="hidden" name="product_id" value="{{$cartdatas->id}}" id="product_id">
            <td class="product-price"><span class="amount">Rs.{{$cartdatas->price}}</span></td>
                                   <!--  <td class="product-quantity"><input type="number" value="{{$cartdatas->quantity}}" /> 
                                    </td> -->

            <td class="text-center" >                              
            <div class="quinty padding-top-20">           
            <div class="cart-info quantity ">
            <div class="btn-increment-decrement decrement custombutton" onClick="decrement_quantity({{$cartdatas->id}})">-</div>
            <input class="input-quantity "
                            id="input-quantity-{{$cartdatas->id}}" value="{{$cartdatas->quantity}}">
                                        <div class="btn-increment-decrement increment custombutton"
                                        onClick="increment_quantity({{$cartdatas->id}})">+</div>
                                        </div>

                                    </div>


                            </td>

                
            <td class="product-subtotal">Rs.{{Cart::get($cartdatas->id)->getPriceSum()}}</td>

            <td class="product-remove">
                <a href="{{ url('cart/deleteItem/'.$cartdatas->id )}}" onclick="return myFunction();"> 
                <button type="button" class="btn btn-default btn-sm">
                 <span class="glyphicon glyphicon-trash"></span>Remove
                 </button>
                </a>
            </td>
                </tr>

				@endforeach

                </tbody>
            </table>
        </div>
    </form> 

                
            <div class="cartbox__btn">
            <form method="post" action="{{url('/apply-code')}}">
                @csrf
            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">

            <li>  

            <!-- <input style="margin-left:10px;" type="text" id="coupon_entry" value="" /> -->

            <input type="text" name="coupon_code" id="order_coupon" value="" placeholder="Enter coupon code" />

            <input type="submit" value="Apply Code"  class="btn" />
            <p id="coupon_message" style="display:none; font-weight:bold; margin-top:8px;"></p>
            </li>
          
            <a href="{{url('/checkout-init')}}">
              
             <button type="button" class="btn">Check Out</button> 
            </a>
            </ul>
            </form>
        </div>


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
                    <h2 class="title__line">No Items In Cart</h2>
                    <a href="{{url('/')}}">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</section>
  
@endif

    
 <script>
  function myFunction() {
      if(!confirm("Are You Sure Remove Cart Item"))
      event.preventDefault();
  }
 </script>
<!-- 
<script type="text/javascript">
  var Coupon = new LiveValidation('Coupon', { validMessage: 'Valid Code', wait: 500});
  Coupon.add(Validate.Format, {pattern: /^mom$/i, failureMessage: "Invalid Code"} );
</script> 
 -->


<script>
function increment_quantity(cart_id) {
    var inputQuantityElement = $("#input-quantity-"+cart_id);
    var newQuantity = parseInt($(inputQuantityElement).val())+1;
    save_to_db(cart_id, newQuantity);
}

function decrement_quantity(cart_id) {
    var inputQuantityElement = $("#input-quantity-"+cart_id);
    if($(inputQuantityElement).val() > 1) 
    {
    var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
    save_to_db(cart_id, newQuantity);
    }
}

function save_to_db(cart_id, new_quantity) {
    var inputQuantityElement = $("#input-quantity-"+cart_id);
    $.ajax({
        url : "cart/update-quantity",
        data :{_token: '{{ csrf_token() }}',cart_id:cart_id,new_quantity:new_quantity},
        type : 'post',
        success : function(response) {

           // alert(response);

            $(inputQuantityElement).val(new_quantity);
                  window.location.reload();

        }
    });
}
</script>

@endsection