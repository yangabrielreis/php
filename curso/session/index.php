<?php
  session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    Login Page <br> <br>
    <form action="index.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <br>
      <input type="password" name="password" placeholder="Password">
      <br>
      <input type="submit" name="login" value="Login">

    </form>
</body>
</html>

<?php
  if(isset($_POST["login"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];
      echo "<br>Session started <br>";
      header("Location: home.php");
    } 
    echo "<br>";
    if(empty($_POST["username"]) && empty($_POST["password"])){
      echo "Please enter a username and a password";
    } elseif(empty($_POST["username"])){
      echo "Please enter a username";
    } elseif(empty($_POST["password"])){
      echo "Please enter a password";
    }
  }
?>