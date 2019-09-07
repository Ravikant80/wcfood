<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="{{url('/smspost')}}" method="post">
	@csrf
    <div class="col-md-4">
   <input type="tel" id="required2" name="mobile" class="form-control" required  maxlength="10" required >
</div>  
  <input type="submit" value="Submit">   

</form>


</html>