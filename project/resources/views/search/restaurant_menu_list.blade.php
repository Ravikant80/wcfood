@extends('frontend.template')

@section('content')

<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php
$min = 100;
$max = 5000;


if (!empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (!empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}
?>


<script type="text/javascript">

    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 100,
            max: 5000,
            values: [<?php echo $min; ?>, <?php echo $max; ?>],
            slide: function (event, ui) {
                $("#amount").html("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                $("#min").val(ui.values[ 0 ]);
                $("#max").val(ui.values[ 1 ]);
            }
        });
        $("#amount").html("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
    });
</script>
<style>

    #text,#text2{
        width: 57px;
        border: none;
        resize: none;
    }
    .price-ratio{
        display: inline-flex;
    }
    #text2{
        margin-left: 16px;
    }
    .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 25px;
        background: #d3d3d3;
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
    }

    .slider:hover {
        opacity: 1;
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        background: #4CAF50;
        cursor: pointer;
    }

    .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        background: #4CAF50;
        cursor: pointer;
    }

</style>


<!-- Start Bradcaump area -->
<div class="detail_slider">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3">

       <!-- <img src="../assets/upload/restaurant/hd.jpg" class="img-responsive food_img">  -->

                <img id="profile_image" src="{{ URL::asset('assets/upload/restaurant/' .$restaurant->profile_image) }}" alt="{{ $restaurant->profile_image }}" class="img-responsive food_img" >

            </div>

            <div class="col-md-6">
                <h3>{{$restaurant->name}}</h3>
                <!-- <h3>{{$restaurant->profile_image}}</h3> -->
                <p>{{$restaurant->full_address}}</p>
                <div class="row rating">

                    <div class="col-md-3 first_rate">
                        <h4>4.0</h4> 
                        <p class="rating_p">1000+ Ratings</p> 
                    </div>

                    <div class="col-md-3 second_rate">
                        <h4>29 mins</h4> 
                        <p class="rating_p">Delivery Time</p> 
                    </div>


                    <div class="col-md-3 second_rate">
                        <h4> {{$restaurant->opening_time}} am </h4> 
                        <p class="rating_p">Opeing Time</p> 
                    </div>

                    <div class="col-md-3 third_rate">
                        <h4>{{$restaurant->ending_time}} pm</h4> 
                        <p class="rating_p">Closing Time</p> 
                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="Z4sK8">
                    <div class="_2FyFZ icJ_O">
                        <div class="QWCzK">Offer</div>
                        <div class="_3F2Nk">
                            <div class="DM5zR">
                                <span class="icon-offer-filled _26GkL"></span>
                                <div class="_3lvLZ">30% off on orders above ₹99 up to ₹75 | Use coupon</div>
                            </div>
                            <div class="DM5zR">
                                <span class="icon-multi-offer _26GkL _22s66"></span>
                                <div class="_3lvLZ">Free Apple Drink on orders above ₹99 for SUPERs
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="_2e0fx">
                <div class="LrkrN">
                    <div class="_1g_1a">



                        <!--Searching Area Start-->
                        <div class="col-md-6"><i class="icon-magnifier"></i>   
                            <div class="_3d2Yn ">
                                <i class="fa fa-search search_icon" aria-hidden="true"></i><span class="_2QyU3 icon-magnifier"></span>

                                <span class="_1JjHr">
                                    <form action="{{url('/search_menu')}}" method="get" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="restaurant_id" value="{{$restaurant->restaurant_id}}" id="restaurant_id">
                                        <input type="text" placeholder="Search product  here..." name="query" id="search" value="{{request()->input('query')}}"  class="_5mXmk" onkeyup="menuSearchResult()" >
                                    </form>
                                </span>  
                                <span class="_38kfh icon-close-thin"></span>
                            </div>
                        </div>
                        <!--Searching Area End-->


                        <div class="col-md-3">
                            <label>
                                <div class="_31C1x _2C8Ic">
                                    <input type="radio" name="type" value="veg"  class="styled  common_selector type">
                                    <span class="_1KYwd">Pure Veg</span>
                                    <input type="radio" name="type" value="non veg"  class="styled common_selector type">
                                    <span class="_1KYwd">Non Veg</span>
                                    <input type="hidden" name="restaurant_id" value="{{$restaurant->restaurant_id}}">

                                </div>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <div class="_2Epw9">
                                <span class="_2JnGH icon-heartInverse">
                                    <i class="fa fa-heart fa_heart text-danger favourite favouritesRestaurant" data-status="0"></i>
                                    <i class="fa fa-heart-o fa_heart favourite-o favouritesRestaurant" data-status="1"></i> 
                                    <div class="TQcBQ icon-heart zSo2a" style="display: none;">
                                    </div>
                                </span>
                                <span class="_2FDKw">Favourite</span>
                            </div>
                        </div>
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

                        @foreach($restaurantmenu as $menu )

                        <input type="hidden" name="restaurant_id" value="{{$menu->restaurant_id}}">
                        <input type="hidden" name="product_id" value="{{$menu->menu_id}}"> 
                        <input type="checkbox" name="menu_name" value="{{$menu->menu_name}}"  class="styled common_selector menu">
                        <label>{{$menu->menu_name}}</label>
                        <br> 
                        @endforeach
                    </ul>
                </div><br/><br/>
                <!-- End Category Area -->

                <!-- price range slider -->
                <h4 class="side__title">Price Range</h4>
                <div class="price-ratio">
                    <textarea id="text">100</textarea> 
                    <span>to</span> 
                    <textarea id="text2">5000</textarea>
                </div>

                <input type="hidden" name="restaurant_id" value="{{$restaurant->restaurant_id}}" id="getrestaurant_id">
                <input type="range" min="100" max="5000" value="100" class="slider" id="myRange" onmouseup="mouselog(event)">

            </div>
            <!-- end slider range -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="popupal__menu">

                        </div>
                    </div>
                </div>
                <div class="row mt--30 filter_data">


                    <!-- Start Single Product -->
                    @if(count($restaurantmenu) ==0)

                    <h2 style="margin:auto;">No Data Found</h2>
                    @else

                    @include('search.getfilter_menu')
                    @endif

                </div> 
            </div>

            <!-- End Single Product -->





            <div class="col-lg-3 col-md-12 col-sm-12 md--mt--40 sm--mt--40 detail_rightside">
                <!-- Start Sidebar Newsletter -->
                <div class="sidebar__newsletter mt--60 ">
                    <h4 class="side__title">Card</h4>
                    <div class="sidebar__inbox cart-info">   

                        @include('cart.cart1')
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>
</section>
<!-- End Blog List View Area -->


