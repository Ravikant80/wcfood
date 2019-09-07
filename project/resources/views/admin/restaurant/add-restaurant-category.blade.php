@extends('admin_dashboard.dashboard')
@section('style')

    <link href="{{ asset('assets/admin/css/bootstrap-toggle.min.css') }}" rel="stylesheet">

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

                <form method="post" id="add_restaurent_form_id" action=" {{ url('admin/add-restaurant-category') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">


                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Category Name:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="cname" name="category_name" class="form-control" required  value="{{ old('category_name') }}"/>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-md-4" >
                                            <label class="control-label control_name">Category Description:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="required2" name="category_description" class="form-control" required  value="{{ old('category_description') }}"/>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                       
                      
   
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block btn-lg"><i class="fa fa-send"></i> Add Category</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection
