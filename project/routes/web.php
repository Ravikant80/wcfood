<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'FrontendController@index');
Route::get('/about-us', 'FrontendController@aboutUs');
Route::get('/gallery', 'FrontendController@ourGallery');
Route::get('/blog', 'FrontendController@ourBlog');
Route::get('/services', 'FrontendController@ourServices');
Route::get('/contact-us', 'FrontendController@contactUs');
Route::post('/storecontus', 'FrontendController@storeContactUs');
Route::get('/menu-list', 'FrontendController@menuList'); 
Route::post('/subscribestore', 'FrontendController@subscribeStore');
Route::get('/sms', 'FrontendController@smsSubscribe');







Auth::routes();

Route::post('/logout-user','Auth\LoginController@logoutUser');



Route::get('/my-account', 'HomeController@index');
Route::post('add/delivery-address', 'HomeController@addDeliveryAddress');
Route::post('update/delivery-address', 'HomeController@updateDeliveryAddress');


   //User Order and User Profile
Route::group(['middleware' => 'auth'], function () {
    Route::get('myorder','HomeController@myOrder');
    Route::get('myprofile',['as'=>'myprofile','uses'=>'HomeController@myProfile']);
    Route::get('account-setting/','HomeController@editAccountSetting');
    Route::post('update-account-setting','HomeController@updateAccountSetting'); 

});


//social login for user
Route::get('/login/{social}', 'SocialController@redirect')->where('social', 'twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback', 'SocialController@callback')->where('social', 'twitter|facebook|linkedin|google|github|bitbucket');
Route::post('favoute/restaurant/manage','FavouriteController@manageFavourite');
Route::get('favoute/restaurants','FavouriteController@myFavouriteRestaurant');



//*****************************  Admin Auth   ***********************************************


