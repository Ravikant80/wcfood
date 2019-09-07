@extends('admin_dashboard.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">

                    <thead>
                    <tr>
                        <th>SNo.</th>
                        <th>ID#</th>
                        <th>Country</th>
                        <th>Price</th>
                        <th>Time(Hrs:Mins)</th>
                        <th>Action</th>
            
                    </tr>
                    </thead>

                    <tbody>
                    @php $i=0;@endphp
                
                        @php $i++;@endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $shipping->id}}</td>
                            <td>{{ $shipping->country}}</td>
                            <td>{{ $shipping->price}} INR</td>
                            <td>{{ $shipping->type}}</td>
                            <td><a href="{{url('admin/shippings')}}">Back</a></td>
                            
 
                        </tr>          
                

                    </tbody>
                </table>
                <div class="text-center">

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
