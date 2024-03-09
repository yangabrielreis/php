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
    <label>y:</label>
    <input type="text" name="y"><br>
    <input type="submit" value="total"><br>
  </form>
</body>
</html>

<?php
  $x = $_POST["x"];
  $y = $_POST["y"];
  $result = null;

  //$result = abs($x);
  //$result = round($x); //arredondar
  //$result = floor($x); //arredondar para baixo
  //$result = ceil($x); //arredondar para cima
  //$result = $x + $y;
  //$result = pow($x, $y); //base x na potencia y
  //$result = sqrt($x); //raiz quadrada de x
  //max() para achar o maximo min() para achar o minimo
  //pi() retorna pi
  //rand(x, y) onde x eh minimo e y maximo
  
  echo "<br>{$result}";
?>