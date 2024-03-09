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
    <input type="submit" name="send">
  </form>
</body>

</html>

<?php
$capitals = array(
  "Parana" => "Curitiba",
  "Santa Catarina" => "Florianopolis",
  "Goias" => "Goiania"
);

$state = $_POST["state"];
if (isset($_POST["send"])) {
  if (empty($state)) {
    echo "<br>Empty state <br>";
  } else {
    foreach ($capitals as $key => $values) {
      if ($key == $state) {
        echo "<br>" . $values;
        break;
      }
    }
    if ($state != $key) {
      echo "<br>Invalid State<br>";
    }
  }
}
?>