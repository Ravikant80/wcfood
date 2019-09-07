@extends('frontend.template')

@section('content')

<!-- Start Slider Area -->


<!--  @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif -->



<style>
    .controls {
        background-color: #fff;
        border-radius: 2px;
        border: 1px solid transparent;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        box-sizing: border-box;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        height: 29px;
        margin-left: 17px;
        margin-top: 10px;
        outline: none;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
    }

    .controls:focus {
        border-color: #4d90fe;
    }
    .title {
        font-weight: bold;
    }
    #infowindow-content {
        display: none;
    }
    #map #infowindow-content {
        display: inline;
    }

    }
</style>


<form action=" {{url('/search-restaurant/')}}" method="post" class="map_address_search">
    {{ csrf_field() }}

    <input type="text" id="searchInput" class="controls map_inp_src" placeholder="Enter a Postal Code" value="{{ old('full_address') }}" name="full_address" required/>
    <div id="map" style="width:80%;height:350px; display: none;" ></div>
    <div id="geoData">
    </div> 
    &nbsp;<div class="src__btn">
        <input type="submit" id="submitInput" name="" value="Search" class="submitmapSt">
        <!-- <a href="#">Search</a>  -->
    </div>

    <!-- --form End---->
</form>

<div class="slider__area slider--two">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="slider__activation--1">
                    <!-- Start Single Slide -->
                    <div class="slide fullscreen bg-image--7 poss--relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider__content">
                                        <div class="slider__inner">
                                            <div class="slider__text__img">
                                                <img class="layear-1" src="{{asset('assets/images/slider/text/2.png')}}" alt="slider text image">
                                                <img class="layear-2" src="{{asset('assets/images/slider/text/1.png')}}" alt="slider text image">
                                            </div>

                                            <div class="slider__input">
                                                <!--     <input type="text" placeholder="Type Place, City.Division"> -->

                                        <!-- <input class="res__search" type="text" placeholder="Restaurant"> -->

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide__pizza">
                                <img src="{{asset('assets/images/shape/slider-pizza.png')}}" alt="pizza images">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- first slider end -->

            <div class="item">

                <div class="slider__activation--1">
                    <!-- Start Single Slide -->
                    <div class="slide fullscreen bg-image--7 poss--relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider__content">
                                        <div class="slider__inner">
                                            <div class="slider__text__img">
                                                <img class="layear-1" src="{{asset('assets/images/slider/text/2.png')}}" alt="slider text image">
                                                <img class="layear-2" src="{{asset('assets/images/slider/text/1.png')}}" alt="slider text image">
                                            </div>

                                            <div class="slider__input">
                                                <!--     <input type="text" placeholder="Type Place, City.Division"> -->

                                        <!-- <input class="res__search" type="text" placeholder="Restaurant"> -->

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide__pizza">
                                <img src="{{asset('assets/images/shape/slider-pizza.png')}}" alt="pizza images">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- End Single Slide -->

            <div class="item">
                <div class="slider__activation--1">
                    <!-- Start Single Slide -->
                    <div class="slide fullscreen bg-image--7 poss--relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="slider__content">
                                        <div class="slider__inner">
                                            <div class="slider__text__img">
                                                <img class="layear-1" src="{{asset('assets/images/slider/text/2.png')}}" alt="slider text image">
                                                <img class="layear-2" src="{{asset('assets/images/slider/text/1.png')}}" alt="slider text image">
                                            </div>

                                            <div class="slider__input">
                                                <!--     <input type="text" placeholder="Type Place, City.Division"> -->

                                        <!-- <input class="res__search" type="text" placeholder="Restaurant"> -->

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide__pizza">
                                <img src="{{asset('assets/images/shape/slider-pizza.png')}}" alt="pizza images">
                            </div>
                        </div>
                        <!-- End Single Slide -->
                    </div>
                </div>
            </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div> 


<!-- End Slider Area -->



