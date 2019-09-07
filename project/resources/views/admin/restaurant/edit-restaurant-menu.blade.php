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

                <form method="post" id="add_restaurent_form_id" action=" {{ url('admin/restaurant-update-menu/'.$menu->id) }}"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-body">


                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">

                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name"> Menu Name:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="required2" name="menu_name" class="form-control" required value="{{ $menu->menu_name }}" />
                                            
                                            @error('menu_name')
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
                                            <label class="control-label control_name">Menu Description: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="required2" name="menu_description" class="form-control" required value="{{ $menu->menu_description}}"/>
                                            @error('menu_description')
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
                                            <label class="control-label control_name">Menu Image: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" id="menuimg" name="menuimg" class="form-control" required value="{{ $menu->menuimg}}"/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-block btn-lg"><i class="fa fa-send"></i> Update Menu</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


