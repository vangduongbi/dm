

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
  

 var email = document.getElementById("email");

email.addEventListener("keyup", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("Email! Error format");
  } else {
    email.setCustomValidity("");
  }
});

</script>


</head>
<body>

  <div class="wrapper">
    <div class="nav">
       <ul class="nav nav-tabs pull-right" role="tablist">
        <li><a href="#">Home</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Infor</a></li>
        <li><a href="#">News</a></li>
      
        <li><a href="#">About</a></li>
           <li><a href="#">Language</a></li>
      </ul>
    </div>

   <div class="picture text-center">
<div id="myCarousel" class="carousel slide pull-right" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="black" src="resources/images/1.jpg" alt="1">
        <div class="carousel-caption">
          <h3></h3>
          <h4></h4>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="resources/images/2.jpg" alt="2">
        <div class="carousel-caption">
          <h3></h3>
          <h4></h4>
        <p>  </p>
        </div>
      </div>
    
      <div class="item">
        <img class="black" src="resources/images/3.1.jpg" alt="3">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
                  </div>
      </div>
    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div><!---end container-->

</div><!--end picture-->


    <div class="form-container">
    
      
    
      <div class="form text-center">
      <form action="controllers/xacthuc.php" method="POST" enctype="multipart/form-data" id="s">
<!-- 
        Name:<input type="text" name="name" id="name">
        Email: <input type="text" name="email" id="email"> -->
        <label for="">
             <p  class="text-center">Custom Upload:</p>
        </label>

    <input id="file" type="file" class="custom-file-input" name="fileToUpload" required>
    <div>
    <label for="email" class="pull-left" style="line-height:65px">Your Email: </label><input id="email" type="email" name="email" value="<?php session_start(); $_SESSION["email"] = (isset($_GET['email']) ? $_GET['email'] : null);  echo $_SESSION['email']; ?>"	required></div>
    <div class="g-recaptcha" data-sitekey="6LcQVCkTAAAAAK5P5cdhxqNpUfZYgHiK2_bPP5Oo" > <!-- data-type co the thay bang audio --></div>
      <input type="submit" id="myBtn"  name="submit" class="btn btn-success">
     <?php 
     

     $me="";
	$me=(isset($_GET['case']) ? $_GET['case'] : null);
			if($me=="ok")

			{
				$me="File của bạn đã đc lưu trong thư mục resources/userinfo";
				?>


		<div class="alert alert-success fade in" style="margin-top:40px">
				<strong>Success:</strong>
				 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>


				<?php 
			
					 echo "$me";?>
						


		</div>
		<?php } ?>

<?php

$me2 = (isset($_GET['email']) ? $_GET['email'] : null);
// $email = $_POST["email"];
    // check if e-mail address is well-formed
 //   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //    $emailErr = "Invalid email format"; 
 //     echo $emailErr;
 //   }
			if($me2==" " || $me2 !=null)

			{
				$me="Bạn chưa xác nhận hoặc file input ko hợp lệ! Lưu ý chỉ hỗ trợ jpf jpeg gjf png";?>

		<div class="alert alert-danger fade in" style="margin-top:40px">
				<strong>Error</strong>
				 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

<?php
			echo "$me";?>

			</div>
			<?php
			}


?>

<?php




?>
      
    

      </form>

      <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

      <script>
    $('#s').validate();


     jQuery.validator.addMethod("email", function(value, element) {
    return this.optional( element ) || ( /^[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}$/.test( value ) && /^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/.test( value ) );
}, 'Please enter valid email address.');


    </script>
      </div><!-- end div form -->
      

    </div> <!--end div new-->
  

       

  <!--end container-->


</div><!--  end wrapper -->
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