<!-- Start Service Area -->
<section class="fd__service__area bg-image--2 section-padding--xlg">
    <div class="container">
        <div class="service__wrapper bg--white">
            <!-- <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="section__title service__align--left">
                        <img src="{{asset('assets/images/icon/shape/1.png')}}">
                        <p>The process of our service</p>
                        <h2 class="title__line">How it work</h2>
                    </div>
                </div>
            </div> -->
            <div class="row mt--30">


                <!-- Start Single Service -->
                <!-- <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service">
                        <div class="service__title">
                            <div class="ser__icon">
                                <a href="{{url('/get-restaurant')}}">
                                    <img src="{{asset('assets/images/icon/color-icon/1.png')}}" alt="icon image">
                                </a>
                            </div>
                            <h2><a href="{{url('/get-restaurant')}}">Choose restaurants</a></h2>
                        </div>
                        <div class="service__details">
                           <p>A restaurant (Indian:  ( listen)), or an eatery, is a business which prepares and serves food and drinks to customers in exchange for money...</p>
                       </div>
                   </div>
               </div>
                -->
                <!-- End Single Service -->

                <!-- Start Single Service -->
                <!-- <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service">
                        <div class="service__title">
                            <div class="ser__icon">
                                <img src="{{asset('assets/images/icon/color-icon/2.png')}}" alt="icon image">
                            </div>
                            <h2><a href="#">Select, you love to eat</a></h2>
                        </div>
                        <div class="service__details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div> -->

                <!-- End Single Service -->

                <!-- Start Single Service -->
                <!-- <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service">
                        <div class="service__title">
                            <div class="ser__icon">
                                <img src="{{asset('assets/images/icon/color-icon/3.png')}}" alt="icon image">
                            </div>
                            <h2><a href="#">Pickup or delivery</a></h2>
                        </div>
                        <div class="service__details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div> -->
                <!-- End Single Service -->


            </div>
        </div>
    </div>
</section>
<!-- End Service Area -->







<!-- Start Food Category -->
<!-- <section class="food__category__area bg--white section-padding--lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="section__title service__align--left">
                   <img src="{{asset('assets/images/icon/shape/1.png')}}">
                   <p>the process of our service</p>
                   <h2 class="title__line">Restaurant List</h2>
               </div>
           </div>
       </div>
       <div class="food__category__wrapper mt--40">
        <div class="row"> -->
<!-- @foreach($restaurants as $rest) -->

<!-- Start Single Category -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="food__item foo">
        <div class="food__thumb">
            <a href="{{ url('view-restaurant/'.str_slug($rest->name))}}">
                <img src="{{asset('assets/images/product/md-product/1.jpg')}}" alt="product images">
            </a>
        </div>
        <div class="food__title">
            <h2><a href="{{ url('view-restaurant/'.str_slug($rest->name))}}">{{$rest->name}}</a></h2>
        </div>
    </div>
</div> -->
<!-- End Single Category -->

<!-- @endforeach -->





<!-- 
                </div>
            </div>
        </div>
    </section> -->
<!-- End Food Category -->




<!-- Start Special Menu -->
    <!-- <section class="fd__special__menu__area bg-image--3 section-pt--lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="section__title service__align--left">
                         <img src="{{asset('assets/images/icon/shape/1.png')}}">
                        <p>the process of our service </p>
                        <h2 class="title__line">Restaurant with Special Menu</h2>
                    </div>
                </div>
            </div>
        </div>
--> <!--  <div class="special__food__menu mt--80">
     <div class="food__menu__prl bg-image--4">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="food__nav nav nav-tabs" role="tablist">
                         <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
                         <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Breakfast</a>
                         <a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Lunch</a>
                         <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab">Dinner</a>
                         <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee" role="tab">Coffee</a>
                         <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab">Snacks</a>
                     </div>
                     <div class="fd__tab__content tab-content" id="nav-tabContent">
-->                  <!-- Start Single tab -->
<!--  <div class="single__tab__panel tab-pane fade show active" id="nav-all" role="tabpanel">
     <div class="tab__content__wrap">
