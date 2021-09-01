<?php 
include('dbconnection.php');
 session_start();
if (isset($_POST['submit']))
    {   
       $username=$_POST['username'];
        $password=$_POST['password'];    
        $result=mysqli_query($connect,"select *from user where username='$username' and password='$password'");
        $row=mysqli_fetch_object($result);
    
    if (count($row)>0) 
    {        
        $_SESSION['username'] = $_POST['username'];
       $_SESSION['status']='logedin';
        $_SESSION['userid'] = $row->id;
        
        $_SESSION['usertype'] = $row->usertype;
        if($row->usertype==1)
        {
            echo "<script>window.location='admin.php';</script>";
        }else if($row->usertype==0){
            echo "<script>window.location='user.php';</script>";
       
        }else{
             echo "<script>window.location='index.php';</script>";
        }
    } 
    else {
           echo "<script>alert('invalid username or password');</script>";
           echo "<script>window.location='index.php';</script>";
         }
}else if(isset( $_SESSION['status'])){
    if($_SESSION['status']=='logedin'){
        if($_SESSION['usertype']==1)
        {
            $_SESSION["login"] = "login";
            header('location:admin.php');
        }else if($_SESSION['usertype']==0){
            header('location:index.php');
        }else{
            header('location:index.php');
        }
    }
}
    ?>






















