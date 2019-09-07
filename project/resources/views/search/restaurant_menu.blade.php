@extends('frontend.template')

@section('content')

      <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Menu Details</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">Menu Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Blog List View Area -->
        <section class="blog__list__view section-padding--lg menudetails-right-sidebar bg--white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 detail_leftside">
                      <!-- Start Category Area -->
                            <div class="food__category__area mt--60">
                                <h4 class="side__title">Categories</h4>
                                <ul class="food__category">
                                    <li><a href="#">Maxican Food <span>(20)</span></a></li>
                                    <li><a href="#">Pizza <span>(30)</span></a></li>
                                    <li><a href="#">Food & Beverage <span>(40)</span></a></li>
                                    <li><a href="#">Maxican Food <span>(50)</span></a></li>
                                    <li><a href="#">Asian Twist <span>(60)</span></a></li>
                                    <li><a href="#">Taco Food <span>(20)</span></a></li>
                                </ul>
                            </div>
                            <!-- End Category Area -->
    <!-- Start Top Rated Area -->
    <div id="top_rated_products-4" class="widget widget_top_rated_products">
        <h3 class="widget-title">Top Rated Products</h3>
        <ul class="product_list_widget">
<li>
    <a href="#" title="Fusce Laoreet Volutpat">
        <img width="180" height="180" src="../assets/images/blog/sm-img/6.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="55_Shop">
        <span class="product-title">Fusce Laoreet Volutpat</span>
    </a>
        <div class="star-rating" title="Rated 5 out of 5">
            <span style="width:100%"><strong class="rating">5</strong> out of 5</span></div>
            <span class="amount">$13.00</span>
        </li>

<li>
    <a href="#" title="Praesent Esr Edio">
        <img width="180" height="180" src="../assets/images/blog/sm-img/6.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="Layout_LavieRestaurant_10_Shop">
        <span class="product-title">Praesent Esr Edio</span>
    </a>
        <div class="star-rating" title="Rated 3.82 out of 5"><span style="width:76.4%"><strong class="rating">3.82</strong> out of 5</span></div><span class="amount">$199.00</span>
    </li>

<li>
    <a href="#" title="Watermelon Smoothie">
        <img width="180" height="180" src="../assets/images/blog/sm-img/6.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="grid2">
        <span class="product-title">Watermelon Smoothie</span>
    </a>
      <div class="star-rating" title="Rated 3.05 out of 5"><span style="width:61%"><strong class="rating">3.05</strong> out of 5</span></div>
      <span class="amount">$13.00</span>
  </li>

<li>
    <a href="#" title="Duis Odio Nulla">
        <img width="180" height="180" src="../assets/images/blog/sm-img/6.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="blog08">      
         <span class="product-title">Duis Odio Nulla</span>
    </a>
        <div class="star-rating" title="Rated 3.03 out of 5"><span style="width:60.6%"><strong class="rating">3.03</strong> out of 5</span></div>       
        <span class="amount">$500.00</span>
    </li>

<li>
    <a href="" title="vitae pellentesque">
        <img width="180" height="180" src="../assets/images/blog/sm-img/6.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="blog02">      
         <span class="product-title">vitae pellentesque</span>
    </a>
        <div class="star-rating" title="Rated 2.75 out of 5"><span style="width:55%"><strong class="rating">2.75</strong> out of 5</span></div>     
        <span class="amount">$13.00</span>
    </li>