Route::get('admin-dashboard',['as'=>'admin-dashboard','uses'=>'Admin\ADashboardController@index']);
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login')->name('admin.login.post');
Route::get('admin/register','Admin\RegisterController@registerForm')->name('admin.register');
Route::post('admin/register','Admin\RegisterController@create');
Route::get('admin/logout', 'Admin\LoginController@logout');
Route::post('admin-password/email','ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

//Reset Password

Route::get('admin-password/reset{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');


//**********************************************Restaurant Auth **************************************************************
Route::get('getRestaurantNotification','RestaurantDashboardController@getRestaurantNotification');
Route::get('restaurant-dashboard',['as'=>'restaurant-dashboard','uses'=>'RestaurantDashboardController@index']);
Route::get('restaurant','Restaurant\LoginController@showLoginForm')->name('restaurant.login');
Route::post('restaurant','Restaurant\LoginController@login')->name('restaurant.login.post');
Route::get('restaurant/register','Restaurant\RegisterController@registerForm')->name('restaurant.register');
Route::post('restaurant/register','Restaurant\RegisterController@create');
Route::get('restaurant/logout', 'Restaurant\LoginController@logout');


//****************************************************DeliveryGuys************************************************************
Route::get('deliveryguys-dashboard',['as'=>'deliveryguys-dashboard','uses'=>'DeliveryGuys\DeliveryGuysController@index']);
Route::get('deliveryguys/register','DeliveryGuys\RegisterController@registerForm')->name('deliveryguys.register');
Route::post('deliveryguys/register','DeliveryGuys\RegisterController@create');
Route::get('deliveryguys','DeliveryGuys\LoginController@showLoginForm')->name('DeliveryGuys.login');
Route::post('deliveryguys','DeliveryGuys\LoginController@login')->name('DeliveryGuys.login.post');
Route::get('deliveryguys/logout', 'Restaurant\LoginController@logout');




/* ================================ Admin Section Restaurant Requirement  ================================= */

Route::group(['prefix' => 'admin'], function () {


    Route::get('restaurants','RestaurantController@index');
    Route::get('create-restaurant','RestaurantController@create');
    Route::post('store-restaurant','RestaurantController@store');
    Route::get('edit-restaurant/{id}','RestaurantController@edit');                             
    Route::post('update-restaurant/{id}','RestaurantController@update');
    Route::get('delete-restaurant/{id}','RestaurantController@destroyRestaurant');
    
    Route::get('restaurant-category','RestaurantController@getRestaurantCategory');
    Route::get('add-restaurant-category','RestaurantController@addRestaurantCategory');
    Route::post('add-restaurant-category','RestaurantController@storeRestaurantCategory');
    Route::get('edit-restaurant-category/{id}','RestaurantController@editRestaurantCategory');
    Route::post('update-restaurant-category/{id}','RestaurantController@updateRestaurantCategory');
    Route::get('delete-restaurant-category/{id}','RestaurantController@destoroyRestaurantCategory');
    
    Route::get('restaurant-menus','RestaurantController@getMenu');
    Route::get('add-restaurant-menu/{id}','RestaurantController@regMenu');
    Route::post('restaurant-store-menus','RestaurantController@storeMenu');
    Route::get('restaurant-edit-menu/{id}','RestaurantController@editMenu');
    Route::post('restaurant-update-menu/{id}','RestaurantController@updateMenu');
    Route::get('restaurant-delete-menu/{id}','RestaurantController@destroyMenu');
    Route::get('restaurant-view-menu/{id}','RestaurantController@viewMenu');
    
    Route::get('menu-items/{id}','RestaurantController@getMenuItem');
  //Route::get('menu-items/{id}','RestaurantController@getMenuItem');
    Route::get('add-menu-items/{id}','RestaurantController@addMenuItem');
    Route::post('add-menu-items/','RestaurantController@storeMenuItem');
    Route::get('edit-menu-items/{id}','RestaurantController@editMenuItem');
    Route::get('delete-menu-items/{id}','RestaurantController@destroyMenuItem');
    Route::post('update-menu-items/{id}','RestaurantController@updateMenuItem');
});



Route::get('getrestaurantdatabyId','SearchDataController@getMenuItemByResId');


    ///// Searching  Restaurant Route /////////
Route::get('search-restaurant','SearchDataController@create');
Route::post('search-restaurant','SearchDataController@searchRestaurants');
    // Route::get('restaurants','SearchDataController@restaurantList');
Route::get('get-restaurant','SearchDataController@getRestaurant');
Route::get('view-restaurant/{slug}','SearchDataController@viewRestaurant');
Route::get('restaurant-cate/{slug}','SearchDataController@menuCategory');
Route::get('restaurant-menu/{id}','SearchDataController@getRestaurentMenu');

Route::get('send-restaurantname/{slug}','SearchDataController@sendRestaurantNameToCheckOut');


//search & filter item //
Route::post('/search_menu','SearchDataController@menuSearchResult');
Route::get('get_filter','SearchDataController@indexproduct');
Route::get('/indexproduct','SearchDataController@indexproductview');
Route::post('filter_data','SearchDataController@getFilterMenu');
Route::get('menucategory','SearchDataController@menuCategory');

//Data base Notification


    ///// Cart Area /////////
Route::post('addTocart','CartController@addToCart');
Route::post('addTocart1','CartController@addToCart1');
Route::get('cart',['as'=>'cart','uses'=>'CartController@viewCart']);
Route::get('/viewcart','CartController@index');
Route::get('/cart/deleteItem/{id}','CartController@deleteItem');
Route::post('/cart/update-quantity/','CartController@updateQuantity');
Route::post('/cart/update-price/','CartController@updatePrice');






    //Route::get('cancelorder',['as'=>'cancelorder','uses'=>'PaymentController@cancelOrder']);
    /////Checkout/////
Route::get('checkout-init',['as'=>'checkout-init','uses'=>'CartController@checkout']);                                                                         
Route::post('delivery-address','CartController@deliveryAddress');

Route::get('/clearcart','CartController@clearCart');
Route::post('/apply-code','CartController@applyCoupon');

/* ================================ Checkout Section ================================= */

Route::post('payment-init','CheckoutController@init');
Route::get('checkout/order/success','CheckoutController@OrderSuccess');                                                                  
Route::get('payment', ['as' => 'payment', 'uses' => 'PaymentController@payment']);
Route::get('payment/status', ['as' => 'payment.status', 'uses' => 'PaymentController@status']);
Route::get('/paymentcancel','PaymentController@paymentCancel');

//crrunt user id
Route::get('RestaurantId','CheckoutController@userId');



//Ajax Serching
Route::get('/search', 'SearchDataController@restoMenuSearch')->name('search');
Route::get('/autocomplete', 'SearchDataController@autocomplete')->name('autocomplete');

//Coupon Functionalty
Route::group(['prefix' => 'admin'], function () {
            Route::get('/coupons','Admin\ADashboardController@couponList');
            Route::get('/add-coupon','Admin\ADashboardController@createCoupon');
            Route::post('/store-coupon','Admin\ADashboardController@storeCoupon');
            Route::get('edit-coupon/{id}','Admin\ADashboardController@editCoupon');                             
            Route::post('update-coupon/{id}','Admin\ADashboardController@updateCoupon');
            Route::get('delete-coupon/{id}','Admin\ADashboardController@destoroyCoupon');
});

                   
// Shipping functionalty
Route::group(['prefix' => 'admin'], function () {
            Route::get('/shippings','ShippingController@shippingView');
            Route::get('/shipping-add','ShippingController@shippingAdd');
            Route::post('/shipping-store','ShippingController@shippingStore');
            Route::get('/shipping-edit/{id}','ShippingController@shippingEdit');
            Route::post('/shipping-update/{id}','ShippingController@shippingUpdate');
            Route::get('/shipping-delete/{id}','ShippingController@shippingDestroy');
            Route::get('/shipping-show/{id}','ShippingController@shippingShow');
});


        //session get,set,remove
        Route::get('session/get','CheckoutController@accessSessionData');
        Route::get('session/set','CheckoutController@storeSessionData');
        Route::get('session/remove','CheckoutController@deleteSessionData');
    