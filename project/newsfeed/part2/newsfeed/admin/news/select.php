<?php

session_start();

if(!isset($_SESSION['email'])){
	header("location: index.php");
}
include('./../../db.php');
$sql = "SELECT id, title, description, featured_img FROM posts order by id desc";
$result = $conn->query($sql);

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
		<li><a href="news/select.php">News</a></li>
		<li><a href="">Photography</a></li>
	</ul>
</div>
<div class="col-md-9">
	<table class="table">
		<div class="col-md-8"></div> 
		<div class="col-md-4">
			<a href="insert.php" class="btn btn-primary">Insert</a></div> 
		<h2>News Table</h2> 
		<thead> <tr> <th>#</th> <th>Title</th> <th>Description</th> <th>Action</th> </tr> </thead> 
		<tbody> 
			<?php

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
	    	?>
			<tr> <th scope="row"><?php echo $row["id"]; ?></th> <td><?php echo $row["title"]; ?></td> <td><?php echo $row["description"]; ?></td> <td><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-info btn-xs">Edit</a> | <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-info btn-xs">Delete</a></td> </tr> 
			<?php
				 }
			} else {
			    echo "0 results";
			}
			$conn->close();
			?>
		</tbody> 
	</table>
</div>
</body>
</html>