<?php
include('db.php');
if(isset($_POST['submit'])) {

	$name = $_POST['name'];	
	$price = $_POST['price'];	
	$featured = $_POST['featured'];	

	//Insert Query
	$sql = "INSERT INTO products (name, price, featured)
	VALUES ('$name', '$price', '$featured')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="col-xs-6">
		<h2> Insert Form</h2>
		<form action="" method="POST">
			<div class="row">
			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="name" name="name">
			  </div>
			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="price" name="price">
			  </div>
			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="featured" name="featured">
			  </div>
			  <div class="col-xs-12">
			    <input type="submit" class="form-control" value="Submit" name="submit">
			  </div>
			</div>
		</form>
	</div>
	<div class="col-xs-6"></div>
</body>
</html>