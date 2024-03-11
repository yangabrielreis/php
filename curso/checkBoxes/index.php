<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="checkbox" name="food[]" value="pizza"> Pizza <br>
    <input type="checkbox" name="food[]" value="taco"> Taco <br>
    <input type="checkbox" name="food[]" value="burguer"> Burguer <br>
    <input type="checkbox" name="food[]" value="burrito"> Burrito <br>
    <input type="submit" name="add" value="Add"> <br>
  </form>
</body>
</html>

<?php
  
  if(isset($_POST["add"])){
    $foodArray = $_POST["food"];
    foreach($foodArray as $foods){
      echo "{$foods}<br>";
    }
  }
?>