<?php 
  require_once 'config/mydb.php';
  session_start();
  if(!isset($_SESSION['id'])){
    header('location: login-admin.php');
    exit();
  }
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body style="background-color: rgba(226, 223, 223, 0.842);">
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-menu'></i>
      <div class="logo">
        <img src ="logo1.png">
      </div>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-home'></i>
            <span class="link_name">Home</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Home</a></li>
          <li><a href="NewUpdateAdmin.php">News Updates</a></li>
          <li><a href="BaranggayAdmin.php">Baranggay</a></li> 
          <li><a href="HomeAdmin.php">Recent Post</a></li>
          <li><a href="TopicsAdmin.php">Topics</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-news'></i>
            <span class="link_name">News</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">News</a></li>
          <li><a href="LeftSideAdmin.php">Left Side</a></li>
          <li><a href="RightSideAdmin.php">Right Side</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-megaphone'></i>
            <span class="link_name">Announcement</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Announcement</a></li>
          <li><a href="AnnouncementAdmin.php">Carousel</a></li>
          <li><a href="GuideAdmin.php">Guides</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            <span class="link_name">Hazard</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Hazard</a></li>
          <li><a href="HazardAdmin.php">Hazard</a></li>
          <li><a href="HotlineAdmin.php">Hotline</a></li>
        </ul>
      </li>
      <li>
        <a href="AboutAdmin.php">
          <i class="fa fa-question-circle" aria-hidden="true"></i>
          <span class="link_name">About Us</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="AboutAdmin.php">About Us</a></li>
        </ul>
      </li>
      <li>
        <a href="UserAdmin.php">
          <i class='bx bxs-user'></i>
          <span class="link_name">User</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="UserAdmin.php">User</a></li>
        </ul>
      </li>
      <li>
        <a href="AlertAdmin.php">
          <i class='bx bxs-bell-ring'></i>
          <span class="link_name">Alert</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="AdminAlert.php">Alert</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
      <a href="logout-admin.php" style="color: inherit;"><i class='bx bx-log-out' id="log_out" ></i></a>
      </div>
      <div class="name-job">
        <div class="profile_name"><?php echo $_SESSION['username'];?></div>
        <div class="job">Administration</div>
      </div>
      
    </div>
  </li>
</ul>
  </div>

  <div class="admin-content" >

    <br>
    <br>
    <div class="content">
    <div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h2 mb-0 text-danger font-weight-bold">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                $conn = mysqli_connect("localhost","root","","user-verification");
                $squery =" SELECT * FROM user WHERE Email_status=1";
                $squery_run=mysqli_query($conn,$squery);

                $row = mysqli_num_rows($squery_run);

                echo'<h2>'.$row.'</h2>';
              ?>
              
              </div>

              </div>
            </div>
            <div class="col-auto">
            <i class='bx fa-2x bxs-user' style="color:gray;"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Announcement</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              
              <?php
                $conn = mysqli_connect("localhost","root","","user-verification");
                $squery =" SELECT id FROM announcement ORDER BY id";
                $squery_run=mysqli_query($conn,$squery);

                $row = mysqli_num_rows($squery_run);

                echo'<h2>'.$row.'</h2>';
              ?>
              </div>
            </div>
            <div class="col-auto">
              <i class='bx bxs-megaphone fa-2x' style="color:gray;"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total News Updates</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                  <?php
                    $conn = mysqli_connect("localhost","root","","user-verification");
                    $squery =" SELECT id FROM news_update ORDER BY id";
                    $squery_run=mysqli_query($conn,$squery);

                    $row = mysqli_num_rows($squery_run);

                    echo'<h2>'.$row.'</h2>';
                  ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x " style="color:gray;"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total News</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                $conn = mysqli_connect("localhost","root","","user-verification");
                $squery =" SELECT id FROM leftsidenews ORDER BY id";
                $squery_run=mysqli_query($conn,$squery);

                $row = mysqli_num_rows($squery_run);



                $squery =" SELECT id FROM rightsidenews ORDER BY id";
                $squery_run=mysqli_query($conn,$squery);

                $row1 = mysqli_num_rows($squery_run);
                $row2=$row+$row1;
                echo'<h2>'.$row2.'</h2>';
              ?>
              </div>
            </div>
            <div class="col-auto">
            <i class='bx bxs-news fa-2x' style="color:gray;"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        
        </div>
        <form method="POST" action="backup.php">
          <button type="submit" name="delete_btn" style="margin-left:1%;" class="btn btn-success"><i class='bx bxs-data'></i></i>&nbsp;Database Backup</button>
        </form>




        <form class="form1" method="POST" action="restore/restore.php">
          <button type="submit" name="delete_btn" style="margin-left:1%;margin-top:2%;" class="btn btn-danger"><i class='bx bx-exit'></i></i>&nbsp;Database Restore</button>
        </form>

</div>


<div class="footer" style="margin-top:33%;">

<div class="footer-bottom" style="text-align:center;font-size: 13px;
  font-family: 'Lora', serif;
  color: gray;
  height: 35px;
  width: 100%;
  text-align: center;
  position: relative;
  bottom: 0px;
  left: 0px;
  padding-top: 5px;
">
                &copy; Cucucawcaw.com | Designed by Cucucawcaw
           </div>
    
</div>

<script>
    $(document).ready(function(){
        $(".btn-success").click(function(){
          Swal.fire(
          'Successful!',
          'Your Database File has been downloaded!',
          'success'
        )
      
        });
          });
</script>


  <script>

  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;
   arrowParent.classList.toggle("showMenu");
    });
  }

  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>


    
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
