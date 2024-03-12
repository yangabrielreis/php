<?php
  include('header.html');
?>

<style>

  .locations-h1 {
    color: red;
    font-weight: bold;
    font-family: Arial, sans-serif;
    text-rendering: optimizeLegibility;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 class="locations-h1">
    Locations <br> <br>
    <?php
      $capitals = ['London', 'Paris', 'Tokyo', 'Rome', 'New York'];
      echo implode('<br>', $capitals);
    ?>
  </h1>
</body>
</html>

<?php
  include('footer.html');
?>