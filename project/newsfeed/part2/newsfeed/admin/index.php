<?php
	include('./../db.php');
	session_start();

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		// $query = "select * from user where email ='$email' and password = '$password'";
		// //$result = $conn->query($sql);
		// $result = mysqli_query($conn,$sql);
		// $count = mysqli_num_rows($result);
		// echo $count;
		// if($result) {
		$_SESSION['email'] = $email;	
		// } 
		header("location: news/select.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./../assets/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-2">
</div>
<div class="col-md-8">
	<h2>Login</h2>
	<form action="" method="post">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	  </div>
	  <input type="submit" class="btn btn-default" name="login">Submit</button>
	</form>
</div>
<div class="col-md-2"></div>
</body>
</html>