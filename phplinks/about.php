<?php require('constant.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo SUBTITTLE;
		echo $title;
		echo "about page";
	?>
	<a href="index.php">Home</a>

	<?php  print_r($languages); ?>
	<ul>
		<?php 
			foreach ($languages as $value) {
			 	
		?>
			<li><?php echo $value; ?></li>
		<?php
			}
		?>
	</ul>

	<?php echo sum(10000, 3828423943); ?>
</body>
</html>