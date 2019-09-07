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
                        <th>Name.</th>
                        <th>Opening Time</th>
                        <th>Ending Time</th>
                        <th>Category</th>
                        <th>Price Range</th>
                        <th>Email</th>
                        <th>Full Address</th>
                        <th>Postcode</th>
                        <th>Country</th>
                        <th>Restaurant Lat</th>
                        <th>Restaurant Long</th>
                        <th>Contact Person Name</th>
                        <th>Contact Person Email</th>
                        <th>Contact Person Phone</th>
                        <th>Minimum Order Price</th>
                        <th>Add Restaurant Menu</th>
                        <th>Edit Restaurant Menu</th>

                    </tr>
                    </thead>

                    <tbody>
                    @php $i=0;@endphp
                    @foreach($restaurants as $restaurant)
                        @php $i++;@endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $restaurant->restaurant_id  }}</td>
                            <td>{{ $restaurant->name }}</td>
                            <td>{{ $restaurant->opening_time }}</td>
                            <td>{{ $restaurant->ending_time }}</td>
                            <td>{{ $restaurant->category }}</td>
                            <td>{{ $restaurant->price_range }}</td>
                            <td>{{ $restaurant->email }}</td>
                            <td>{{ $restaurant->full_address }}</td>
                            <td>{{ $restaurant->postal_code }}</td>
                            <td>{{ $restaurant->country }}</td>
                            <td>{{ $restaurant->restaurent_lat }}</td>
                            <td>{{ $restaurant->restaurent_lang }}</td>
                            <td>{{ $restaurant->cont_p_name }}</td>
                            <td>{{ $restaurant->cont_p_email }}</td>
                            <td>{{ $restaurant->cont_P_phone }}</td>
                            <td>{{ $restaurant->min_order_price }}</td>
                            <td><a href="{{url('admin/add-restaurant-menu/'.$restaurant->restaurant_id )}}">Add Menu </a></td>
                             <td><a href="{{url('admin/edit-restaurant/'.$restaurant->restaurant_id )}}">Edit Restaurant </a></td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="text-center">

                </div>
            </div>
        </div>

    </div>
</div>
@endsection