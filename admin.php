<?php

session_start();
if ($_SESSION['status'] != 'logedin') {
    header('location:login.php');
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="css/all.css">
   <title>Hostel Management System</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark mb-4 custom-navbar">
      <a class="navbar-brand" href="home.php">Hostel management system</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsed">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsed">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"><i class="fas fa-users"></i></a>
 -->







             <!--  <div class="dropdown-menu">



                <a class="dropdown-item" href="images/<?php echo $_SESSION['user']; ?>.jpg"><i class="fas fa-user"></i> <?php echo $_SESSION['user']; ?></a>yau line ma session tanyeko milyeko chena 
                <a class="dropdown-item" href="functions/logout.php"><i class="fas fa-lock"></i> Logout</a>
              </div>
            </li> -->
          <li class="nav-item">
             <center><a class="nav-link" href="logout.php"> logout</a></center>
           </li> 
           <li class="nav-item">
             <center><a class="nav-link" href="fprocess.php"> student feedback</a></center>
           </li>     
         <li class="nav-item">
             <center><a class="nav-link" href="registration.php">registered students</a></center>
           </li>
           <li class="nav-item">
             <center><a class="nav-link" href="room.php">Room</a></center>
           </li>
            <li class="nav-item">
             <center><a class="nav-link" href="student.php"> students detail</a></center>
           </li>
        </ul>
      </div>
    </nav>
	


<?php
include"footer.php"
?>