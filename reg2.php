<?php
include_once("connection.php");


if (isset($_POST['submit1']))

    {  
    	
    	$firstname=$_POST['firstname'];
    	$lastname=$_POST['lastname'];
         $address=$_POST['address'];
    	
    	
    	$contactno=$_POST['contactno'];
     
        $nearby=$_POST['nearby'];
        $gcontactno=$_POST['gcontactno'];
        $faculty=$_POST['faculty'];
        $rollno=$_POST['rollno'];
        $username=$_POST['username'];
        $password=$_POST['password'];
          $datee=$_POST['date'];
        $sql="INSERT INTO user1(firstname,lastname,contactno,address,emailaddress,username,password) VALUES ('$firstname', '$lastname', '$contactno','$address','$emailaddress','$username','$password')";
      $result=mysqli_query($conn,$sql);
      if($result)
        {
    
        echo"<script>alert('Register successfully');</script>";
        echo"<script>window.location='index.php';</script>";
        }
        else
        {
      echo"<script>alert('Couldn't added');</script>";
      echo"<script>window.location='reg2.php';</script>";
          }
          }
?>