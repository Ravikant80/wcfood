@extends('admin_dashboard.dashboard')
@section('style')
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

                <form method="post" id="add_restaurent_form_id" action=" {{ url('admin/update-menu-items/'.$menuitem->menu_id) }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">


                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <!-- <input type="hidden" id="required2" name="menu_id" class="form-control" required value="{{ $menuitem->id }}" /> -->

                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name"> Item Name:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="itemname" name="item_name" class="form-control" required value="{{$menuitem->item_name}}"/>

                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Category Type:</label>
                                        </div>
                                        <div class="col-md-4">

                                            <select name="type" id="type" required>
                                                <option value="veg" <?php if($coupon->amount_type =='veg'){ echo "selected";}?>>veg</option>
                                                <option value="no veg" <?php if($coupon->amount_type =='no veg'){ echo "selected";}?>>non veg</option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Price: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="required2" name="price" class="form-control" required value="{{$menuitem->price}}"  onkeypress="return isNumberKey(event)" />
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
                                <div class="form-group">
                                    <div class="row">
                                        <input type="hidden" id="required2" name="menu_id" class="form-control" required value="{{ $menu->id }}" />
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Item Image</label>

                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" id="itmimage" name="itmimage" class="form-control" required value="{{$menuitem->itmimage}}"/>
                                            @error('itmimage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-block btn-lg"><i class="fa fa-send"></i> Update Menu Item</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection


<script type="text/javascript">
  function isNumberKey(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}


</script>



<script type="text/javascript">
    $(document).ready(function(){
        $("#itemname,#type").keypress(function(event){
            var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });
    });
</script>