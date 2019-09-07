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
                        <th>Coupon Code</th>
                        <th>Amount</th>
                        <th>ExpireDate</th>
                        <th>AmountType</th>
                        <th>Status</th>
                        <th>Edit Coupon</th>
                        <th> Delete Coupon</th>
                    </tr>
                    </thead>

                    <tbody>
                    @php $i=0;@endphp
                    @foreach($coupons as $coupon)
                        @php $i++;@endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $coupon->id}}</td>
                            <td>{{ $coupon->coupon_code}}</td>
                            <td>{{ $coupon->amount }} @if($coupon->amount_type == 'Percentage')% @else INR @endif</td>
                            <td>{{ $coupon->expire_date}}</td>
                            <td>{{ $coupon->amount_type}}</td>
                            <td>@if($coupon->status == 1)Active @else Inactive @endif</td>
                            <td><a href="{{url('admin/edit-coupon/'.$coupon->id)}}">Edit</a></td>
                            <td><a href="{{url('admin/delete-coupon/'.$coupon->id)}}" onclick="return myFunction();">Delete</a></td> 
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

<script>
function myFunction() {
if(!confirm("Are You Sure to delete this"))
event.preventDefault();
}
</script>