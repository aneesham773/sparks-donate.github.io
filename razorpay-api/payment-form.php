<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width ,initial-scale=1.0">
	<title>Payment Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="https://kit.fontawesome.com/a0941870c8.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

</head>
	<body>
		<div class="card">
		<article class="card-body mx-auto" style="max-width=400px;">
		<h4 class="card-title mt-3 text-center" style="color: grey;">Donate</h4>	
		<div>
	<form action="pay.php" method="post">
		<div class="form-group input-group">
		Price:<input type="text" name="price"><br>
	</div>
	<div class="form-group input-group">
		Name:<input type="text" name="customername"><br>
	</div>
	<div class="form-group input-group">
		Email:<input type="email" name="email"><br>
	</div>
	<div class="form-group input-group">
		Contact:<input type="text" name="contactno"><br>
	</div>

         <div class="form-group">
		<input type="submit" name="submit" value="Proceed to Pay" class="btn btn-dark btn-block">
	</div>
	</form>
</div>

</article>
</div>
</body>

</html>