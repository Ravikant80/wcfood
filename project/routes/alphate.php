<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>
<body>
<form>
	
<input type = "text" id = "txtState" />
<input type = "button" id = "btnValidate" value = "Submit" />
</form>





<script type = "text/javascript">
    $("#btnValidate").live("click", function () {
        var regex = /^[a-zA-Z ]*$/;
        if (regex.test($("#txtState").val())) {
            alert("Valid");
        } else {
            alert("Invalid");
        }
    });
</script>
</body>
</html>