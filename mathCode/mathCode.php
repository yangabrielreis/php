<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Code</title>
</head>
<body>
  <form action="mathCode.php" method="post">
    <label>x:</label>
    <input type="text" name="x"><br>
    <input type="submit" value="total"><br>
  </form>
</body>
</html>

<?php
  $x = $_POST["x"];
  $result = null;

  //$result = abs($x);
  
  echo $result;
?>