@extends('restaurant.dashboard')
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
                        <th>Order Id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>State</th>
                 
                    </tr>
                    </thead>

                    <tbody>
                    @php $i=0;@endphp
					@foreach($restaurant->notifications as $notification)
                        @php $i++;@endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $notification->data['order']['id']}}</td>
                            <td>{{ $notification->data['order']['user_name']}}</td>
                            <td>{{ $notification->data['order']['billing_email']}}</td>
                            <td>{{ $notification->data['order']['billing_city']}}</td>
                            <td>{{ $notification->data['order']['billing_state']}}</td>
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



