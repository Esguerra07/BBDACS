<?php 
 session_start();
 include('config/mydb.php');
 if (!isset($_SESSION['email'])) {
   # code...
  header('Location: login-user.php');
  die();
   }

?>
<?php 
if (isset($_SESSION['email'])) {
  # code...
  $email = $_SESSION['email'];
  $sql = $conn->query("SELECT username FROM user WHERE email = '$email' limit 1");
  if ($sql->num_rows != 0) {
    # code...
    while ($rows = $sql->fetch_assoc()) {
      # code...
      $username = $rows['username'];
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="announcementfinal.css">

  <title>Announcement</title>
</head>

<body style=" background-color:rgba(0, 0, 0, 0.815);">
  <header>
    <div class="logo">
      <img src ="logo1.png">
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="Home.php" style="font-weight: 900; text-decoration: none;">Home</a></li>
      <li><a href="News.php" style="font-weight: 900; text-decoration: none;">News</a></li>
      <li><a href="#" style="font-weight: 900; text-decoration: none;">Announcement</a></li>
      <li><a href="Hazard.php" style="font-weight: 900; text-decoration: none;">Hazard & Hotline</a></li>
      <li><a href="About.php"style="font-weight: 900; text-decoration: none;">About Us</a></li>
      <!-- <li><a href="#">Sign Up</a></li>
      <li><a href="#">Login</a></li> -->
      <li>
        <a href="#" style="font-weight: 900; text-decoration: none;">
          <i class="fa fa-user"></i>
          <?php echo $username; ?>
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
        <ul>
          <li><a href="logout.php" style="font-weight: 700; text-decoration: none;" class="logout">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="announcement.jpg" alt="First slide">
                    </div>
                   
                    <?php include_once 'config/mydb.php';
                            $sql = "SELECT * FROM announcement";
                            $result = mysqli_query($conn,$sql);

                              if( mysqli_num_rows($result) > 0){
                                  while($row = mysqli_fetch_assoc($result)){ ?>
                                   <div class="carousel-item">
                                  <img src="<?php echo 'AnnouncementFiles/' .$row['images']; ?>" alt="" class="d-block w-100">                                                                                             
                                  </div>
                                  <?php
                                  }
                              } 
                              else{ ?>
                                  <h2 style="color:#e08b6c; font-weight: 900;">
                                        <td coldspan="6">No Result</td>
                                  </h2>
                              <?php }
                          ?>
                      
                    
                  </div>
                  <div class="controls">
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  </div>
                </div>


  <main class="main-content">
    <section class="left-section">
        <div class="left-content">
            <div class="post-preview">
                <center>
                <h2 class="section-title">TIPS ON THE FOLLOWING HAZARD</h2>
                </center>
                <br>
                
                  <video width="100%" height="100%" poster ="hazzard/cyclone.jpg" controls="">
                        <source src="Videos/Cyclone.mp4" type ="video/mp4">
                      </video>
                      <video width="100%" height="100%" poster ="hazzard/droughtbbdacs.jpg" controls="">
                        <source src="Videos/Drought.mp4" type ="video/mp4">
                      </video>
                      <video width="100%" height="100%" poster ="hazzard/eaarthquakebbdacs.jpg" controls="">
                        <source src="Videos/Earthquake.mp4" type ="video/mp4">
                      </video>
                      <video width="100%" height="100%" poster ="hazzard/floodbbdacs.jpg" controls="">
                        <source src="Videos/Flood.mp4" type ="video/mp4">
                      </video>                
                      <video width="100%" height="100%" poster ="hazzard/heatblastbbdacs.jpg" controls="">
                        <source src="Videos/Heat wave.mp4" type ="video/mp4">
                      </video>
                      <video width="100%" height="100%" poster ="hazzard/insektobbdacs.jpg" controls="">
                        <source src="Videos/Insect Infestation.mp4" type ="video/mp4">
                      </video>
                      <video width="100%" height="100%" poster ="hazzard/paannddemicsbbdacs.jpg" controls="">
                        <source src="Videos/Pandemic.mp4" type ="video/mp4">
                      </video>
                      <video width="100%" height="100%" poster ="hazzard/stormbbdacs.jpg" controls="">
                        <source src="Videos/Storm surge.mp4" type ="video/mp4">
                      </video>
                      <video width="100%" height="100%" poster ="hazzard/tornadobbdacs.jpg" controls="">
                        <source src="Videos/Tornado.mp4" type ="video/mp4">
                      </video>
                      <video width="100%" height="100%" poster ="hazzard/urbanfirebbdacs.jpg" controls="">
                        <source src="Videos/urban Fire.mp4" type ="video/mp4">
                      </video>
                      <video width="100%" height="100%" poster ="hazzard/wildfirebbdacs.jpg" controls="">
                        <source src="Videos/Wild fire.mp4" type ="video/mp4">
                      </video>
          </div>        
        </section>
    <section class="right-section">
        <div class="right-main-content">
            <div class="sidebar">
        
                <div class="section topics">
                  <center><h2 class="section-title">GUIDES</h2></center>
                  <?php include_once 'config/mydb.php';
                            $sql = "SELECT * FROM guides";
                            $result = mysqli_query($conn,$sql);

                              if( mysqli_num_rows($result) > 0){
                                  while($row = mysqli_fetch_assoc($result)){ ?>
                                      <img src="<?php echo 'GuideFiles/' .$row['image']; ?>" alt="image slide" class="d-block ">                                                                                             
                    
                                  <?php
                                  }
                              } 
                              else{ ?>
                                  <h2 style="color:#e08b6c; font-weight: 900;">
                                        <td coldspan="6">No Result</td>
                                  </h2>
                              <?php }
                          ?>
                </div>
                
        
              </div>

            </div>     
            </section>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>CONTACT</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;Phone no: 09476862540</a></li>
                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Call: 812.288.1513</a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Email:bbdacs2021@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;Address: Bulakan,Bulacan</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>WHAT WE DO?</h4>
                <ul>
                    <li><a href="#">We Announce News</a></li>
                    <li><a href="#">Giving a Tips in Calamities</a></li>
                    <li><a href="#">To Inform Everyone</a></li>
                    <li><a href="#">Provide Guidance</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>LEARN MORE</h4>
                <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#">Refferal Program</a></li>
                    <li><a href="#">Resseller Program</a></li>
                    <li><a href="#">Folder Sharing FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>FOLLOW US</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/BBDACS2021/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="https://twitter.com/bbdacs_bulakan?s=09&fbclid=IwAR1in9oJrr6D39Z-JOgRoI766OP8puD9HfEonMczhXSXhbZJTtCqrqPhqTc" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="https://www.instagram.com/bbdacs_bulakan/?fbclid=IwAR0vbSWXaw8S1qN7QxvyLAGrjn72yzPik8UwLNLFnlRnKYFjf9MY1ypmPB8" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram fa-lg" ></i></a>                      
                </div>
            </div>

            <div class="footer-bottom">
                &copy; Cucucawcaw.com | Designed by Cucucawcaw
           </div>
        </div>
    </div>
</footer>

  <!-- Page Wrapper -->
  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Custom Script -->
  <script src="sd/scripts.js"></script>

</body>

</html>