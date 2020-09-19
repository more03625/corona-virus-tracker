<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>

<div class="container">
  <h2>Global Data</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>TotalConfirmed </th>
      </tr>
    </thead>
    <tbody id="global-wise">

    </tbody>
  </table>
</div>

<script>
	$.ajax({
		url : "https://api.covid19api.com/summary",
		type : "GET",
		dataType : "json",
		success : function(data){
			$.each(data.Global, function(key, value){
				$("#global-wise").append("<tr><td>" + key +"</td><td>"+value+"</td><td>");
			});
		}
	});
</script>
</body>
</html>