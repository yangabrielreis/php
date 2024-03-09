<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="contasRaio.php" method="post">
    <label>raio</label>
    <input type="text" name="raio">
    <input type="submit" value="total"><br>
  </form>
</body>
</html>

<?php
  $raio = $_POST["raio"];
  $result = null;
  $circunpherence = $raio * pi() * 2;
  echo "the circunpherence is " . round($circunpherence, 2) . "<br>";
  $area = pow($raio, 2) * pi();
  echo "the area is " . round($area, 2) . "<br>";
?>