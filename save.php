<html>
<head>
<title>A BASIC HTML FORM</title>
</head>
<body>
<?php // require_once('submit.php'); ?>
<Form name ="form1" Method ="POST" Action ="submit.php index.php">
<Input Type = "text" value="<?php session_start(); $_SESSION["case"] = (isset($_GET['case']) ? $_GET['case'] : null); echo $_SESSION['case']; ?>" Name ="username">
<Input Type = "Submit" Name = "Submit1" Value = "Login">
<?php 
 $_SESSION["case"]=(isset($_GET['case']) ? $_GET['case'] : null);
			if( $_SESSION["case"]=="bi")
				 $_SESSION["case"]="Thanh cong";
			if( $_SESSION["case"]=="error")
				 $_SESSION["case"]=" Guess";
			?>

			<div class="mess alert danger-alert"><?php echo $_SESSION["case"];?></div>
</FORM>
</body>
</html>

 