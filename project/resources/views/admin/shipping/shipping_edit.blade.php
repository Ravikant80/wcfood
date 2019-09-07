@extends('admin_dashboard.dashboard')
@section('style')

<link href="{{ asset('assets/admin/css/bootstrap-toggle.min.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
@endsection
@section('content')
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

                <form method="post" id="add_restaurent_form_id" action="{{ url('admin/shipping-update/'.$shipping->id) }}"  enctype="multipart/form-data">
                 @csrf
                    <div class="form-body">


                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Country:</label>
                                        </div>
                                        <div class="col-md-4">
                                  <input type="text" id="countryid" name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" required  value="{{$shipping->country}}"/>
                                         @if ($errors->has('country'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                         @endif


                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Price:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="priceid" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"  value="{{$shipping->price}}" min="1" required  />

                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div> 
 							<div class="col-md-12">

                                <div class="form-row">
                                    <div class="form-group col-md-4" >
                             
                              <label for="type" style="float: right;color: #468847;font-weight: bold;">Delivery Time:</label>
                                </div>
                                        <?php $deliverytime = $shipping->type;
                                        $deliverytime =explode(':', $deliverytime);
                                        ?>
                                    <div class="form-group col-md-4" >
                                        <div class="row">
                                            <div class="col-md-6">

                                                Hrs.<select name="delivery_hour" class="form-control" style="border-color: #468847;" required >
                                                    <?php
                                                    for ($i = 0; $i <= 23; $i++) {
                                                        if ($i < 10) {
                                                            $min = 0;
                                                            $hours = $min . $i;
                                                        } else {
                                                            $hours = $i;
                                                        }
                                                        ?>
                                                        <option value="<?php echo $hours; ?>" <?php if(in_array($hours, $deliverytime)){ echo "selected";} ?> >
                                                            <?php echo $hours; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>

                                                 </select>
                                                @error('delivery_hour')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                               Mins <select name="delivery_minutes" class="form-control" style="border-color: #468847;" required>
                                                    <?php
                                                    for ($i = 15; $i <= 59; $i++) {
                                                        if ($i < 10) {
                                                            $min = 0;
                                                            $minutes = $min . $i;
                                                        } else {
                                                            $minutes = $i;
                                                        }
                                                        ?>
                                                        <option value="<?php echo $minutes; ?>" <?php if(in_array($minutes, $deliverytime)){ echo "selected";} ?>>
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
                        	</div>
                         <div class="row">
                            <div class="col-md-12">
                              <center>  <button class="btn btn-primary btn-block btn-lg" style="width: auto;"><i class="fa fa-send"></i> Add Coupon</button></center>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>



@endsection
