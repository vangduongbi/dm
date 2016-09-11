<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="controllers/upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" required>
		<input type="email" name="email" required>
		<input type="submit" name="submit">
	</form>

	<?php
		//$mess=(isset($_GET['case']) ? $_GET['case'] : null);
$me="";
	$me=(isset($_GET['case']) ? $_GET['case'] : null);
			if($me=="success")
				$me="thanh coong";
			if($me=="error")
				$me="error";

			if($me!=null){


	?>
	<div class="mess"><?php echo "$me";?></div>
	<?php
}
else{

}
?>
</body>
</html>