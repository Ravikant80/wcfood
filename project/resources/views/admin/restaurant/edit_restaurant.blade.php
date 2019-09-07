@extends('admin_dashboard.dashboard')
@section('style')

<link href="{{ asset('assets/admin/css/bootstrap-toggle.min.css') }}" rel="stylesheet">
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
</style>
@endsection
@section('content')
<script type="text/javascript">

  function isNumberKey(evt)
  {
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

return true;
}


</script>



<div class="row">
    <div class="col-md-12">

        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <strong class="uppercase"><i class="fa fa-info-circle"></i> {{ $page_title }}</strong>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body" style="overflow: hidden">

                <form method="post" id="add_restaurent_form_id" action=" {{ url('admin/update-restaurant/'.$restaurant->restaurant_id) }}"  enctype="multipart/form-data" role="form" >
                    @csrf

                    <div class="form-body">


                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Restaurant Name:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="required2" name="name" class="form-control" value="{{$restaurant->name}}" data-validation="length required" data-validation-length="min3"/>

                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12">

                                <div class="form-row">
                                    <div class="form-group col-md-4" >
                                        <label for="opening_time" style="float: right;color: #468847;font-weight: bold;">Opening_Time:</label>
                                    </div> 
                                    <?php $openingtime = $restaurant->opening_time;
                                        $openingtime =explode(':', $openingtime);

                                        print_r($openingtime);

                                     ?>
                                    <div class="form-group col-md-4" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select name="opening_hour" class="form-control" style="border-color: #468847;" required>
                                                    <?php
                                                    for ($i = 1; $i <= 23; $i++) {
                                                        if ($i < 10) {
                                                            $min = 0;
                                                            $hours = $min . $i;
                                                        } else {
                                                            $hours = $i;
                                                        }
                                                        ?>
                                                        <option value="<?php echo $hours; ?>" <?php if(in_array($hours, $openingtime)){ echo "selected";} ?>>

                                                            <?php echo $hours; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>


                                                </select>
                                                @error('opening_hour')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <select name="opening_minutes" class="form-control" style="border-color: #468847;" required>
                                                    <?php
                                                    for ($i = 0; $i <= 59; $i++) {
                                                        if ($i < 10) {
                                                            $min = 0;
                                                            $minutes = $min . $i;
                                                        } else {
                                                            $minutes = $i;
                                                        }
                                                        ?>
                                                      
                                                        <option value="<?php echo $minutes; ?>" <?php if(in_array($minutes, $openingtime)){ echo "selected";} ?>>

                                                            <?php echo $minutes; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>

                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="form-row">
                                    <div class="form-group col-md-4" >
                                        <label for="ending_time" style="float: right;color: #468847;font-weight: bold;">Ending_Time:</label>
                                    </div> 
                                     <?php $endingtime = $restaurant->ending_time;
                                        $endingtime =explode(':', $endingtime);
                                    ?>
                                    <div class="form-group col-md-4" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select name="ending_hour" class="form-control" style="border-color: #468847;" required>
                                                    <?php
                                                    for ($i = 1; $i <= 23; $i++) {
                                                        if ($i < 10) {
                                                            $min = 0;
                                                            $hours = $min . $i;
                                                        } else {
                                                            $hours = $i;
                                                        }
                                                        ?>
                                                       
                                                        <option value="<?php echo $hours; ?>" <?php if(in_array($hours, $endingtime)){ echo "selected";} ?>>

                                                            <?php echo $hours; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>


                                                </select>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <select name="ending_minutes" class="form-control" style="border-color: #468847;" required>
                                                    <?php
                                                    for ($i = 0; $i <= 59; $i++) {
                                                        if ($i < 10) {
                                                            $min = 0;
                                                            $minutes = $min . $i;
                                                        } else {
                                                            $minutes = $i;
                                                        }
                                                        ?>
                                                    
                                            <option value="<?php echo $minutes; ?>" <?php if(in_array($minutes, $endingtime)){ echo "selected";} ?>>
                                                            <?php echo $minutes; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>

                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Category:</label>
                                        </div> 


                                        <div class="col-md-4">
                                            (Select Minimum Minimum One)
                                                <select  name="category[]" id="category" class="form-control" multiple="multiple" required data-validation="length" data-validation-length="min1">
                                                @foreach($categories as $category)
                                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                                @endforeach
                                                </select> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">

                                <div class="form-row">
                                    <div class="form-group col-md-4" >
                                        <label for="price_range" style="float: right;color: #468847;font-weight: bold;"> Price Per Person:</label>
                                    </div> 

                                    
                                    <?php $pricePPP = $restaurant->price_range;
                                        $pricePPP =explode(':', $pricePPP);

                                      //  print_r($pricePPP); ?>

                                    <div class="form-group col-md-4" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                Price
                                                <select name="pricep" class="form-control" style="border-color: #468847;" required >  <option value="50" <?php if(in_array('50', $pricePPP)){ echo "selected";}?>>50</option>
                                                  
                                                  <option value="100" <?php if(in_array('100', $pricePPP)){ echo "selected";}?>>100</option>
                                                  <option value="150" <?php if(in_array('150', $pricePPP)){ echo "selected";}?>>150</option>
                                                  <option value="150" <?php if(in_array('200', $pricePPP)){ echo "selected";}?>>200</option>
                                                  <option value="150" <?php if(in_array('250', $pricePPP)){ echo "selected";}?>>250</option>
                                                  <option value="150" <?php if(in_array('300', $pricePPP)){ echo "selected";}?>>300</option>
                                                  <option value="150" <?php if(in_array('350', $pricePPP)){ echo "selected";}?>>350</option>
                                                  <option value="150" <?php if(in_array('400', $pricePPP)){ echo "selected";}?>>400</option>
                                                  <option value="150" <?php if(in_array('450', $pricePPP)){ echo "selected";}?>>450</option>
                                                  <option value="150" <?php if(in_array('500', $pricePPP)){ echo "selected";}?>>500</option>
                                                
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                person
                                                <select name="pperson" class="form-control" style="border-color: #468847;" required>
                                                    <?php
                                                    for ($i = 1; $i <= 10; $i++) {
                                                        $persons=$i;
                                                        ?>
                                                        <option value="<?php echo $persons; ?>" <?php if(in_array($persons, $pricePPP)){ echo "selected";} ?>>
                                                            <?php echo $persons; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                                @error('pperson')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Email (For restaurant login): <span style="color: red;font-size: 20px;">*</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="email" id="required2" name="email" class="form-control"  data-validation="email required" value="{{$restaurant->email}}"/>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Password: <span style="color: red;font-size: 20px;">*</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="password" id="required2" name="password" class="form-control" required value="{{$restaurant->password}}" placeholder="Minimum 8 charcter" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Description:</label>
                                        </div> 
                                        <div class="col-md-4">
                                            <input type="text" id="required2" name="descriptions" class="form-control" required  value="{{$restaurant->descriptions}}"/>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Contact Person Name:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="inputTextBox" name="cont_p_name" class="form-control" required  value="{{$restaurant->cont_p_name}}" maxlength="35" />

                                            @error('cont_p_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Contact Person Email:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="email" id="required2" name="cont_P_email" class="form-control" required  value="{{$restaurant->cont_p_email}}" data-validation="email required" />

                                            @error('cont_P_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Contact Person Phone:</label>
                                        </div>
                                        <div class="col-md-4">

                                            <input type="tel" id="required2" name="cont_p_phone" class="form-control" required  value="{{$restaurant->cont_P_phone}}" onkeypress="return isNumberKey(event)" maxlength="10" required >

                                            @error('cont_p_phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Minimum Order Price:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="required2" name="min_order_price" class="form-control" data-validation="required" value="{{$restaurant->min_order_price}}" min="1" />
                                            @error('min_order_price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-12">
                                        <label class="control-label col-lg-4">Postal Code</label>
                                        <input type="text" id="searchInput" class="controls" placeholder="Enter a Postal Code" value="{{$restaurant->full_address}}" required/>
                                        <div id="map" style="width:80%;height:350px;"></div>
                                        <div id="geoData">
                                          <input type="hidden" name="full_address" id="location" value="{{$restaurant->full_address}}">
                                          <input type="hidden" name="postalcode" id="postal_code" value="{{$restaurant->postalcode}}">
                                          <input type="hidden" name="country" id="country" value="{{$restaurant->country}}">
                                          <input type="hidden" name="latitude" id="lat" value="{{$restaurant->latitude}}">
                                          <input type="hidden" name="longitude" id="lon" value="{{$restaurant->longitude}}">
                                      </div> 
                                  </div>
                              </div>
                          </div>
   <!--  <div class="col-md-12">
        <div class="form-group">
            <div class="row">
                <div class="form-group col-md-4" >
                    <label class="control-label control_name">Restaurant Image</label>

                </div>

                <div class="col-lg-8">
                    <div class="fileupload fileupload-new" data-provides="fileupload">


                        <input type="file"  name="resturant_logo" id="image" required onchange="document.getElementById('imgpreview').src = window.URL.createObjectURL(this.files[0])" value="{{ old('resturant_logo') }}"/>
                        <img id="imgpreview"  />
                        @error('resturant_logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

        </div>
    </div> -->
    <div class="form-group">
        <label class="control-label">Restaurant Images </label>
        <input class="form-control" type="file"   placeholder="Images" name="profile_image"  value="{{ old('profile_image') }}" />
    </div>
</div>
</div> 

<div class="row">
    <div class="col-md-12">
        <button class="btn btn-primary btn-block btn-lg"><i class="fa fa-send"></i> Add Restaurant</button>
    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


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

    autocomplete.addListener('place_changed', function() {
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
            if(place.address_components[i].types[0] == 'postal_code'){
                document.getElementById('postal_code').value = place.address_components[i].long_name;
            }
            if(place.address_components[i].types[0] == 'country'){
                document.getElementById('country').value = place.address_components[i].long_name;
            }
        }
        document.getElementById('location').value = place.formatted_address;
        document.getElementById('lat').value = place.geometry.location.lat();
        document.getElementById('lon').value = place.geometry.location.lng();
    });
}    
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGyNRktnupsrYn90kwf2DxfOOcz7fiL74&libraries=places&callback=initMap" async defer></script> 


<!-- validation link -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
   $.validate();
</script>
<script type="text/javascript">
    $(document).ready(function(){
    $("#inputTextBox").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });
});
</script>

@endsection