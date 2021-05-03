<?php
session_start();
include_once("./library.php");
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 $result = mysqli_query($con,"SELECT * FROM location");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Locations </title>
 <style>
     table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;

    }

    tr:nth-child(even) {
        background-color: white;
    }
 </style>
 
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>lname</td>
    <td>address</td>
    <td>Already Visited?</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
     <td><?php echo '<a href="reviewView.php?lid=' . $row["lid"] . '&lname=' . $row["lname"] . '">' . $row["lname"] . '</a>';?></td>
     <td><?php echo $row["address"]; ?></td>
     <td><?php echo '<a href="visitedForm.php?lid=' . $row["lid"] .'">Click</a>';?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>