<?php

include('db.php');

if(isset($_POST['submit'])) {
	// update query
		$id = $_GET['id'];
		$file_name = 'default.jpg';
		$title = $_POST['title'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$featured = $_POST['featured'];
		// check condition
		if(isset($featured)) {
			$check = 1;
		} else {
			$check = 0;
		}
		// File upload statement
		if ($_FILES['preview_image']['type'] == 'image/jpg' || $_FILES['preview_image']['type'] == 'image/jpeg' || $_FILES['preview_image']['type'] == 'image/png') {
			// print_r($_FILES['preview_image'])
	        $name = $_FILES['preview_image']['name'];
	        // image extension
	        $ext = pathinfo($name, PATHINFO_EXTENSION);
	        // upload path
	        $hash_image_name = md5(time());
	        $file_name = $hash_image_name.'.'.$ext;
	        $target_file = "uploads/".basename($hash_image_name).'.'.$ext;
	        // temp folder  to upload folder
	        move_uploaded_file($_FILES['preview_image']['tmp_name'], $target_file );
	    }
	    // insert query
		// $sql = "INSERT INTO ebook (title, description, preview_image, price, featured)
		// VALUES ( '$title'  , '$description', '$file_name','$price','$check')";
		if($file_name == 'default.jpg') {
			$sql = "UPDATE ebook SET title='$title',description='$description',price='$price', featured = '$check' WHERE id='$id'";	
		} else {
			$sql = "UPDATE ebook SET title='$title',description='$description',price='$price', featured = '$check', preview_image = '$file_name' WHERE id='$id'";	
		}
	    

		$resultUpdate = $conn->query($sql);
		if($resultUpdate) {
		?>
			<div class="alert alert-success">
			  <strong>Success!</strong> Indicates a successful or positive action.
			</div>
		<?php
		}
}

if(isInteger($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT id, title, description,preview_image,price,featured FROM ebook where id = '14'";
	$result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	if ($result->num_rows > 0) {
	    // output data of each row
	    if($row = $result->fetch_assoc()) {
?>
<div class="container">
		<form action="" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="Title">Title</label>
		    <input type="text" class="form-control" name="title" value="<?php echo $row['title'] ?>">
		  </div>
		  <div class="form-group">
		    <label for="Email Address">Description</label>
		    <textarea class="form-control"  name="description">
		    	<?php echo $row['description'] ?>
		    </textarea>
		  </div>
		  <div class="form-group">
		    <label for="Price">Price</label>
		    <input type="number" class="form-control"  name="price" value="<?php echo $row['price'] ?>">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputFile">Preview_image	</label>
		    <input type="file" id="media" name="preview_image">
		    <p class="help-block">Example block-level help text here.</p>
		  </div>
		  <div class="checkbox">
		    <label>
		    <?php if($row['featured'] == 1) {
		    ?>
		      <input type="checkbox" name="featured" checked> Featured
		    <?php
		    } else {
		    ?>
		    	<input type="checkbox" name="featured" > Featured
		    <?php

		    }
		    ?>
		    </label>
		  </div>
		  <input type="submit" class="btn btn-default" value="Submit" name="submit">
		</form>
	</div>

<?php
	    }
	} else {
	    echo "0 results";
	}
?>
	

</body>
</html>	