                          @foreach($restsmenu as $menu)
                                
                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a>
                                            <img src="../assets/images/beef/1.jpg" alt="beef images">
                                        </a>
                                    </div>

                                    <div class="beef__details">
                                        <h4><i>{{$menu->menu_name}}</i></h4>
                                         <!-- <p>Product descriptions play a huge part in generating sales.</p> -->

                                          <ul class="beef__prize">
                                            <li class="old__prize"></li>
                                            <!-- <li>Rs.{{ $menu->price }}</li> -->
                                          

                                            <form action="{{url('addTocart')}}" method="post" enctype="multipart/form-data" id="cart_form" class="cart_form" name="cart_form">
                                                @csrf
                                              <input type="hidden" name="restaurant_id" value="{{$menu->restaurant_id}}">
                                               <input type="hidden" name="product_id" value="{{$menu->menu_id}}">
                                               <input type="hidden" name="product_name" value="{{$menu->menu_name}}">
                                               <input type="hidden" name="product_price" value="{{$menu->price}}">
                                               <input type="hidden" name="product_quantity" value="1">
                                              <input type="submit" name="submit" value="ADD" class="add_btn _1RPOp">

                                           </form>

                                        </ul>
                                    </div>
                                </div>
                             </div>
                        
                            @endforeach