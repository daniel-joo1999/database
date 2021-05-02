<?php
session_start();
$did = $_GET['did'];
$title = $_GET['title'];
?>
<html>
<body>
 <h1><?php echo "{$title}" ?></h1>
 <form action="rate.php" method="post">

 <input type="hidden" id="did" name="did" value=<?php echo "{$did}"?> >

 <label for="rating">How Would You Rate This Date?</label>
 <select name="rating" id="rating" size="5" multiple="multiple">
        <option value="1">*</option>
        <option value="2">**</option>
        <option value="3">***</option>
        <option value="4">****</option>
        <option value="5">*****</option>
  </select>
<br><br>
<label for="date"> Date Visited</label>
<input type="text" id="date" name="date"><br>

<label for="description">Please explain why</label>
 <textarea for="description" name="description" rows="4" cols="50"></textarea><br>

  <p><input type="submit" /></p>
</form>
</body>
</html>