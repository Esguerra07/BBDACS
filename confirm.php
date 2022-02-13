<?php
function redirect(){
  header('Location: register.php');
  exit();
}
$msg = '';
include_once('config/mydb.php');
$email = mysqli_real_escape_string($conn, $_GET['email']);
$final_token = mysqli_real_escape_string($conn, $_GET['token']);


if (!isset($_GET['email']) || !isset($_GET['token'])) {
  # code...
  redirect();
}
else{
  $query = $conn->query("SELECT id FROM user WHERE email = '$email' AND token='' AND Email_status=1");
  if ($query->num_rows > 0) {
    # code...
    $msg = "<div class='alert alert-danger alert-dismissible'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your email has already been verified</div>";
  }
  else{
    $sql = $conn->query("SELECT id FROM user WHERE email = '$email' AND token = '$final_token' AND Email_status=0");
    if ($sql->num_rows > 0) {
      $conn->query("UPDATE user SET Email_status=1, token='' WHERE email='$email'");
    # code...
    $msg = "<div class='alert alert-success alert-dismissible'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your email has been verified!You can now log in</div>";
  }
  else
    redirect();
  }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Email Verification</title>  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="style-confirm.css">
    </head>

<body class="bg-gray"> 
    <section class="bg-gray section-padding-70 mt-20 jarallax">
         <div class="container justify-content-center">
    <div class="row">
        <div class="col-md-3"> 
         </div>
          <div class="col-md-6">
    <div class="nl-content text-center">      
             <br>
             <br>
                        <!-- Default form register -->
<form class="text-center  p-4" action="#">
   <p class="h6 mb-4"><!---echo message here--><?php echo $msg; ?></p>
   <h5 style="margin-top: 20px; font-size: 25px; font-weight: 900; font-family: sans-serif; color: white; letter-spacing: -2px;"> Verification of Email Address</h5>
    <!-- Sign up button -->
    <a href="login-user.php"><button class="btn signin-btn btn-block my-4" style="background:rgb(109, 16, 4); text-decoration:none; color:white;font-size:18px; font-weight: 700;" type="button">LOGIN</button></a>

      <!-- Register -->

</form>
    </div>
         </div>
          <div class="col-md-3"></div>
    </div>           
   </div> 
    </section>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>