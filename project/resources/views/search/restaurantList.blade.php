@extends('frontend.template')

@section('content')
<!-- Start Menu Grid Area -->

@if(!empty($restaurants))
        <section class="food__menu__grid__area section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="grid__show d-flex justify-content-between align-items-center">
                            <div class="grid__show__item">
                                <!-- <p>Showing 1-9 of 18 Result </p> -->
                            </div>
                            <div class="grid__show__btn">
                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">

             

                	@foreach($restaurants as $res) 

                   
                    <!-- Start Single Menu Item -->
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="menu__grid__item wow fadeInLeft">
                            <div class="menu__grid__thumb">
                                <a href="{{ url('view-restaurant/'.str_slug($res->name))}}">
                                    <img src="assets/images/menu-grid/1.jpg" alt="grid item images">
                                </a>
                            </div>
                            <div class="menu__grid__inner">
                                <div class="menu__grid__details">
                                    <h2><a href="{{ url('view-restaurant/'.str_slug($res->name))}}">{{ $res->name }}</a></h2>
                                    <ul class="grid__prize__list">
                                      <li class="old__prize"></li>
                                        <li><p> Price:Person</p>{{ $res->price_range }}</li> 
                                    </ul>
                                    <p> {{ $res->descriptions }}</p>
                                </div>
                            </div>
                        	</div>
                    	</div>
                  
                     @endforeach

                 </div>
             </div>
         </section>

         @else

        <section class="food__acconrdion__area bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section__title title__style--2 service__align--center">
                            <h2><i>No Data Found</i></h2>
                            <a href="{{url('/')}}">
                    
                            <input type="submit" value="Continue" name="continue" id="submit" class="sign__up food__btn" >

                            </div>
                         </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         @endif
            <!-- End Single Menu Item -->
            @endsection