</ul></div>
<!-- End Top Rated Area -->


    <!-- Start Filter Area -->
    <div id="price_filter-5" class="widget widget_price_filter">
        <h3 class="widget-title">Filter by price</h3>
        <form method="get" action="#">
            <div class="price_slider_wrapper">
                <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;">
                    </div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                </div>
                <div class="price_slider_amount">
                    <input type="text" id="min_price" name="min_price" value="" data-min="13" placeholder="Min price" style="display: none;">
                    <input type="text" id="max_price" name="max_price" value="" data-max="1300" placeholder="Max price" style="display: none;">
                    <button type="submit" class="button">Filter</button>
                    <div class="price_label" style="">
                        Price: <span class="from">$13</span> — <span class="to">$1300</span>
                    </div>
                    
                    <div class="clear"></div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Filter Area -->




                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="popupal__menu">
                                    <h4>Popular Menu</h4>
                                    <p>20 ITEMS</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt--30">
                            <!-- Start Single Product -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a href="menu-details.html">
                                            <img src="../assets/images/beef/1.jpg" alt="beef images">
                                        </a>
                                    </div>
                                    <div class="beef__hover__info">
                                        <div class="beef__hover__inner">
                                            <span>Special</span>
                                            <span>offer</span>
                                        </div>
                                    </div>
                                    <div class="beef__details">
                                        <h4><span class="icon-foodSymbol tKOaB _3h2yZ _3x58u"></span><a href="menu-details.html">Beef Burger</a></h4>
                                        
                                        <p>erve armesan may be added to the top of apLem ip, consectetur</p>
                                        <ul class="beef__prize">
                                            <li class="old__prize">$30</li>
                                            <li>$30</li>
                                            <div class="add_btn">
                                                <div class="_1RPOp">ADD</div>
                                                <div class="_3Hy2E">+</div>
                                                <div class="_1ds9T _2WdfZ _4aKW6">+</div>
                                                <div class="_29Y5Z _20vNm _4aKW6"></div>
                                                <div class="_2zAXs _2quy- _4aKW6">0</div>
                                             
                                            </div>
                                        </ul>
                                        <!-- <div class="beef__cart__btn">
                                            <a href="cart.html">Add To Cart</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a href="menu-details.html">
                                            <img src="../assets/images/beef/2.jpg" alt="beef images">
                                        </a>
                                    </div>
                                    <div class="beef__details">
                                        <h4><span class="icon-foodSymbol tKOaB _3h2yZ _3x58u"></span><a href="menu-details.html">Beef Burger</a></h4>
                                        
                                        <p>erve armesan may be added to the top of apLem ip, consectetur</p>
                                        <ul class="beef__prize">
                                            <li class="old__prize">$30</li>
                                            <li>$30</li>
                                            <div class="add_btn">
                                                <div class="_1RPOp">ADD</div>
                                                <div class="_3Hy2E">+</div>
                                                <div class="_1ds9T _2WdfZ _4aKW6">+</div>
                                                <div class="_29Y5Z _20vNm _4aKW6"></div>
                                                <div class="_2zAXs _2quy- _4aKW6">0</div>
                                             
                                            </div>
                                        </ul>
                                        <!-- <div class="beef__cart__btn">
                                            <a href="cart.html">Add To Cart</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a href="menu-details.html">
                                            <img src="../assets/images/beef/3.jpg" alt="beef images">
                                        </a>
                                    </div>
                                    <div class="beef__hover__info">
                                        <div class="beef__hover__inner">
                                            <span>Special</span>
                                            <span>offer</span>
                                        </div>
                                    </div>
                                    <div class="beef__details">
                                        <h4><span class="icon-foodSymbol tKOaB _3h2yZ _3x58u"></span><a href="menu-details.html">Beef Burger</a></h4>
                                        
                                        <p>erve armesan may be added to the top of apLem ip, consectetur</p>
                                        <ul class="beef__prize">
                                            <li class="old__prize">$30</li>
                                            <li>$30</li>
                                            <div class="add_btn">
                                                <div class="_1RPOp">ADD</div>
                                                <div class="_3Hy2E">+</div>
                                                <div class="_1ds9T _2WdfZ _4aKW6">+</div>
                                                <div class="_29Y5Z _20vNm _4aKW6"></div>
                                                <div class="_2zAXs _2quy- _4aKW6">0</div>
                                             
                                            </div>
                                        </ul>
                                        <!-- <div class="beef__cart__btn">
                                            <a href="cart.html">Add To Cart</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a href="menu-details.html">
                                            <img src="../assets/images/beef/3.jpg" alt="beef images">
                                        </a>
                                    </div>
                                    <div class="beef__hover__info">
                                        <div class="beef__hover__inner">
                                            <span>Special</span>
                                            <span>offer</span>
                                        </div>
                                    </div>
                                    <div class="beef__details">
                                        <h4><span class="icon-foodSymbol tKOaB _3h2yZ _3x58u"></span><a href="menu-details.html">Beef Burger</a></h4>
                                        
                                        <p>erve armesan may be added to the top of apLem ip, consectetur</p>
                                        <ul class="beef__prize">
                                            <li class="old__prize">$30</li>
                                            <li>$30</li>
                                            <div class="add_btn">
                                                <div class="_1RPOp">ADD</div>
                                                <div class="_3Hy2E">+</div>
                                                <div class="_1ds9T _2WdfZ _4aKW6">+</div>
                                                <div class="_29Y5Z _20vNm _4aKW6"></div>
                                                <div class="_2zAXs _2quy- _4aKW6">0</div>
                                             
                                            </div>
                                        </ul>
                                        <!-- <div class="beef__cart__btn">
                                            <a href="cart.html">Add To Cart</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- End Single Product -->
                         <!-- Start Single Product -->
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a href="menu-details.html">
                                            <img src="../assets/images/beef/3.jpg" alt="beef images">
                                        </a>
                                    </div>
                                    <div class="beef__hover__info">
                                        <div class="beef__hover__inner">
                                            <span>Special</span>
                                            <span>offer</span>
                                        </div>
                                    </div>
                                    <div class="beef__details">
                                        <h4><span class="icon-foodSymbol tKOaB _3h2yZ _3x58u"></span><a href="menu-details.html">{{}}</a></h4>
                                        
                                        <p>erve armesan may be added to the top of apLem ip, consectetur</p>
                                        <ul class="beef__prize">
                                            <li class="old__prize">$30</li>
                                            <li>$30</li>
                                            <div class="add_btn">
                                                <div class="_1RPOp">ADD</div>
                                                <div class="_3Hy2E">+</div>
                                                <div class="_1ds9T _2WdfZ _4aKW6">+</div>
                                                <div class="_29Y5Z _20vNm _4aKW6"></div>
                                                <div class="_2zAXs _2quy- _4aKW6">0</div>
                                             
                                            </div>
                                        </ul>
                                        <!-- <div class="beef__cart__btn">
                                            <a href="cart.html">Add To Cart</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a href="menu-details.html">
                                            <img src="../assets/images/beef/3.jpg" alt="beef images">
                                        </a>
                                    </div>
                                    <div class="beef__hover__info">
                                        <div class="beef__hover__inner">
                                            <span>Special</span>
                                            <span>offer</span>
                                        </div>
                                    </div>
                                    <div class="beef__details">
                                        <h4><span class="icon-foodSymbol tKOaB _3h2yZ _3x58u"></span><a href="menu-details.html">Beef Burger</a></h4>
                                        
                                        <p>erve armesan may be added to the top of apLem ip, consectetur</p>
                                        <ul class="beef__prize">
                                            <li class="old__prize">$30</li>
                                            <li>$30</li>
                                            <div class="add_btn">
                                                <div class="_1RPOp">ADD</div>
                                                <div class="_3Hy2E">+</div>
                                                <div class="_1ds9T _2WdfZ _4aKW6">+</div>
                                                <div class="_29Y5Z _20vNm _4aKW6"></div>
                                                <div class="_2zAXs _2quy- _4aKW6">0</div>
                                             
                                            </div>
                                        </ul>
                                        <!-- <div class="beef__cart__btn">
                                            <a href="cart.html">Add To Cart</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- End Single Product -->
                        
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md--mt--40 sm--mt--40 detail_rightside">
                        <div class="food__sidebar">
                            <!-- Start Search Area -->
                            <div class="food__search">
                                <h4 class="side__title">Search</h4>
                                <div class="serch__box">
                                    <input type="text" placeholder="Search keyword">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <!-- End Search Area -->
    <!-- Start Shopping Cart -->
                            <div id="widget_cart-4" class="widget widget_shopping_cart"><h3 class="widget-title">Your Cart</h3><div class="widget_shopping_cart_content">

                    <ul class="cart_list product_list_widget ">

    
                      <li class="mini_cart_item">
                                        
                            <a href="#">
                                <img width="180" height="180" src="../assets/images/blog/sm-img/6.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="grid2">Moletie Et Fermentum&nbsp;                            </a>
                                                
                        <span class="quantity">1 × <span class="amount">$13.00</span></span>                    </li>
                                        <li class="mini_cart_item">
                                               <a href="#">
                                <img width="180" height="180" src="../assets/images/blog/sm-img/6.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="grid2">Duis Odio Nulla&nbsp;                            </a>
                                                
                        <span class="quantity">1 × <span class="amount">$500.00</span></span>                   </li>
                    
    
