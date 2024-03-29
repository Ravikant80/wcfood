

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
                                        <!-- <li><a href="{{url('admin/restaurants')}}">Restaurant</a></li> -->
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


<!-- Start Subscribe Area -->
<section class="fd__subscribe__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="subscribe__inner">
                    <h2>Subscribe to Zaika</h2>
                    <div id="mc_embed_signup">
                        <div id="enter__email__address">

                            <form action=" {{url('/subscribestore')}}" method="post" id="form" name="form" novalidate>

                                @csrf
                                <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                    <div class="news__input">
                                        <input type="email" value="{{ old('email') }}" name="email" class="email validate @error('email') is-invalid @enderror" id="mce-EMAIL" placeholder="Enter Your E-mail Address" required>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    

                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" ></div>

                                    <div class="clearfix subscribe__btn">

                                        <input type="submit" value="Send Now" name="subscribe" id="submit" class="sign__up food__btn" onclick='checkEmail();' >


                                        <!--   <input type="submit" class="btn btn-info" value="Submit Button"> -->


                                        <div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            
        </div>
        <!-- End Subscribe Area -->

        @include('sweet::alert')


        <!-- Start Footer Area -->
        <footer class="footer__area footer--1">
            <div class="footer__wrapper bg__cat--1 section-padding--lg">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="footer">
                                <h2 class="ftr__title">About Zaika</h2>
                                <div class="footer__inner">
                                    <div class="ftr__details">
                                        <p>Food Delivery Restaurant Service,</p>
                                        <div class="ftr__address__inner">
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p>New Delhi, India</p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">+088 01673-453290</a></p>
                                                    <p><a href="#">+088 01773-458290</a></p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">zaika@email.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="social__icon">
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->

                        <!-- Start Single Footer -->
                       <!--  <div class="col-md-6 col-lg-3 col-sm-12 sm--mt--40">
                            <div class="footer gallery">
                                <h2 class="ftr__title">Our Gallery</h2>
                                <div class="footer__inner">
                                    <ul class="sm__gallery__list">
                                        <li><a href="#"><img src="{{asset('assets/images/gallery/sm-img/1.jpg')}}" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/images/gallery/sm-img/2.jpg')}}" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/images/gallery/sm-img/3.jpg')}}" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/images/gallery/sm-img/4.jpg')}}" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/images/gallery/sm-img/5.jpg')}}" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/images/gallery/sm-img/6.jpg')}}" alt="gallery images"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Opening Time</h2>
                                <div class="footer__inner">
                                    <ul class="opening__time__list">
                                        <li>Saturday<span>.......</span>10am to 10pm</li>
                                        <li>Sunday<span>.......</span>10am to 10pm</li>
                                        <li>Monday<span>.......</span>10am to 10pm</li>
                                        <li>Tuesday<span>.......</span>10am to 10pm</li>
                                        <li>Wednesday<span>.......</span>10am to 10pm</li>
                                        <li>Thursday<span>.......</span>10am to 10pm</li>
                                        <li>Friday<span>.......</span>10am to 10pm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <!-- <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40"> -->
                            <!-- <div class="footer">
                                <h2 class="ftr__title">Latest Post</h2>
                                <div class="footer__inner">
                                    <div class="lst__post__list">
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/blog/sm-img/1.jpg')}}" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="#">Chicken Shawarma </a></h6>
                                                <p>Lordo loram consecte turadip isicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/blog/sm-img/2.jpg')}}" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="#">Fruits Desert</a></h6>
                                                <p>Lordo loramcon secte turadipi sicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/blog/sm-img/3.jpg')}}" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="#">Vanilla Pastry</a></h6>
                                                <p>Lordo loramcon secte turadip isicing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Footer -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="copyright bg--theme">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="copyright__inner">
                                    <div class="cpy__right--left">
                                        <p>@All Right Reserved.<a href="https://devitems.com/">Devitems</a></p>
                                    </div>
                                    <div class="cpy__right--right">
                                        <a href="#">
                                            <img src="{{asset('assets/images/icon/shape/2.png')}}" alt="payment images">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer Area -->
            @if(!Auth::check())
            <!-- Login Form -->
            <div class="accountbox-wrapper">
                <div class="accountbox text-left">
                    <ul class="nav accountbox__filters" id="myTab" role="tablist">
                        <li>
                            <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                        </li>
                        <li>
                            <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="accountbox__inner tab-content" id="myTabContent">
                        <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                            <form method="POST" action="{{ route('login') }}">
                             @csrf
                             <div class="single-input">
                                <input class="cr-round--lg" type="email" placeholder=" email" value="{{ old('email') }}" autocomplete="email" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg " type="password" placeholder="Password" autocomplete="current-password" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Go</span></button>
                            </div>
                            <div class="accountbox-login__others">
                                <h6>Or login with</h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="{{ url('/login/google') }}"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form method="POST" action="{{ route('register') }}">
                         @csrf
                         <div class="single-input">
                            <input class="cr-round--lg" type="text" placeholder="Name" name="name" value="{{ old('name') }}" autocomplete="name" >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="email" name="email" placeholder="Email address" value="{{ old('email') }}" autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="password" placeholder="Password" autocomplete="new-password" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="password" placeholder="Confirm password" name="password_confirmation">
                        </div>
                        <div class="single-input">
                            <button type="submit" class="food__btn"><span>Sign Up</span></button>
                        </div>
                    </form>
                </div>
                <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
            </div>
        </div>
    </div><!-- //Login Form -->
    @endif

    @if(isset($cartItems))

    @foreach($cartItems as $cartItem)
    <!---start shopping cart in corner-->
    <!-- Cartbox  -->
    <div class="cartbox-wrap">
        <div class="cartbox text-right">
            <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
            <div class="cartbox__inner text-left">
                <div class="cartbox__items">

                    <!-- Cartbox Single Item -->
                    <div class="cartbox__item">
                        <div class="cartbox__item__thumb">
                            <a href="product-details.html">
                                <img src="{{asset('assets/images/blog/sm-img/1.jpg')}}" alt="small thumbnail">
                            </a>
                        </div>
                        <div class="cartbox__item__content">
                            <h5><a href="product-details.html" class="product-name">{{$cartItem->name}}</a></h5>
                            <p>Qty: <span>{{$cartItem->quantity}}</span></p>
                            <span class="price">Rs.{{$cartItem->price}}</span>
                        </div>
                        
                            <!-- 
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            <a href="{{ url('cart/deleteItem/'.$cartItem->id )}}" onclick="return myFunction();"> 
                            </a>
                        </button> -->

                        <td class="product-remove">
                            <a href="{{ url('cart/deleteItem/'.$cartItem->id )}}" onclick="return myFunction();"> 
                                <button type="button" class="btn btn-default btn-sm">
                                 <span class="glyphicon glyphicon-trash"></span>Remove
                             </button>
                         </a>

                     </div>
                     <!-- //Cartbox Single Item -->
                     
                 </div>
                 <div class="cartbox__total">
                    <ul>
                        <li class="grandtotal">Total<span class="price">Rs.{{Cart::getTotal()}}</span></li>
                    </ul>
                </div>
                <div class="cartbox__buttons">
                    <a class="food__btn" href="{{url('cart')}}"><span>View cart</span></a>
                    <a class="food__btn" href="{{url('checkout-init')}}"><span>Checkout</span></a>
                </a>
            </td>
            
        </div>
    </div>
</div>
<!---End shopping cart in corner-->
</div>
@endforeach

@endif

</div><!-- //Main wrapper -->

<!-- JS Files -->
<!-- <script src="{{asset('assets/js/vendor/jquery-3.2.1.min.js')}}"></script> -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/active.js')}}"></script>

@if(session()->has('message'))
<script>
    swal({
        title: "{!! session()->get('title')  !!}",
        text: "{!! session()->get('message')  !!}",
        type: "{!! session()->get('type')  !!}",
        confirmButtonText: "OK"
    });
</script>
@php session()->forget('message') @endphp
@endif


</body>

</html>

<script type="text/javascript">
   
   function checkEmail() {
    var email = document.getElementById('mce-EMAIL');
    var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!filter.test(email.value)) {
        alert('Please provide a valid email address');
        email.focus;
        return false;
    }
} 
</script>


<script>
  function myFunction() {
      if(!confirm("Are You Sure Remove Cart Item"))
          event.preventDefault();
  }
</script>