-->        <!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/1.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
        <div class="fd__menu__title__prize">
             <h4><a href="#">Maxican Food Fev</a></h4>
             <span class="menu__prize">$15</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Stack</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
-->        <!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">My Sweetest Desert </a></h4>
             <span class="menu__prize">$18</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Stack</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--   <div class="food__menu">
      <div class="food__menu__thumb">
          <a href="#">
              <img src="{{asset('assets/images/product/sm-img/3.jpg')}}" alt="product images">
          </a>
      </div>
      <div class="food__menu__details">
          <div class="fd__menu__title__prize">
              <h4><a href="#">Burger Kings House</a></h4>
              <span class="menu__prize">$22</span>
          </div>
          <div class="fd__menu__details">
              <p>Food Type : Cheeze Burger</p>
              <div class="delivery__time__rating">
                  <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                  <ul class="fd__rating">
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                  </ul>
              </div>
          </div>
      </div>
  </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/4.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="menu-details.html">Marmaid Chicken Fry</a></h4>
             <span class="menu__prize">$20</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Fry</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>  -->
<!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="menu-details.html">
             <img src="{{asset('assets/images/product/sm-img/1.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="menu-details.html">Kabab Ghor</a></h4>
             <span class="menu__prize">$22</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Stack</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
-->    <!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Haven Of Juice</a></h4>
             <span class="menu__prize">$14</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Mixed Fruit Juice</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!-- <div class="food__menu">
    <div class="food__menu__thumb">
        <a href="#">
            <img src="{{asset('assets/images/product/sm-img/3.jpg')}}" alt="product images">
        </a>
    </div>
    <div class="food__menu__details">
        <div class="fd__menu__title__prize">
            <h4><a href="#">Italian Chines</a></h4>
            <span class="menu__prize">$24</span>
        </div>
        <div class="fd__menu__details">
            <p>Food Type :Mixed Soup noodles</p>
            <div class="delivery__time__rating">
                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                <ul class="fd__rating">
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/4.jpg')}} " alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Italian Chines</a></h4>
             <span class="menu__prize">$15</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Stack</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
-->         <!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!--       </div>
</div> -->
<!-- End Single tab -->
<!-- Start Single tab -->
<!--  <div class="single__tab__panel tab-pane fade" id="nav-breakfast" role="tabpanel">
     <div class="tab__content__wrap">
-->         <!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->
<!-- Start Single Food -->
<!-- <div class="food__menu">
    <div class="food__menu__thumb">
        <a href="menu-details.html">
            <img src="{{asset('assets/images/product/sm-img/1.jpg')}}" alt="product images">
        </a>
    </div>
    <div class="food__menu__details">
        <div class="fd__menu__title__prize">
            <h4><a href="#">Kabab Ghor</a></h4>
            <span class="menu__prize">$22</span>
        </div>
        <div class="fd__menu__details">
            <p>Food Type : Chicken Stack</p>
            <div class="delivery__time__rating">
                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                <ul class="fd__rating">
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Haven OF Juice </a></h4>
             <span class="menu__prize">$14</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Mixed Fruit Juice</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!-- <div class="food__menu">
    <div class="food__menu__thumb">
        <a href="#">
            <img src="{{asset('assets/images/product/sm-img/3.jpg')}}" alt="product images">
        </a>
    </div>
    <div class="food__menu__details">
        <div class="fd__menu__title__prize">
            <h4><a href="#">Italian Chines</a></h4>
            <span class="menu__prize">$24</span>
        </div>
        <div class="fd__menu__details">
            <p>Food Type :Mixed Soup noodles</p>
            <div class="delivery__time__rating">
                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                <ul class="fd__rating">
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
-->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--        <div class="food__menu">
           <div class="food__menu__thumb">
               <a href="#">
                   <img src="{{asset('assets/images/product/sm-img/4.jpg')}}" alt="product images">
               </a>
           </div>
           <div class="food__menu__details">
               <div class="fd__menu__title__prize">
                   <h4><a href="#">Italian Chines</a></h4>
                   <span class="menu__prize">$15</span>
               </div>
               <div class="fd__menu__details">
                   <p>Food Type : Chicken Stack</p>
                   <div class="delivery__time__rating">
                       <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                       <ul class="fd__rating">
                           <li><i class="zmdi zmdi-star"></i></li>
                           <li><i class="zmdi zmdi-star"></i></li>
                           <li><i class="zmdi zmdi-star"></i></li>
                           <li><i class="zmdi zmdi-star"></i></li>
                           <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div> -->
