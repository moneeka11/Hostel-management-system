

<?php
include"admin.php";
?>

<html>
<head>



    <title></title>

 
</head>
<style>
.box{
    width: 800px;
    border: 2px solid gray;
    padding: 25px;
    margin: 25px;
    margin-left: 200px;
    
}

</style>

<body>
    




    

<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "hostelmanagment");
?>

<div class="grid_10">
    <div class="box round first">
        <h2>
             student feedback</h2><hr>

        <div class="block">

            <?php
            $res = mysqli_query($link, "select * from feedback");
            echo "<table border='1'>";
            echo "<tr>";


echo "<th>"; echo "username"; echo "</th>";
echo "<th>"; echo "date"; echo "</th>";
echo "<th>"; echo "Feedback"; echo "</th>";



           

            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                



                echo "<td>"; echo $row["username"]; echo "</td>";
 echo "<td>"; echo $row["datee"]; echo "</td>";
echo "<td>"; echo $row["feedback"]; echo "</td>";
                



                echo "</tr>";
            }
            echo "</table>";

            ?>
</div>
</div>
</div>
</form>
</div>
</div>
</body>
</html>


  
    