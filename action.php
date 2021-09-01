<?php
include('dbconnection.php');
        if (isset($_POST["submit1"]))
{
     
$username=$_POST['username'];

$faculty=$_POST['faculty'];
$rollno=$_POST['rollno'];
$room=$_POST['room'];
$id=$_POST['id'];

$iquery = "UPDATE  user SET room='$room',username='$username',faculty='$faculty',rollno='$rollno' WHERE id = $id" ;

  $query=mysqli_query($connect,$iquery) or die(mysqli_error($connect));
  if($query==1)
  {
    
      
        // if(mysqli_query($connect,$iquery)==true)
        // {
            
                echo"<script>alert('successfull ');</script>";
                include 'student.php';

               
              
        
}
}
?>