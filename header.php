
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
      <a class="navbar-brand" href="homepage.php">Hostel management system</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsed">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsed">
        <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"><i class="fas fa-users"></i></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="images/<?php echo $_SESSION['user']; ?>.jpg"><i class="fas fa-user"></i> <?php echo $_SESSION['user']; ?></a>
                <a class="dropdown-item" href="functions/logout.php"><i class="fas fa-lock"></i> Logout</a>
              </div>
            </li> -->
             <li class="nav-item">
              <center><a class="nav-link" href="login.php">Login</a></center>
            </li>
           <!--  <li class="nav-item">
               <center><a class="nav-link" href="register.php">register</a></center>
           </li> -->
          <!--  <li class="nav-item">
             <center><a class="nav-link" href="student_detail.php">registered students</a></center>
           </li> -->
            <li class="nav-item">
               <center><a class="nav-link" href="about.php">about</a></center>
            </li>
        </ul>
      </div>
    </nav>
