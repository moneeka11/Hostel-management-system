<?php include '../setup/Database.php'; ?>
<link rel="stylesheet" href="../css/bootstrap.css">
<?php
   $id = $_GET['remove'];
   $q = "DELETE FROM `student_details` WHERE `student_details`.`name` = '$id'";
   if(mysqli_query($db,$q)){
      ?>
         <p class="text-danger">
            <h3><span class="text-success">Successfully removed students name.</span></h3><br>
            You will be redirected in <span id="counter">5</span> second(s).
         </p>
         <script type="text/javascript">
         function countdown() {
             var i = document.getElementById('counter');
             if (parseInt(i.innerHTML)<=0) {
                 location.href = '../student_detail.php';
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
