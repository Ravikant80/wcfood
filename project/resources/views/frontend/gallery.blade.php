@extends('frontend.template')

@section('content')
 <!-- Start Bradcaump area -->
 <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Gallery Area -->
        <div class="food__gallery__area section-padding--lg bg--white">
            <div class="container portfolio__area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio__menu d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-center">
                            <button data-filter="*"  class="is-checked">View All</button>
                            <button data-filter=".cat--1">Breakfast</button>
                            <button data-filter=".cat--2">Lunch</button>
                            <button data-filter=".cat--3">Dinner</button>
                            <button data-filter=".cat--4">Snacks</button>
                            <button data-filter=".cat--5">Others</button>
                        </div>
                    </div>
                </div>
                <div class="row portfolio__wrap mt--50">
                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--2">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/1.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/1.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->

                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--1 cat--5">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/2.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="images/gallery/big-img/2.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->
                     <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--1 cat--5">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/2.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="images/gallery/big-img/2.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->
                </div>

                <div class="row portfolio__wrap mt--50">
                 
                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--3 cat--5">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/3.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/3.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->

                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--2">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/4.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/4.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->
                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--3 cat--5">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/3.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/3.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->
                </div>

                <div class="row portfolio__wrap mt--50">
                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--1 cat--2 cat--5">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/5.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/5.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->

                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--3">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/6.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/6.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->
                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--3">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/6.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/6.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->
                </div>

                <div class="row portfolio__wrap mt--50">
                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--2">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/7.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/7.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->

                    <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--1 cat--3 cat--5">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/8.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/8.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->
                     <!-- Start Single Images -->
                    <div class="col-lg-4 col-md-4 pro__item cat--4 cat--2">
                        <div class="portfolio foo">
                            <img src="{{asset('assets/images/gallery/portfolio/7.jpg')}}" alt="portfolio images">
                            <div class="portfolio__hover">
                                <div class="portfolio__action">
                                    <ul class="portfolio__list">
                                        <li><a href="{{asset('assets/images/gallery/big-img/7.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Images -->
                </div>


                </div>
            </div>
        </div>
        <!-- End Gallery Area -->
@endsection