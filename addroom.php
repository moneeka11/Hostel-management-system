<?php
include"admin.php";
?>







<?php
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "hostelmanagment");

        if (isset($_POST["submit1"])) {
            require_once 'dbconnection.php';
         


            if (mysqli_query($link, "insert into room values('','$_POST[room]')") == true)
            {
                echo"<script>alert('New room added  successfully  ');</script>";
                echo"<script>window.location='room.php'</script>";
            }else{
                echo"<script>alert('couldn't add');</script>";
    echo"<script>window.location='addroom.php'</script>";
            }
        }
        ?> 















<style>



.box{
    width: 600px;
    border: 2px solid gray;
    padding: 25px;
    margin: 25px;
    margin-left: 200px;
    
}

</style>

  <form action=" " method="post">
<div class="box">
            <h3>Add new room</h3>
 <hr>


<div class="room">
                <label>Roomname*</label><br>
                <input type="text"  size="50" required name="room" placeholder=room>
                <br>
                <br> 



</div>
          <input type="submit" value="Submit" name="submit1">
    </div>
    </form>
</body>
</html> 
