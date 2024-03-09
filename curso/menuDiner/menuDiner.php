<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
</head>
<body>
  <form action="menuDiner.php" method="post">
    <label>Quantity</label><br>
    <input type="text" name="quantity"><br>
    <input type="submit" value="total"><br>
  </form>
</body>
</html>

<?php
  $item = "pizza";
  $price = 4.99;
  $quantity = $_POST["quantity"];
  $total = null;
  $total = $quantity * $price;

  if($_POST["quantity"]!=null&&$_POST["quantity"]>0){
  echo "you have ordered {$quantity}x {$item}";
  echo "<br>";
  echo "your total is R\${$total}";}
?>

