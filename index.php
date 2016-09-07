<html>
<head>
	<title>Xác thực</title>
<meta charset="utf-8">
<link rel="stylesheet" href="resources\css\style.css">
<link rel="stylesheet" href="resources\css\reset.css">
<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
	function reset() {

		<?php 
		session_start() ;
		session_unset(); 

// destroy the session 
session_destroy();
?>

    }


</script>
</head>
<body>


	<div class="container">
		<div class="new">
		
			
		
			<div class="form">
			<form action="controllers/xacthuc.php" method="POST" enctype="multipart/form-data" id="s">
<!-- 
				Name:<input type="text" name="name" id="name">
				Email: <input type="text" name="email" id="email"> -->
				<label for="">
		   			 <p>Custom Upload:</p>
				</label>

		<input id="file" type="file" class="custom-file-input" name="fileToUpload"\>

		<div class="g-recaptcha" data-sitekey="6LcQVCkTAAAAAK5P5cdhxqNpUfZYgHiK2_bPP5Oo"> <!-- data-type co the thay bang audio --></div>
			<input type="submit" id="myBtn"  name="submit" class="btn btn-success">
		
		

			</form>
			</div><!-- end div form -->
			
			<?php 
				session_start();
				$_SESSION["case"] = (isset($_GET['case']) ? $_GET['case'] : null);
					if($_SESSION['case']=="b")

					{

						$_SESSION['case']="Bạn chưa xác thực mà???";
					}
					if($_SESSION['case']=="a")
					{

						$_SESSION['case']="File cuả bạn đã được upload thành công trong thư mục resources/images/";
					}
					if($_SESSION['case']=="error")
					{

						$_SESSION['case']="Error!!! Please check your file again, maybe too lage, or not support your type file, just png jpg gjf jpeg";
					}
				if($_SESSION["case"]!=null)
				{?>

					<div class="modal-content">
						<div class="modal-header">
				    		

				      		<h2>Infomation</h2>

				      	 </div>
				    	<div class="modal-body">
				    		<p><?php echo $_SESSION["case"]; 

				    			session_destroy();
				  				//   header("relocation:index.php");
				    
				    		?>.</p>
				  		</div>
 						 <div class="modal-footer">
      						 <a href="index.php" class="close">X</a>
   						 </div>
   					 </div>

				<?php
				}
				else
					{
					
					}
					?>

			
		</div> <!--end div new-->
	

				

	</div><!--end container-->


		


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





      
   







</body>
</html>