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
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>

                    <tbody>
                    @php $i=0;@endphp
                    @foreach($shipping as $shipping)
                        @php $i++;@endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $shipping->id}}</td>
                            <td>{{ $shipping->country}}</td>
                            <td>{{ $shipping->price}} INR</td>
                            <td>{{ $shipping->type}}</td>
                            <td><a href="{{url('admin/shipping-edit/'.$shipping->id)}}">Edit</a></td>
                            <td><a href="{{url('admin/shipping-show/'.$shipping->id)}}">show</a></td>
                            <td><a href="{{url('admin/shipping-delete/'.$shipping->id)}}" onclick="return myFunction();">Delete</a></td> 
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