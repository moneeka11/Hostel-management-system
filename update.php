<?php
include('dbconnection.php');
        if (isset($_POST["submit1"]))
{
     
$firstname=$_POST['firstname'];

$lastname=$_POST['lastname'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$id=$_POST['id'];

$iquery = "UPDATE  user SET contactno='$contactno',address='$address',firstname='$firstname',lastname='$lastname' WHERE id = $id" ;

  $query=mysqli_query($connect,$iquery) or die(mysqli_error($connect));
  if($query==1)
  {
    
      
        // if(mysqli_query($connect,$iquery)==true)
        // {
            
                echo"<script>alert('successfull ');</script>";
                include 'user.php';

               
              
        
}
}
?>