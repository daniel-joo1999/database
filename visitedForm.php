<?php
$lid = $_GET['lid'];
?>
<html>
<body>
 <h1>When did you visit this place?</h1>
 <form action="visited.php" method="post">

 <input type="hidden" id="lid" name="lid" value=<?php echo "{$lid}"?> >

<label for="date">Date Visited</label>
<input type="date" id="date" name="date"><br>
  <p><input type="submit" /></p>
</form>
</body>
</html>