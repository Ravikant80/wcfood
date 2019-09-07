                        
@if(count($restaurantmenu) ==0)
<!-- <h2 style="margin:auto;">No Data Found</h2> -->
<img src="{{asset('assets/images/pnot.jpg')}}" alt="logo images" style="margin: auto;">
@else

@foreach($restaurantmenu as $menu)
<div class="col-lg-6 col-md-6 col-sm-12 ">
  <div class="beef_product">
    <div class="beef__thumb">

      <a>
        <img src="../assets/images/beef/1.jpg" alt="beef images">
       <!--  <img id="menuimg" src="{{ URL::asset('assets/upload/restaurant/' .$menu->menuimg) }}" alt="{{ $menu->menuimg }}" class="img-responsive food_img">
        <input type="hidden" name="product_id" value="{{$menu->menu_id}}" id="productId">
      </a> -->
    </div>
    

    <div class="beef__details">
      <h4><i>{{$menu->menu_name}}</i></h4>
      <h4><i>{{$menu->type}}</i></h4>
      <h5><i>Cat: {{ $menu->item_name}}</i></h5>
      <!-- <p>Product descriptions play a huge part in generating sales.</p> -->

      <ul class="beef__prize">
        <li class="old__prize"></li>
        <li>Rs.{{ $menu->price }}</li>


        <form action="{{url('addTocart1')}}" method="post" enctype="multipart/form-data" id="cart_form" class="cart_form" name="cart_form">
          @csrf
          <input type="hidden" name="id" value="{{$menu->id}}" id="">
          <input type="hidden" name="item_name" value="{{$menu->item_name}}" id="">
          <input type="hidden" name="price" value="{{$menu->price}}" id="">
          <input type="hidden" name="restaurant_id" value="{{$menu->restaurant_id}}" id="restaurantId">
          <input type="hidden" name="product_quantity" value="1" id="productQuantity">
          <input type="button" name="submit" value="ADD" class="add_btn _1RPOp" id="cart-{{$menu->id}}" onclick="doaddCart('{{$menu->id}}','{{$menu->item_name}}','{{$menu->price}}','{{$menu->restaurant_id}}')">

          <!-- <input type="submit" name="submit" value="ADD" class="add_btn _1RPOp" id="cart-{{$menu->menu_id}}"> -->

        </form>

      </ul>
    </div>
  </div>
</div>
@endforeach

@endif