<script type="text/javascript">
    $(document).ready(function () {
        let fv = '<?php echo $restaurant->favourite; ?>';
        if (fv == 1) {
            $('.favourite-o').hide();
            $('.favourite').show();
        } else {
            $('.favourite-o').show();
            $('.favourite').hide();
        }
    });
    $(document).on('click', '.favouritesRestaurant', function (evnt) {
        let restaurantId = $('#restaurant_id').val();
        let favouriteStatus = $(this).data('status');
        let postData = {
            restaurant_id: restaurantId,
            status: favouriteStatus
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('favoute/restaurant/manage')}}",
            method: "POST",
            data: postData,
            success: function (data) {
                let responceData = JSON.parse(data);
                if (responceData.resultdata == 1) {
                    $('.favourite-o').hide();
                    $('.favourite').show();
                } else {
                    $('.favourite').hide();
                    $('.favourite-o').show();
                }
            }
        });
    })


    function mouselog(event) {

        text.value = event.target.value;
        filter_data();
    }


    function filter_data() {

        var menu = get_filter('menu');
        var type = get_filter('type');
        var minimum_price = $('#text').val();
        var maximum_price = $('#text2').val();

        var rest_id = $('#getrestaurant_id').val();
        // alert(type);
        // alert(rest_id);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('filter_data')}}",
            method: "POST",
            data: {rest_id: rest_id, minimum_price: minimum_price, maximum_price: maximum_price, menu: menu, type: type},
            success: function (data) {
                $('.filter_data').html(data);
            }
        });

    }


    function get_filter(class_name)
    {
        var filter = [];
        $('.' + class_name + ':checked').each(function () {
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function () {
        filter_data();
    });


    function menucategory(class_name)
    {
        var filter = [];
        $('.' + class_name + ':checked').each(function () {
            filter.push($(this).val());
        });
        return filter;
    }

    $('.menucateclass').click(function () {
        filter_data();
    });



</script>  



<script type="text/javascript">

    function menuSearchResult() {

        var search = $('#search').val();

        var rest_id = $('#restaurant_id').val();

        // alert("You search: " + search + "Your id: " + rest_id );


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('search_menu')}}",
            method: "POST",
            data: {rest_id: rest_id, search: search},
            success: function (data) {
                $('.filter_data').html(data);
            }
        });

    }

    function doaddCart(id, name, price, restaurant_id) {

        var quantity = 1;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('/addTocart1')}}",
            method: "POST",
            data: {id: id, name: name, price: price, quantity: quantity, restaurant_id: restaurant_id},
            success: function (data) {

                $('.cart-info').html(data);

            }
        });

    }


</script>
@endsection