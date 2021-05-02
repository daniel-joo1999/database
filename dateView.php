<?php
include_once("./library.php");
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 $result = mysqli_query($con,"SELECT * FROM dateIdea");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Dates</title>
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
    <td>ideaTitle</td>
    <td>description</td>
    <td>dateVisited</td>
    <td>rating</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["ideaTitle"]; ?></td>
    <td><?php echo $row["description"]; ?></td>
    <td><?php echo $row["dateVisited"]; ?></td>
    <td><?php echo $row["rating"]; ?></td>
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