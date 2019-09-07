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
                            <th>Restaurant Name.</th>
                            <th>Menu Name</th>
                            <th>Menu Description</th>
                            <th>view Menu </th>
                            <th>Add Menu Item</th>
                            <th>Edit Menu </th>
                            <th>Delete Menu </th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $i=0;@endphp
                        @foreach($menus as $menu)
                        @php $i++;@endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->name  }}</td>
                            <td>{{ $menu->menu_name }}</td>
                            <td>{{ $menu->menu_description }}</td>
                            <td><a href="{{ url('admin/menu-items/'.$menu->id) }}">View Items</a></td>
                            <td><a href="{{ url('admin/add-menu-items/'.$menu->id) }}">Add Menu Item</a></td>
                            <td><a href="{{ url('admin/restaurant-edit-menu/'.$menu->id) }}">Edit Menu</a></td>
                            <td><a href="{{ url('admin/restaurant-delete-menu/'.$menu->id) }}" onclick="return myFunction();">Delete Menu</a></td>
                            
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="text-center">

                </div>
            </div>
        </div>

    </div>
</div><!-- ROW-->
@endsection
<script>
    function myFunction() {
        if(!confirm("Are You Sure to delete this"))
            event.preventDefault();
    }
</script>