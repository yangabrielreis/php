<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Capitals</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Enter a State</label>
    <input type="text" name="state">
    <input type="submit">
  </form>
</body>
</html>

<?php
  $capitals = array("Parana" => "Curitiba",
                    "Santa Catarina" => "Florianopolis",
                    "Goias" => "Goiania");

  $state = $_POST["state"];

  foreach($capitals as $key => $values) {
    if($key==$state){
      echo "<br>" . $values;
      break;
    }
  }
  if($state!=$key){
    echo "<br>Invalid State<br>";
  }
?>