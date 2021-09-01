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
   $id = $get2['id'];
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
<form action="update.php">
<div class="det" style="" align="left">
	<div class="box round first">
   <input type="hidden" name="id"  readonly value="<?php echo $id;  ?>"><br>
  <input type="hidden" name="firstname"  readonly value="<?php echo $firstname;  ?>"><br>
 <input type="hidden" name="lastname"  readonly value="<?php echo $lastname;  ?>"><br>
 <input type="tel" name="contactno"   value="<?php echo $contactno;  ?>"><br>
 <input type="text" name="address" value="<?php echo $address;  ?>"><br>


<tr>
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="update"></td>
                         
                    </tr>
</div>
</div>
</form>






</body>
</center>
</html>