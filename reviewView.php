<?php
session_start();
include_once("./library.php");
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 $lid = $_GET['lid'];
 $result = mysqli_query($con,"SELECT * FROM has NATURAL JOIN review WHERE lid = '$lid'");
 $lname = $_GET['lname'];
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Reviews </title>
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
  <h1> <?php echo "Reviews for {$lname}" ?> </h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>description</td>
    <td>datePosted</td>
  </tr>
<?php

while($row = mysqli_fetch_array($result)) {
?>
<tr>
     <td><?php echo $row["description"];?></td>
     <td><?php echo $row["datePosted"]; ?></td>
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
<p><?php echo '<a href="reviewForm.php?lid=' . $lid . '">Rate this location</a>'?></p>
 </body>
</html>