<!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="menu-details.html">
             <img src="{{asset('assets/images/product/sm-img/1.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
             <span class="menu__prize">$22</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Stack</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--   <div class="food__menu">
      <div class="food__menu__thumb">
          <a href="menu-details.html">
              <img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images">
          </a>
      </div>
      <div class="food__menu__details">
          <div class="fd__menu__title__prize">
              <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
              <span class="menu__prize">$14</span>
          </div>
          <div class="fd__menu__details">
              <p>Food Type : Mixed Fruit Juice</p>
              <div class="delivery__time__rating">
                  <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                  <ul class="fd__rating">
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                  </ul>
              </div>
          </div>
      </div>
  </div> -->
<!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!-- </div> -->
<!-- </div> -->
<!-- End Single tab -->
<!-- Start Single tab -->
<!--  <div class="single__tab__panel tab-pane fade" id="nav-lunch" role="tabpanel">
     <div class="tab__content__wrap">
-->      <!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->

<!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!-- </div> -->
<!-- </div> -->
<!-- End Single tab -->
<!-- Start Single tab -->
<!--      <div class="single__tab__panel tab-pane fade" id="nav-dinner" role="tabpanel">
         <div class="tab__content__wrap">
-->         <!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->
<!-- Start Single Food -->
<!-- <div class="food__menu">
    <div class="food__menu__thumb">
        <a href="#">
            <img src="{{asset('assets/images/product/sm-img/1.jpg')}}" alt="product images">
        </a>
    </div>
    <div class="food__menu__details">
        <div class="fd__menu__title__prize">
            <h4><a href="#">Kabab Ghor</a></h4>
            <span class="menu__prize">$22</span>
        </div>
        <div class="fd__menu__details">
            <p>Food Type : Chicken Stack</p>
            <div class="delivery__time__rating">
                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                <ul class="fd__rating">
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--        <div class="food__menu">
           <div class="food__menu__thumb">
               <a href="#">
                   <img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images">
               </a>
           </div>
           <div class="food__menu__details">
               <div class="fd__menu__title__prize">
                   <h4><a href="#">Haven OF Juice </a></h4>
                   <span class="menu__prize">$14</span>
               </div>
               <div class="fd__menu__details">
                   <p>Food Type : Mixed Fruit Juice</p>
                   <div class="delivery__time__rating">
                       <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                       <ul class="fd__rating">
                           <li><i class="zmdi zmdi-star"></i></li>
                           <li><i class="zmdi zmdi-star"></i></li>
                           <li><i class="zmdi zmdi-star"></i></li>
                           <li><i class="zmdi zmdi-star"></i></li>
                           <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--   <div class="food__menu">
      <div class="food__menu__thumb">
          <a href="#">
              <img src="{{asset('assets/images/product/sm-img/3.jpg')}}" alt="product images">
          </a>
      </div>
      <div class="food__menu__details">
          <div class="fd__menu__title__prize">
              <h4><a href="menu-details.html">Italian Chines</a></h4>
              <span class="menu__prize">$24</span>
          </div>
          <div class="fd__menu__details">
              <p>Food Type :Mixed Soup noodles</p>
              <div class="delivery__time__rating">
                  <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                  <ul class="fd__rating">
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                  </ul>
              </div>
          </div>
      </div>
  </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/4.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Italian Chines</a></h4>
             <span class="menu__prize">$15</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Stack</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
