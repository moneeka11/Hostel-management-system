<?php
include"admin.php";
?>






<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "hostelmanagment");
?>

<div class="grid_10">
    <div class="box round first">
        <h2>
            Displaystudent detail</h2><hr>

        <div class="block">

            <?php
            $res = mysqli_query($link, "select * from user WHERE usertype=0 ");
            echo "<table border='1'>";
            echo "<tr>";


echo "<th>"; echo "firstname"; echo "</th>";
echo "<th>"; echo "lastname"; echo "</th>";
echo "<th>"; echo "contactno"; echo "</th>";
echo "<th>"; echo "address"; echo "</th>";
 echo "<th>"; echo "faculty"; echo "</th>";
echo "<th>"; echo "rollno"; echo "</th>";
 echo "<th>"; echo "join date"; echo "</th>";
 echo "<th>"; echo "Room"; echo "</th>";
 echo "<th>"; echo "Action"; echo "</th>";

           

            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                



                echo "<td>"; echo $row["firstname"]; echo "</td>";
 echo "<td>"; echo $row["lastname"]; echo "</td>";
echo "<td>"; echo $row["contactno"]; echo "</td>";
                echo "<td>"; echo $row["address"]; echo "</td>";
             echo "<td>"; echo $row["faculty"]; echo "</td>";
              echo "<td>"; echo $row["rollno"]; echo "</td>";
               echo "<td>"; echo $row["datee"]; echo "</td>";
              echo "<td>"; echo $row["room"]; echo "</td>";

 echo "<td>"; ?> <a style="color: Red" href="add2room.php ?id= <?php echo $row["id"]; ?>">update</a><?php echo "</td>";

                echo "</tr>";
            }
            echo "</table>";

            ?>
            </div>
            </div>
            </div>
            