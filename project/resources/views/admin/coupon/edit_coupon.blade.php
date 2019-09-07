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

                <form method="post" id="update_coupon_form_id" action="{{ url('admin/update-coupon/'.$coupon->id) }}"  enctype="multipart/form-data">
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
                                            <input type="text" id="coupon_code" name="coupon_code" class="form-control" required  value="{{$coupon->coupon_code}}" required />

                                          
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
                                            <input type="number" id="amount" name="amount" class="form-control" required  value="{{ $coupon->amount}}" min="1" />
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
                                            <input type="date" id="expire_date" name="expire_date" class="form-control" required  value="{{$coupon->expire_date}}" autocomplete="off" />
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

                                            <select name="amount_type" id="amount_type">
                                            <option value="Percentage" <?php if($coupon->amount_type =='Percentage'){ echo "selected";}?>>Percentage</option>
                                            <option value="Fixed" <?php if($coupon->amount_type =='Fixed'){ echo "selected";}?>>Fixed</option>
                                         
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
                                            <input type="checkbox" id="status" name="status" class="form-control"required value="1" <?php if($coupon->status=="1") echo "checked";?> required />
                                        </div>
                                    </div>
                                </div>
                            </div> 


                            <div class="row">
                                <div class="col-md-12">
                                  <center>  <button class="btn btn-primary btn-block btn-lg" style="width: auto;"><i class="fa fa-send"></i> Edit Coupon</button></center>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection