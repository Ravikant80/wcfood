@extends('admin_dashboard.dashboard')
@section('style')

<link href="{{ asset('assets/admin/css/bootstrap-toggle.min.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
@endsection
@section('content')
<?php
function getToken($length){
   $token = "";
   $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
   $codeAlphabet.= "0123456789";
     $max = strlen($codeAlphabet); // edited

     for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[random_int(0, $max-1)];
    }

    return $token;
}
?>
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

                <form method="post" id="add_restaurent_form_id" action=" {{ url('admin/store-coupon') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">


                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Coupon Code:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="coupon_code" name="coupon_code" class="form-control{{ $errors->has('coupon_code') ? ' is-invalid' : '' }}" required  value="{{ getToken(10)  }}" />
                                         @if ($errors->has('coupon_code'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('coupon_code') }}</strong>
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
                                            <label class="control-label control_name">Amount:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="amount" name="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" required  value="{{ old('amount') }}" min="0" />

                                            @error('amount')
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
                                            <label class="control-label control_name">Expire Date:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" id="expire_date" name="expire_date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required  value="{{ old('expire_date') }}" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Amount Type:</label>
                                        </div>
                                        <div class="col-md-4">

                                            <select name="amount_type" id="amount_type" >
                                                <option value="Percentage">Percentage</option>
                                                <option value="Fixed">Fixed</option>
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
                                        <label class="control-label control_name">Enable:</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="checkbox" id="status" name="status" class="form-control" required   value="1">
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
