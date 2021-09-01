<?php
include "user.php";
?>



<style>
.box{
    width: 50%;
    border: 2px solid gray;
    padding: 25px;
    margin: 25px;
    margin-left: 20px;
    
}
</style>

<?php
$link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "hostelmanagment");

  $id = $_GET['id'];

  $get = mysqli_query($link,"SELECT * FROM user WHERE id='$id' ");
  $get2 = mysqli_fetch_assoc($get);
  $username = $get2['username'];
  
    $contactno = $get2['contactno'];
    $firstname = $get2['firstname'];
    $lastname = $get2['lastname'];
     $address = $get2['address'];
      // $email = $get2['email'];



?>

<html>
<center>
<body>
<br/>
<br/>
<br/>
<br/>
HELLO <b><?php echo $username;  ?></b><br>

<h4 style="color: orange">Your detail </h4>
<hr>

<div class="det" style="" align="left">
	<div class="box round first">
<h4>First name:    <?php echo $firstname;  ?></h4><br>
<h4>Lastname:       <?php echo $lastname;  ?></h4><br>
<h4>Contactno:      <?php echo $contactno;  ?></h4><br>
<h4>Address:        <?php echo $address;  ?></h4><br> 
<!--  <a href="edit1.php?id=<?php echo $_SESSION['userid'] ?>">edit</a>  -->



</div>
</div>







</body>
</center>
</html>