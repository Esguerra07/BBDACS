<?php
include 'config/mydb.php';
session_start();

if(isset($_SESSION['username'])){
    header("Location:AdminDashboard.php");

}

$msg = '';
$admin="";

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $password = md5($password);
    $sql ="SELECT *FROM users WHERE username ='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $row =mysqli_fetch_assoc($result);
    if ($row['admin']==='1'){
        $_SESSION['username'] =$row['username'];
        $_SESSION['id']=$row['id'];
        
        header('location:AdminDashboard.php');
        exit();        
    }else{
    $msg = "<div class='alert alert-danger alert-dismissible'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Email or Password can not be empty!</div>";


  }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="User login">
    <title>Admin Login</title>
    <!-- Stylesheet -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style-log.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />

</head>
   <body>

<div class="mt-faq"></div>

<div class="container">
<div class="row">
    <div class="faq-head">
    <div class="col-12 text-center">
     <a href="index.php"></a><br><br>
       
       </div>
     </div>
   </div>
 </div>

 <div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
<!--  form login -->
   

       <div class="admin-box-login">

<form class="border border-light" action="" method="post"> 
    <h4 class="aim" style="text-align: center;font-size: 25px; font-weight: 900; font-family: sans-serif; color: white; letter-spacing: -2px;">Admin Login</span></h4> 
    <br>
    <p><!-- echo message--><?php echo $msg; ?></p>
    <label style="float: left;" class="mb-1"><p class="support-p"><strong>Username:</strong></p></label>    
    <input type="text" name="username"
    class="form-control mb-4" placeholder="Enter your email address.."><br>    

     <label style="float: left;" class="mb-1"><p class="support-p"><strong>Password:</strong></p></label>
     <input type="password" name="password"  class="form-control mb-4" placeholder="Password..."><br> 

<br><br>
<button class="btn admin-reg-btn btn-block" name="submit" type="submit"><strong>Login</strong></button>   
  
</form>
<br>  

    <br><br>
</div>
     
  </div>
    <div class="col-md-4"></div>
  </div>  
</div>
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>