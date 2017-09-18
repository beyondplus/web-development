<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo SUBTITTLE;
		echo $title."<br>";
		echo "index page";
	?>
	<a href="about.php">About</a>
	<?php  print_r($languages); ?>
	<ul>
		<?php 
			for($i=0;$i<count($languages);$i++) {
		?>
			<li><?php echo $languages[$i]; ?></li>
		<?php
			}
		?>
	</ul>

	<?php echo text() ?>

	<?php echo sum('1','3') ?>
</body>
</html>