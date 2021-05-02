<?php
session_start();
include_once("./library.php");
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
$lid = $_GET['lid'];
$title = $_GET['lname'];
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 $query="SELECT lname FROM location 
        WHERE exists (select 1 from visited where uid='".$_SESSION['id']."'";

?>

<!DOCTYPE html>
<html>
 <head>
 <title>Visited</title>
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
    <td>Location Visited</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["lname"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No Visited Locations";
}
?>
 </body>
</html>