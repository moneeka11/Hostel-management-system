<?php
include "user.php";
?>

<?php
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "hostelmanagment");

        if (isset($_POST["submit1"])) {
            require_once 'dbconnection.php';
            

if(mysqli_query($link,"insert into feedback values('','$_POST[username]','$_POST[datee]','$_POST[feedback]')")==true)
 {
            
            
                echo"<script>alert('added successfully');</script>";
                echo"<script>window.location='user.php'</script>";
            }else{
                echo"<script>alert('coulden't added');</script>";
        echo"<script>window.location='feedback.php'</script>";
            }
        }
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



<form action="" method="post">
<div class="box" align="center">
           
  

  
   
      
            <input type="hidden" readonly size="50" required name= "username"  autocomplete="off" value="<?php echo $username;  ?>"  >
             
  <div class="feedback">
      <label for="Feedback">Feedback</label>


     <textarea id="Feedback" name="feedback" placeholder="Feedback" style="height:200px; width: 200px"></textarea>
    <br>
  </div>

  <input type="hidden" name="datee" readonly   value="<?php echo date('Y-m-d'); ?>">


 <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
                    </tr>


    </form>
