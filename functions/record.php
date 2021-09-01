<link rel="stylesheet" href="../css/bootstrap.css">
<?php include '../setup/Database.php'; ?>
<?php
   $name = $_POST['o_name'];
   $number = $_POST['o_number'];
   $out_time = $_POST['out_time'];
   $in_time = $_POST['in_time'];
   $purpose = $_POST['note'];
   $q = "INSERT INTO `outing_records` (`s_name`, `s_phone`, `time_in`, `time_out`, `purpose`) VALUES ('$name', '$number', '$in_time', '$out_time', '$purpose')";
   if(mysqli_query($db,$q)){
      ?>
         <p class="text-danger">
            <h3><span class="text-success">Successfully Recorded</span></h3><br>
            You will be redirected in <span id="counter">5</span> second(s).
         </p>
         <script type="text/javascript">
         function countdown() {
             var i = document.getElementById('counter');
             if (parseInt(i.innerHTML)<=0) {
                 location.href = '../record.php';
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
