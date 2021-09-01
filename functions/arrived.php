<?php include '../setup/Database.php'; ?>
<link rel="stylesheet" href="../css/bootstrap.css">
<?php
   $id = $_GET['arrived'];
   $q = "DELETE FROM `outing_records` WHERE `outing_records`.`s_name` = '$id'";
   if(mysqli_query($db,$q)){
      ?>
         <p class="text-danger">
            <h3><span class="text-success">Successfully updated the arrived students name.</span></h3><br>
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
