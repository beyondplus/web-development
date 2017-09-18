<?php
include('./../db.php');
if(!isset($_SESSION['email'])){
	header("location: index.php");
}
if(isset($_POST['submit'])) {

	
	$title = $_POST['title'];	
	$description = $_POST['description'];	
	$featured_img = $_POST['featured_img'];	

	//Insert Query
	$sql = "INSERT INTO posts (title,description,  featured_img)
	VALUES ('$title','$description',  '$featured_img')";

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
	<link rel="stylesheet" type="text/css" href="./../../assets/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-3" style="background:#e2e2e2;min-height:800px;">
	<ul>
		<li><a href="http://localhost/newsfeed/admin/news/select.php">News</a></li>
		<li><a href="">Photography</a></li>
	</ul>
</div>
<div class="col-md-9">
		<h2> Insert Form</h2>
		<form action="" method="POST">
			<div class="row">
			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="name" name="title">
			  </div>
			  <div class="col-xs-12">
			  	<textarea name="description" class="form-control"></textarea>
			  </div>
			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="featured_img" name="featured_img">
			  </div>
			  <div class="col-xs-12">
			    <input type="submit" class="form-control" value="Submit" name="submit">
			  </div>
			</div>
		</form>
	</div>
</body>
</html>