--> <!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->
<!-- Start Single Food -->
<!-- <div class="food__menu">
    <div class="food__menu__thumb">
        <a href="#">
            <img src="{{asset('assets/images/product/sm-img/1.jpg')}}" alt="product images">
        </a>
    </div>
    <div class="food__menu__details">
        <div class="fd__menu__title__prize">
            <h4><a href="#">Friends & Family Restaurant</a></h4>
            <span class="menu__prize">$15</span>
        </div>
        <div class="fd__menu__details">
            <p>Food Type : Chicken Stack</p>
            <div class="delivery__time__rating">
                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                <ul class="fd__rating">
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li><i class="zmdi zmdi-star"></i></li>
                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Friends & Family Restaurant</a></h4>
             <span class="menu__prize">$18</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Stack</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--    <div class="food__menu">
       <div class="food__menu__thumb">
           <a href="#">
               <img src="{{asset('assets/images/product/sm-img/3.jpg')}}" alt="product images">
           </a>
       </div>
       <div class="food__menu__details">
           <div class="fd__menu__title__prize">
               <h4><a href="#">Friends & Family Restaurant</a></h4>
               <span class="menu__prize">$22</span>
           </div>
           <div class="fd__menu__details">
               <p>Food Type : Cheeze Burger</p>
               <div class="delivery__time__rating">
                   <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                   <ul class="fd__rating">
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                   </ul>
               </div>
           </div>
       </div>
   </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/4.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Friends & Family Restaurant</a></h4>
             <span class="menu__prize">$20</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Fry</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!-- </div> -->
<!-- </div> -->
<!-- End Single tab -->
<!-- Start Single tab -->
<!--   <div class="single__tab__panel tab-pane fade" id="nav-coffee" role="tabpanel">
      <div class="tab__content__wrap">
-->      <!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/1.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Kabab Ghor</a></h4>
             <span class="menu__prize">$22</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Stack</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Haven OF Juice </a></h4>
             <span class="menu__prize">$14</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Mixed Fruit Juice</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--   <div class="food__menu">
      <div class="food__menu__thumb">
          <a href="#">
              <img src="{{asset('assets/images/product/sm-img/3.jpg')}}" alt="product images">
          </a>
      </div>
      <div class="food__menu__details">
          <div class="fd__menu__title__prize">
              <h4><a href="#">Italian Chines</a></h4>
              <span class="menu__prize">$24</span>
          </div>
          <div class="fd__menu__details">
              <p>Food Type :Mixed Soup noodles</p>
              <div class="delivery__time__rating">
                  <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                  <ul class="fd__rating">
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                  </ul>
              </div>
          </div>
      </div>
  </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--    <div class="food__menu">
       <div class="food__menu__thumb">
           <a href="#">
               <img src="{{asset('assets/images/product/sm-img/4.jpg')}}" alt="product images">
           </a>
       </div>
       <div class="food__menu__details">
           <div class="fd__menu__title__prize">
               <h4><a href="#">Italian Chines</a></h4>
               <span class="menu__prize">$15</span>
           </div>
           <div class="fd__menu__details">
               <p>Food Type : Chicken Stack</p>
               <div class="delivery__time__rating">
                   <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                   <ul class="fd__rating">
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                   </ul>
               </div>
           </div>
       </div>
   </div> -->
<!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!-- </div> -->
<!-- </div> -->
<!-- End Single tab -->
<!-- Start Single tab -->
<!--   <div class="single__tab__panel tab-pane fade" id="nav-snacks" role="tabpanel">
      <div class="tab__content__wrap">
