@extends('frontend.templet1')


@section('content')

<style type="text/css">
	
/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}

.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}

</style>


<div class="container">
  <div class="row profile">
    <div class="col-md-3">
     <div class="profile-sidebar">
      <!-- SIDEBAR USERPIC -->
      <div class="profile-userpic">
       <img src="{{asset('assets/images/slider/text/ravis.jpg')}}" class="img-responsive" alt="">
     </div>
     <!-- END SIDEBAR USERPIC -->
     <!-- SIDEBAR USER TITLE -->


     <div class="profile-usertitle">
      <div class="profile-usertitle-name">
        {{Auth::user()->name}}
      </div>
          <!-- <div class="profile-usertitle-job">
            Developer
          </div> -->
        </div>


        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
         <a href="{{ url('/myprofile') }}"><button type="button" class="btn btn-success btn-sm">Profile</button></a>
         <a href="{{ url('/myorder/') }}">
           <button type="button" class="btn btn-success btn-sm">My Order</button>
         </a>
       </div>
       <!-- END SIDEBAR BUTTONS -->
       <!-- SIDEBAR MENU -->
       <div class="profile-usermenu">
         <ul class="nav">


          <li>
            <a href="{{url('/account-setting/')}}">
              <i class="glyphicon glyphicon-user"></i>
            Account Settings </a>
          </li>

          
          <li>

            <li>

              <a class="dropdown-item c1 " href="{{ url('/logout-user') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}

            </a>


            <form id="logout-form" action="{{ url('/logout-user') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </div>
      <!-- END MENU -->
    </div>
  </div>
  <div class="col-md-9">
    <div class="profile-content">
     <div class="col-md-12 col-sm-12 ol-lg-12">
      <form action="#" method="post"> 
        @csrf  
        <center><h4><i>Favourite Restaurant</i></h4> </center>       
        <div class="table-content table-responsive">
          <table>
            <thead>


              <tr>
                <th>Favourite</th>
                <th>Image</th>
                <th>Address</th>
                <th>Email</th>
                <th>Opening & Closing</th>
                <th>Contact</th>
              </tr>
            </thead>
            <tbody>
              @if(count($favouritedata) ==0)

               <center> <h2 style="color: red">You did not like a Restaurant</h2></center>
                @else
              @foreach($favouritedata as $favourite)
              <tr>
                <td>
                <a href="{{ url('view-restaurant/'.$favourite->name) }}">
                {{$favourite->name}}</td>
              </a>
                <td>

                <div>  
                <a href="{{ url('view-restaurant/'.$favourite->name) }}">
                  
                      
                <img src="{{ asset('assets/upload/restaurant/' .$favourite->profile_image) }}" class="img-rounded " alt="{{  $favourite->profile_image }}" width="200" height="200" id="profile_image">  </a>  
                </div>
              </td>
              <td>
                {{$favourite->full_address}}
              </td>
              
              <td>
                {{$favourite->email}}
              </td>
              
              <td>
                {{$favourite->opening_time }} Am <?php echo' To   ';?>{{ $favourite->ending_time}} Pm
              </td>

              <td>
                {{$favourite->cont_P_phone }}
              </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </form> 
    </div>
    @endsection