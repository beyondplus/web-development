<?php
include('db.php');

if(!isset($_SESSION['email'])){
	header("location: index.php");
}

$sql = "SELECT id, title, description, featured_img FROM posts order by id desc";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./../assets/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-3" style="background:#e2e2e2;min-height:800px;">
	<ul>
		<li><a href="http://localhost/newsfeed/admin/news/select.php">News</a></li>
		<li><a href="">Photography</a></li>
	</ul>
</div>
<div class="col-md-9">
	<a href="http://localhost/newsfeed/admin/logout.php">Logout</a>
	<br>
	<h2>Welcome to Dashboard</h2>
	<?php echo $_SESSION['email']; ?>
</div>
</body>
</html>