<?php
include('./../db.php');
if(!isset($_SESSION['email'])){
	header("location: index.php");
}

if(isset($_GET['id'])){
	 $id = $_GET['id'];
}

if(isset($_POST['submit'])) {

	$title = $_POST['title'];	
	$description = $_POST['description'];	
	$featured_img = $_POST['featured_img'];	

	//Update Query
	$sql = "UPDATE posts SET title='$title', description='$description', featured_img='$featured_img' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}

// after update query, should write the select query
$sql = "SELECT id, title, description, featured_img FROM posts where id = $id";
$result = $conn->query($sql);

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
	<a href="http://localhost/newsfeed/admin/logout.php">Logout</a>
		<h2> Update Form</h2>
		<?php
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
    	?>
		<form action="" method="POST">
			<div class="row">
			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="name" name="title" value="<?php echo $row["title"]; ?>">
			  </div>
			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="description" name="description" value="<?php echo $row["description"]; ?>">
			  </div>
 			  <div class="col-xs-12">
			    <input type="text" class="form-control" placeholder="featured_img" name="featured_img" value="<?php echo $row["featured_img"]; ?>">
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
</body>
</html>