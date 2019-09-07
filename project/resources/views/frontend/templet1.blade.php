<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Zaika || Food Delivery Site </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/images/icon.png')}}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    <!-- Custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <!-- Modernizer js -->
    <!-- Searching cdn -->
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <!-- sweet alert cdn -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/sweetalert.css') }}">

    <!-- End sweet alert cdn -->

    <style type="text/css">
        .c1:hover {
            background-color: #d62c0a;
            color: #ffffff;
        }
    </style>

</head>
<body>

	<div class="wrapper" id="wrapper">
		<!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('assets/images/logo/foody.png')}}" alt="logo images">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about-us')}}">About</a></li>

                                        <!-- <li><a href="{{url('/blog')}}">Blog</a></li> -->

                                        <li><a href="{{url('/get-restaurant')}}">Restaurant</a></li>
                                        <!-- <li><a href="{{url('/gallery')}}">Gallery</a></li> -->
                                        <li><a href="{{url('/services')}}">Our Services</a></li>
                                        <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                                    </ul>

                                </nav>
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">

                                @if(Auth::check())
                                <div class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle profile_toggle" href="#" role="button"      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}   <i class="zmdi zmdi-account-o"></i> <span class="caret"></span>
                                    </a>



                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                        <a class="dropdown-item c1" href="{{ url('/myprofile') }}">
                                            {{ __('My Profile') }}
                                        </a>



                                        <a class="dropdown-item c1" href="{{ url('/myorder/') }}">
                                           {{ __('My Order') }}
                                       </a> 



                                       <a class="dropdown-item c1" href="{{url('favoute/restaurants')}}">
                                        {{ __('Favourite') }}
                                    </a>


                                    <a class="dropdown-item c1" href="{{ url('/logout-user') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ url('/logout-user') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>



                            </div>
                        </div>

                        @else
                        <div class="log__in">
                            <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                        </div>
                        @endif



                        <?php $cartItems = Cart::getContent();?>

                        <!---start shopping cart in corner-->
                        <div class="shopping__cart">
                            <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>

                            <div class="shop__qun">
                                @if(isset($cartItems))
                                <span>{{$cartItems->count()}}</span>
                                @else
                                <span>0</span>
                                @endif
                            </div>
                        </div>

                        <!---End shopping cart in corner-->
                    </div>
                </div>




            </div>
            <!-- Mobile Menu -->
            <div class="mobile-menu d-block d-lg-none"></div>
            <!-- Mobile Menu -->
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
<!-- End Header Area -->

@yield('content')



