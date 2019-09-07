                           	
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.css">
<script src="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

 <table class="table table-bordered">

  <thead>
    
    <tr>
        <th scope="col">ItemImage</th>
        <th scope="col">Cart Item Name</th>
        <th scope="col"> Single quantity price</th>
        <th scope="col">Total quantity</th>
        <th scope="col">Total Price</th>
    </tr>

  </thead>
  
  <tbody>

    <tr>
      @foreach($cartdata as $cartdatas)

        <!-- <td><img src="assets/images/cart/2.jpg" alt="product img" /></a></td> -->
        <td>
          <img src="assets/images/cart/2.jpg" class="img-rounded" alt="Cinque Terre" width="75" height="75"> 
        </td>  
        
        <td>{{$cartdatas->name}}</td>
        <td>Rs.{{$cartdatas->price}}</span></td>
        <td> {{$cartdatas->quantity}} </td>
        <td>Rs.{{Cart::get($cartdatas->id)->getPriceSum()}}</td>

      <td> 

    <a href="{{url('reorder/'.$cartdatas->id)}}">
     <button type="button" class="btn">Reorder</button> 
    </a>
     &nbsp;
      <a href="{{url('#')}}"> 
      <button type="button" class="btn">Help</button> 
      </a>
      &nbsp;&nbsp;
      <a href="{{url('/')}}"> 
     <button type="button" class="btn">Home</button> 
     </a>

      </td>

        
    </tr>
  
     @endforeach
  </tbody>

</table>
</body>
</html>