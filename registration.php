<?php
include"admin.php";
?>


<?php
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "hostelmanagment");

        if (isset($_POST["submit1"])) {
            require_once 'dbconnection.php';
         


            if (mysqli_query($link, "insert into user values('','','$_POST[firstname]','$_POST[lastname]','$_POST[address]','$_POST[contactno]','$_POST[nearby]','$_POST[gcontactno]','$_POST[faculty]','$_POST[rollno]','$_POST[username]','$_POST[password]','$_POST[datee]','$_POST[room]')") == true)
            {
                echo"<script>alert('Register  successfully thankyou for registration with us ');</script>";
                echo"<script>window.location='admin.php'</script>";
            }else{
                echo"<script>alert('couldn't register');</script>";
    echo"<script>window.location='registration.php'</script>";
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
            <h3>Add new student</h3>
            <hr>
  <div  class="fname">
        <label>Firstname*</label><br>
        <input type="text" name="firstname" size="50" required name="firstname" placeholder="firstname"><br><br>
    </div>
    <div class="lname">
        <label>Lastname*</label><br>
            <input type="text" name="lastname" size="50" required name="lastname" placeholder="lastname"><br>
                <br>
                <br>
    </div>
     <div class="address">
        <label>address*</label><br>
            <input type="text" size="50" required name="address" placeholder="address ">
                <br>
                <br>
  </div>
    <div class="contactno">
        <label>contactno*</label><br>
            <input type="tel" size="50" required name="contactno" placeholder="contactno ">
                <br>
                <br>
  </div>
   
  
    <div class="nearby">
        <label> guardian name*</label><br>
            <input type="name" size="50" required name= "nearby" placeholder=" guardian name">
                <br>
                <br>
  </div>
  <div class="gcontactno">
                <label>guardian contact no</label><br>
                <input type="tel" size="50" required name="gcontactno" placeholder="guardian contactno">
                <br>
                <br>
</div>

<div class="faculty">
                           <select id="id" name="faculty" required o>
                                 <option value="computer ">computer</option>
                                 <option value="electronic">electronic</option> 
                                 <option value="electrical">electrical</option>
                                 <option value="civil">civil</option> 
                                 <option value="CRE">cre</option>  
</select>
          </div>


<div class="rollno">
                <label>roll no*</label><br>
                <input type="number"  size="50" required name="rollno" placeholder="rollno">
                <br>
                <br> 


                <td width="10%">room</td>
                        <td>
                            <select id="id" name="room" required o>
                                <option value="" disabled selected>Please Select</option>
<?php
require_once 'dbconnection.php';
$query = "SELECT * FROM room";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        ?>
                                        <option value="<?php echo $row['room']; ?>"><?php echo $row['room']; ?></option>
                                    <?php }
                                } ?>
                            </select>
                        </td>
<div class="username">
                <label>username*</label><br>
                <input type="name"  size="50" required name="username" placeholder="username">
                <br>
                <br> 
</div>


<div class="password">
                <label>password*</label><br>
                <input type="password"  size="50" required name="password" placeholder="password">
                <br>
                <br> 

<input type="hidden" name="datee" readonly   value="<?php echo date('Y-m-d'); ?>">

</div>
          <input type="submit" value="Submit" name="submit1">
    </div>
    </form>
</body>
</html> 
