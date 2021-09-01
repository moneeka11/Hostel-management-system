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
     View available room</h2><hr>

        <div class="block">
<a href="addroom.php">Add new room</a>
            <?php
            $res = mysqli_query($link, "select * from room ");
            echo "<table border='1'>";
            echo "<tr>";


echo "<th>"; echo "roomid"; echo "</th>";
echo "<th>"; echo "room"; echo "</th>";


           

            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                



                echo "<td>"; echo $row["id"]; echo "</td>";
 echo "<td>"; echo $row["room"]; echo "</td>";

              

 

                echo "</tr>";
            }
            echo "</table>";

            ?>
            </div>
            </div>
            </div>