</ul><!-- end product list -->


    <p class="total"><strong>Subtotal:</strong> <span class="amount">$513.00</span></p>

    
    <p class="buttons">
        <a href="#" class="button wc-forward">View Cart</a>
        <a href="#" class="button checkout wc-forward">Checkout</a>
    </p>


</div></div>
<!-- End Shopping Cart -->
                            <!-- Start Recent Post -->
                            <div class="food__recent__post mt--60" style="display: none;">
                                <h4 class="side__title">Recent Posts</h4>
                                <div class="recent__post__wrap">
                                    <!-- Start Single Post -->
                                    <div class="single__recent__post d-flex">
                                        <div class="recent__post__thumb">
                                            <a href="blog-details.html">
                                                <img src="../assets/images/blog/sm-img/4.jpg" alt="post images">
                                            </a>
                                        </div>
                                        <div class="recent__post__details">
                                            <span>February  13,  2018</span>
                                            <h4><a href="blog-details.html">Diffrent title gose here. This is demo title.</a></h4>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                    <!-- Start Single Post -->
                                    <div class="single__recent__post d-flex">
                                        <div class="recent__post__thumb">
                                            <a href="blog-details.html">
                                                <img src="../assets/images/blog/sm-img/5.jpg" alt="post images">
                                            </a>
                                        </div>
                                        <div class="recent__post__details">
                                            <span>February  13,  2018</span>
                                            <h4><a href="blog-details.html">Diffrent title gose here. This is demo title.</a></h4>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                    <!-- Start Single Post -->
                                    <div class="single__recent__post d-flex">
                                        <div class="recent__post__thumb">
                                            <a href="blog-details.html">
                                                <img src="../assets/images/blog/sm-img/6.jpg" alt="post images">
                                            </a>
                                        </div>
                                        <div class="recent__post__details">
                                            <span>February  13,  2018</span>
                                            <h4><a href="blog-details.html">Diffrent title gose here. This is demo title.</a></h4>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                    <!-- Start Single Post -->
                                    <div class="single__recent__post d-flex">
                                        <div class="recent__post__thumb">
                                            <a href="blog-details.html">
                                                <img src="../assets/images/blog/sm-img/7.jpg" alt="post images">
                                            </a>
                                        </div>
                                        <div class="recent__post__details">
                                            <span>February  13,  2018</span>
                                            <h4><a href="blog-details.html">Diffrent title gose here. This is demo title.</a></h4>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                </div>
                            </div>
                            <!-- End Recent Post -->
                            
                            <!-- Start Sidebar Contact -->
                            <div class="sidebar__contact mt--60">
                                <div class="sidebar__thumb">
                                    <img src="../assets/images/blog/sidebar/2.jpg" alt="sidebar images">
                                </div>
                                <div class="sidebar__details">
                                    <h4>colorful</h4>
                                    <h2>donut’s</h2>
                                    <span>get it till the stock full</span>
                                </div>
                                <div class="sidebar__con__btn">
                                    <a href="#">Contact Now<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- End Sidebar Contact -->
                            <!-- Start Sidebar Newsletter -->
                            <div class="sidebar__newsletter mt--60" style="display: none;">
                                <h4 class="side__title">Newsletter</h4>
                                <div class="sidebar__inbox">
                                    <input type="text" placeholder="Enter your E-mail">
                                    <a href="#"><i class="fa fa-paper-plane"></i></a>
                                </div>
                            </div>
                            <!-- End Sidebar Newsletter -->
                            <!-- Start Sidebar Instagram -->
                            <div class="sidebar__instagram mt--60" style="display: none;">
                                <h4 class="side__title">Instagram</h4>
                                <ul class="instagram__list d-flex flex-wrap">
                                    <li><a href="#"><img src="../assets/images/blog/instagram/1.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="../assets/images/blog/instagram/2.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="../assets/images/blog/instagram/3.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="../assets/images/blog/instagram/4.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="../assets/images/blog/instagram/5.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="../assets/images/blog/instagram/6.jpg" alt="instagram images"></a></li>
                                </ul>
                            </div>
                            <!-- End Sidebar Instagram -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog List View Area -->






@endsection