<?php
include('db.php');

if(isset($_GET['id'])){
	 $id = $_GET['id'];
}

if(isset($_POST['submit'])) {

	$name = $_POST['name'];	
	$price = $_POST['price'];	
	$featured = $_POST['featured'];	

	//Update Query
	$sql = "UPDATE products SET name='$name', price='$price', featured='$featured' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}

// after update query, should write the select query
$sql = "SELECT id, name, price, featured FROM products where id = $id";
$result = $conn->query($sql);

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
		<h2> Update Form</h2>
		<?php
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
    	?>
		<form action="" method="POST">
			<div class="row">
			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="name" name="name" value="<?php echo $row["name"]; ?>">
			  </div>
			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="price" name="price" value="<?php echo $row["price"]; ?>">
			  </div>
 			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="featured" name="featured" value="<?php echo $row["featured"]; ?>">
			  </div>
			  <div class="col-xs-12">
			    <input type="submit" class="form-control" value="Submit" name="submit">
			  </div>
			</div>
		</form>
		<?php
			 }
		} else {
		    echo "0 results";
		}
		$conn->close();
		?>
	</div>
	<div class="col-xs-6"></div>
</body>
</html>