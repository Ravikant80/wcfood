<style type="text/css">
    .custombutton
    {
        cursor: pointer !important;
    }
</style>
<style type="text/css">
   div.ex1 {
     /*background-color: lightblue;*/
   
     height: 245px;
    
     overflow-y: scroll;
}
 
</style>


<!-- cart-main-area start -->

<div class="ex1">
<table class="table-content table-responsive">
    <thead>
        <tr class="title-top"> 
            <th class="product-name">Name</th>
            <th class="product-quantity">Quantity</th>
            <th class="product-subtotal">Total</th>
            <th class="product-remove">Action</th>
        </tr>
    </thead>
    <tbody>
     
        @foreach($cartdata as $cartdatas)
        <?php $pdata =getPoductDetails($cartdatas->id);  ?>

        <tr>
         
            <td class="product-name">{{$cartdatas->name}}</td>
            <input type="hidden" name="product_id" value="{{$cartdatas->id}}" id="product_id">
            
            <td class="text-center" >  
                <div class="cart-info quantity ">
                    <div class="btn-increment-decrement decrement custombutton" onClick="decrement_quantity({{$cartdatas->id}})">-</div>
                    <input class="input-quantity " id="input-quantity-{{$cartdatas->id}}" value="{{$cartdatas->quantity}}">
                    <div class="btn-increment-decrement increment custombutton" onClick="increment_quantity({{$cartdatas->id}})"> + </div>
                    <input type="hidden" id="item_price_{{$cartdatas->id}}" value="{{Cart::get($cartdatas->id)->getPriceSum()}}">
                </div>
            </td>

            
            <td class="product-subtotal">Rs. <span id="total_item_{{$cartdatas->id}}">{{Cart::get($cartdatas->id)->getPriceSum()}} </span></td>
            <!-- {{Cart::get($cartdatas->id)->getPriceSum()}} -->

            <td class="product-remove">
                <a href="{{ url('cart/deleteItem/'.$cartdatas->id )}}" onclick="return myFunction();"> 
                    <button type="button" class="btn btn-default btn-sm">
                       <span class="glyphicon glyphicon-trash"></span>
                   </button>
               </a>
           </td>
           
       </tr>

       @endforeach

   </tbody>
</table>
<span>Total: <span id="grand_total_item">{{Cart::getTotal()}} </span> </span>


<center>
<div>
<a href="{{url('checkout-init')}}">
<button type="button" class="btn btn-success">Checkout</button>
</a>
</div>
</center>
</div>



<script>
    function increment_quantity(cart_id) {
        var inputQuantityElement = $("#input-quantity-"+cart_id);
        var newQuantity = parseInt($(inputQuantityElement).val())+1;
    // save_to_db(cart_id, newQuantity);
    calculateTotalValue(cart_id,'increae');
}

function decrement_quantity(cart_id) {
    var inputQuantityElement = $("#input-quantity-"+cart_id);
    if($(inputQuantityElement).val() > 1) 
    {
        var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
    // save_to_db(cart_id, newQuantity);
    calculateTotalValue(cart_id,'decrease')
}
}

function calculateTotalValue(cartId,eventType) {
    let inpQuantity = $('#input-quantity-'+cartId).val();
    let itemPrice = $('#item_price_'+cartId).val();
    inpQuantity = parseInt(inpQuantity);
    itemPrice = parseInt(itemPrice);
    if (eventType=='decrease') {
        inpQuantity = (inpQuantity-1)
    }
    else {
        inpQuantity = (inpQuantity+1)
    }
    $('#input-quantity-'+cartId).val(inpQuantity)
    // $('#total_item_'+cartId).text(inpQuantity);
    $('#grand_total_item').text(inpQuantity*itemPrice);
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