<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="radio" name="creditCard" value="Visa"> VISA <br>
    <input type="radio" name="creditCard" value="Mastercard"> MASTERCARD <br>
    <input type="radio" name="creditCard" value="OingoBoingo"> OINGOBOINGO <br> <br>
    <input type="submit" name="send" value="send"> <br>

  </form>
</body>
</html>

<?php
  $card = $_POST["creditCard"];
  echo "<br>" . $card . "<br>";

?>