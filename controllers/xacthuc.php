
<head> <link rel="stylesheet" href="../resources\css\style.css"> </head>

    <?php 
    session_start();
     date_default_timezone_set('Asia/Ho_Chi_Minh');
   
    if(!isset($_SESSION['id'])){
      $_SESSION['id']=0;
    }
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

    //set time zone Viet Nam
    

  //Khai bao thu muc
     $rid='../resources/user_info/';
       
      $s='/';


            // Desired folder structure
           
      //$i++;
                   $date_style=date("Y-m-d").date("-h-i-sa");
 $create= $rid.$date_style;
        //
          

           // mkdir($create); 
              if (!file_exists($create)) {
                 $create= $rid.$date_style;
                  $directory = $rid.$date_style.$s;
                   mkdir($create, 0777, true);

                    
                     session_destroy();
                }

               

           
            else{

                  //$i++;
                  if(isset($_SESSION['id'])){
                    $_SESSION['id'] = $_SESSION['id']+1;
                  }
                  
                  $i = $_SESSION['id'];
                
                  $id="ID";
                     $create= $rid.$date_style.$id.$i;
                      $directory = $rid.$date_style.$id.$i.$s;
                        mkdir($create, 0777, true);
                  $target_dir = "$directory";
                }
 $target_dir = "$directory";
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
     //  header('location: ../index.php?case=error');;
        $uploadOk = 0;
     }
}
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
// if ($_FILES["fileToUpload"]["size"] > 102400) {
//    header('location: ../index.php?case=error');
//     $uploadOk = 0;
// }
// Allow certain file formats
 if($imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
 && $imageFileType != "GIF" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
     $email=$_POST['email'];
  $email=urlencode($email);
   header("location: ../index.php?email=$email");
    $uploadOk = 0;
     }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   $email=$_POST['email'];
  $email=urlencode($email);
   header("location: ../index.php?email=$email");

 
// if everything is ok, try to upload file
} else {
   // date_default_timezone_set('Asia/Ho_Chi_Minh');
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      ?>
      <?php
$content = $_POST["email"];
$fp = fopen("$directory Email.txt","w") or die("Unable to open file!");
fwrite($fp,$content);
fclose($fp);

?>
<?php 
//printf("<script>location.href='../index.php?case=a'</script>");
header('location: ../index.php?case=ok');?>
$_SESSION['tb']=$_POST['email'];


<?php
    //    $newname=date("Y-m-d") . date("-h-i-sa");
        ?>



<?php
      //  $oldname= basename( $_FILES["fileToUpload"]["name"]);
      //  rename("../resources/images/$oldname", "../resources/images/$newname.$imageFileType");

     
           
            // To create the nested structure, the $recursive parameter 
            // to mkdir() must be specified.

           // if (!is_dir ($directory)) { 
   
      //}

            // ...
            


    } else {
       $email=$_POST['email'];
  $email=urlencode($email);
   header("location: ../index.php?email=$email");

       //rmdir($rid.date("Y-m-d").date("-h-i-sa"));
     
     
    }
}
        
 } else {
  $email=$_POST['email'];
  $email=urlencode($email);
   header("location: ../index.php?email=$email");
    ?>

    
<?php
  //header('location: ../index.php?case=b');
 // header("location:../index.php?case=b");

   // rmdir($rid.date("Y-m-d").date("-h-i-sa"));
 
    ?>
   

<?php 
}
 
 ?>