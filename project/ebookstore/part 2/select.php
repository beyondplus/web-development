<?php
	include('db.php');
	$sql = "SELECT * FROM ebook order by id desc";
	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<a href="insert.php">Create</a>
	<table class="table">
		<thead>
			<th>#</th>
			<th>Featured Image</th>
			<th>Title</th>
			<th>Description</th>
			<th>Option</th>
		</thead>
		<?php
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
		?>	
			    	<tr>
						<td><?php echo $row['id']; ?></td>
						<td><img src="http://localhost/ebookstore/uploads/<?php echo $row['preview_image']; ?>"  class="img-responsive"></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><a href="update.php?id=<?php echo $row['id'] ?>">Edit </a>| <a href="delete.php?id=<?php echo $row['id'] ?>" >Delete</a></td>
					</tr>
		<?php 	
			    }
			} else {
			    echo "0 results";
			}
		?>
	</table>

</body>
</html>