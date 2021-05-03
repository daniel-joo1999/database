<?php
$lid = $_GET['lid'];
?>
<html>
<body>
 <h1>Leave a review</h1>
 <form action="review.php" method="post">

 <input type="hidden" id="lid" name="lid" value=<?php echo "{$lid}"?> >

<label for="date"> Date</label>
<input type="date" id="date" name="date"><br>

<label for="description">Review</label>
 <textarea for="description" name="description" rows="4" cols="50"></textarea><br>

  <p><input type="submit" /></p>
</form>
</body>
</html>