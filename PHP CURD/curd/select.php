<?php
include('db.php');
$sql = "SELECT id, name, price, featured FROM products order by id desc";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
   
<table class="table">
	<div class="col-md-8"></div> 
	<div class="col-md-4"><a href="insert.php" class="btn btn-primary">Insert</a></div> 
	<h2>Product Table</h2> 
	<thead> <tr> <th>#</th> <th>Name</th> <th>Price</th> <th>Action</th> </tr> </thead> 
	<tbody> 
		<?php

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
    	?>
		<tr> <th scope="row"><?php echo $row["id"]; ?></th> <td><?php echo $row["name"]; ?></td> <td><?php echo $row["price"]; ?></td> <td><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-info btn-xs">Edit</a> | <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-info btn-xs">Delete</a></td> </tr> 
		<?php
			 }
		} else {
		    echo "0 results";
		}
		$conn->close();
		?>
	</tbody> 
</table>
</body>
</html>