<link rel="stylesheet" href="../css/bootstrap.css">
<?php include '../setup/Database.php'; ?>
<?php
   $name = $_POST['name'];
   $stream = $_POST['stream'];
   $roll = $_POST['roll'];
   $room = $_POST['room'];
   $number = $_POST['mobile'];
   $address = $_POST['address'];
   $g_number = $_POST['g_number'];
   $food = $_POST['food_pref'];
   $q = "INSERT INTO student_details (`name`,`stream`,`roll_no`,`room_no`,`phone_no`,`address`,`guardian_no`,`food_pref`)
         VALUES ('$name','$stream','$roll','$room','$number','$address','$g_number','$food')";
   if(mysqli_query($db,$q)){
      ?>
         <p class="text-danger">
            <h3><span class="text-success">Successfully Registerd</span></h3><br>
            You will be redirected in <span id="counter">5</span> second(s).
         </p>
         <script type="text/javascript">
         function countdown() {
             var i = document.getElementById('counter');
             if (parseInt(i.innerHTML)<=0) {
                 location.href = '../register.php';
             }
             i.innerHTML = parseInt(i.innerHTML)-1;
         }
         setInterval(function(){ countdown(); },800);
         </script>
      <?php
   }
   else{
      echo mysqli_error($db);
   }
?>