-->        <!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->
<!-- Start Single Food -->
<!--   <div class="food__menu">
      <div class="food__menu__thumb">
          <a href="#">
              <img src="{{asset('assets/images/product/sm-img/1.jpg')}}" alt="product images">
          </a>
      </div>
      <div class="food__menu__details">
          <div class="fd__menu__title__prize">
              <h4><a href="#">Kabab Ghor</a></h4> -->
    <!--           <span class="menu__prize">$22</span>
          </div>
          <div class="fd__menu__details">
              <p>Food Type : Chicken Stack</p>
              <div class="delivery__time__rating">
                  <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                  <ul class="fd__rating">
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                  </ul>
              </div>
          </div>
      </div>
  </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Haven OF Juice </a></h4>
             <span class="menu__prize">$14</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Mixed Fruit Juice</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/3.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Italian Chines</a></h4>
             <span class="menu__prize">$24</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type :Mixed Soup noodles</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--      <div class="food__menu">
         <div class="food__menu__thumb">
             <a href="#">
                 <img src="{{asset('assets/images/product/sm-img/4.jpg')}}" alt="product images">
             </a>
         </div>
         <div class="food__menu__details">
             <div class="fd__menu__title__prize">
                 <h4><a href="#">Italian Chines</a></h4>
                 <span class="menu__prize">$15</span>
             </div>
             <div class="fd__menu__details">
                 <p>Food Type : Chicken Stack</p>
                 <div class="delivery__time__rating">
                     <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                     <ul class="fd__rating">
                         <li><i class="zmdi zmdi-star"></i></li>
                         <li><i class="zmdi zmdi-star"></i></li>
                         <li><i class="zmdi zmdi-star"></i></li>
                         <li><i class="zmdi zmdi-star"></i></li>
                         <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div> -->
<!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!-- Start Single Tab Content -->
<!-- <div class="single__tab__content"> -->
<!-- Start Single Food -->
<!--   <div class="food__menu">
      <div class="food__menu__thumb">
          <a href="#">
              <img src="{{asset('assets/images/product/sm-img/1.jpg')}}" alt="product images">
          </a> -->
<!--         </div>
        <div class="food__menu__details">
            <div class="fd__menu__title__prize">
                <h4><a href="#">Friends & Family Restaurant</a></h4>
                <span class="menu__prize">$22</span>
            </div>
            <div class="fd__menu__details">
                <p>Food Type : Chicken Stack</p>
                <div class="delivery__time__rating">
                    <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                    <ul class="fd__rating">
                        <li><i class="zmdi zmdi-star"></i></li>
                        <li><i class="zmdi zmdi-star"></i></li>
                        <li><i class="zmdi zmdi-star"></i></li>
                        <li><i class="zmdi zmdi-star"></i></li>
                        <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Friends & Family Restaurant</a></h4>
             <span class="menu__prize">$14</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Mixed Fruit Juice</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--    <div class="food__menu">
       <div class="food__menu__thumb">
           <a href="#">
               <img src="{{asset('assets/images/product/sm-img/3.jpg')}}" alt="product images">
           </a>
       </div>
       <div class="food__menu__details">
           <div class="fd__menu__title__prize">
               <h4><a href="#">Italian Chines</a></h4>
               <span class="menu__prize">$24</span>
           </div>
           <div class="fd__menu__details">
               <p>Food Type :Mixed Soup noodles</p>
               <div class="delivery__time__rating">
                   <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                   <ul class="fd__rating">
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li><i class="zmdi zmdi-star"></i></li>
                       <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                   </ul>
               </div>
           </div>
       </div>
   </div> -->
<!-- End Single Food -->
<!-- Start Single Food -->
<!--  <div class="food__menu">
     <div class="food__menu__thumb">
         <a href="#">
             <img src="{{asset('assets/images/product/sm-img/4.jpg')}}" alt="product images">
         </a>
     </div>
     <div class="food__menu__details">
         <div class="fd__menu__title__prize">
             <h4><a href="#">Friends & Family Restaurant</a></h4>
             <span class="menu__prize">$15</span>
         </div>
         <div class="fd__menu__details">
             <p>Food Type : Chicken Stack</p>
             <div class="delivery__time__rating">
                 <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                 <ul class="fd__rating">
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li><i class="zmdi zmdi-star"></i></li>
                     <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                 </ul>
             </div>
         </div>
     </div>
 </div> -->
