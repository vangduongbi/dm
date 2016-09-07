
<head> <link rel="stylesheet" href="../resources\css\style.css"> </head>

    <?php 
        require_once "recaptchalib.php";
            // your secret key
                    $secret = "6LcQVCkTAAAAAM_dCKD3I1SaddnyQM8InzkZOkeC";
             
            // empty response
            $response = null;
             
            // check secret key
            $reCaptcha = new ReCaptcha($secret);
    ?>

    <?php  
// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

?>


<?php
  if ($response != null && $response->success) {
   // echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";



  
$target_dir = "../resources/images/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
?>
<?php

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

   
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {?>

        <?php
        $uploadOk = 1;
    } else {
       header('location: ../index.php?case=error');;
        $uploadOk = 0;
    }
}
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
if ($_FILES["fileToUpload"]["size"] > 100000) {
   header('location: ../index.php?case=error');
    $uploadOk = 0;
}
// Allow certain file formats
 if($imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
 && $imageFileType != "GIF" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
     header('location: ../index.php?case=error');
    $uploadOk = 0;
     }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header('location: ../index.php?case=error');;
// if everything is ok, try to upload file
} else {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      ?>




   


<?php 
//printf("<script>location.href='../index.php?case=a'</script>");

header('location: ../index.php?case=a');?>
<?php
        $newname=date("Y-m-d") . date("-h-i-sa");

        ?>



<?php
        $oldname= basename( $_FILES["fileToUpload"]["name"]);
        rename("../resources/images/$oldname", "../resources/images/$newname.$imageFileType");

    } else {
        header('location: ../index.php?case=error');
    }
}

        


  } else {

    ?>

    
<?php

  //header('location: ../index.php?case=b');

  header("location:../index.php?case=b");



    ?>
   

<?php 
  }



  foreach ($_POST as $key => $value) {
   // echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
?>



