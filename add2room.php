<?php
include"admin.php";
?>





<?php

require_once 'dbconnection.php';
?>



                    <table class="table table-bordered">
                        <tr>
                       
                          <th width="2%">student code</th>
                          <th width="20%">student name</th>
                            <th width="20%">Faculty</th>
                            <th width="20%">roll no</th>
                           
                        </tr>
<?php
                    $id=$_GET['id'];
                    $query = "SELECT * FROM user where id='$id'";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>






                        



 <tr><td> <?php echo $row["id"]; ?></t


                      <tr><td> <?php echo $row["username"]; ?></td>
                                       
                                       
                                       <td> <?php echo $row["faculty"]; ?></td>
                                       <td> <?php echo $row["rollno"]; ?></td>
                                      
                                     
                                        
                                        
                                        
                                        
</tr>




                                       
                                
                 
                    
    <?php 
    $id=$row["id"];
    $username=$row["username"];
$faculty = $row["faculty"];
$rollno = $row["rollno"];

  }
} ?>
         
</table>
</div>
</div>
</div>



<form action="action.php" method="post">
<div class="box">


<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="hidden" name="username" value="<?php echo $username; ?>">
<input type="hidden" name="faculty" value="<?php echo $faculty; ?>">
<input type="hidden" name="rollno" value="<?php echo $rollno; ?>">
 
<td width="10%"> update room</td>
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

<tr>
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="assign"></td>
                         
                    </tr>
                    </div>
                    </form>