<!-- End Single Food -->
<!-- </div> -->
<!-- End Single Tab Content -->
<!--          </div>
</div> -->
<!-- End Single tab -->
<!--                        </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section> -->      
<!-- End Special Menu -->
<!-- Start Download App Area -->
<section class="food__download__app__area section-padding--lg bg--white bg__shape--1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="section__title service__align--left">
                    <!-- <img src="{{asset('assets/images/icon/shape/1.png')}}"> -->
                    <p>the process of our service </p>
                    <h2 class="title__line">Download our app</h2>
                </div>
            </div>
        </div>
        <div class="row mt--80">
            <div class="col-lg-12 poss--relative">
                <div class="app__download__container">
                    <div class="app__download__inner inline__image__css--1" style="background-image: url(assets/images/app/bg.png);">
                        <h2>Aahar now in your hand</h2>
                        <h6>Download! to get this app Faster way to order food</h6>
                    </div>
                    <ul class="dwn__app__list">
                        <li class="wow lightSpeedIn" data-wow-delay="0.2s"><a href="#"><img src="{{asset('assets/images/app/2.png')}}" alt="app images"></a></li>
                        <li class="wow lightSpeedIn" data-wow-delay="0.3s"><a href="#"><img src="{{asset('assets/images/app/3.png')}}" alt="app images"></a></li>
                    </ul>
                </div>
                <div class="app__phone wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="{{asset('assets/images/app/1.png')}}" alt="app images">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Download App Area -->
<!-- Start Testimonail Area -->
<!--  <section class="fd__testimonial__area section-padding--lg bg-image--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                <div class="testimonial__activation--1 text-center bg--white owl-carousel owl-theme clearfix">
                    <! Start Single Testimonial -->
<!-- <div class="testimonial">
    <div class="testimonial__thumb">
        <img src="{{asset('assets/images/testimonial/clint/1.png')}}" alt="testimonial images">
    </div>  -->--
<!--  <div class="testimonial__details">
     <h4>Mily Cyrus</h4>
     <h6>Food Expert</h6>
     <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
 </div> -->
<!-- </div> -->
<!-- End Single Testimonial -->
<!-- Start Single Testimonial -->
<!-- <div class="testimonial">
    <div class="testimonial__thumb">
        <img src="{{asset('assets/images/testimonial/clint/1.png')}}" alt="testimonial images">
    </div> -->
<!-- <div class="testimonial__details">
    <h4>Mily Cyrus</h4>
    <h6>Food Expert</h6>
    <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
</div> -->
<!-- </div> -->
<!-- End Single Testimonial -->
<!--           </div>
      </div>
  </div>
</div>
</section> -->
<!-- End Testimonail Area -->


<!-- Start Blog Area -->
<section class="fb__blog__ara section-padding--lg bg--white">

    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-12">
                <div class="section__title service__align--left">
                    <!-- <img src="{{asset('assets/images/icon/shape/1.png')}}"> -->
                    <!-- <p>the process of our service </p>
                        <h2 class="title__line">Latest from Blog</h2> -->
                </div>
            </div>
        </div>
        <div class="row mt--40">

        </div>
    </div>
</section>
<!-- End Blog Area -->


<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 28.443590, lng: 77.533073},
            zoom: 13
        });
        var input = document.getElementById('searchInput');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function () {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("Autocomplete's returned place contains no geometry");
                return;
            }

// If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setIcon(({
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(35, 35)
            }));
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
            infowindow.open(map, marker);

//Location details
            for (var i = 0; i < place.address_components.length; i++) {
                if (place.address_components[i].types[0] == 'postal_code') {
                    document.getElementById('postal_code').value = place.address_components[i].long_name;
                }
// if(place.address_components[i].types[0] == 'country'){
//     document.getElementById('country').value = place.address_components[i].long_name;
// }
            }
// document.getElementById('location').value = place.formatted_address;
// document.getElementById('lat').value = place.geometry.location.lat();
// document.getElementById('lon').value = place.geometry.location.lng();
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGyNRktnupsrYn90kwf2DxfOOcz7fiL74&libraries=places&callback=initMap" async defer></script> 


@endsection