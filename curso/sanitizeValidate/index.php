<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    username: <br>
    <input type="text" name="username"><br>
    age: <br>
    <input type="text" name="age"><br>
    <input type="submit" name="login" value="login"><br>
  </form>
</body>
</html>

<?php
  if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS); // this filters out any HTML tags
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT); // this filters out any non-integer characters
    echo "Username: " . $username . "<br>";
    echo "Age: " . $age . "<br>";
  }


  /*
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING); // Sanitize username by removing tags and special characters
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // Validate email address
  $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT); // Validate age as an integer
  $url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL); // Validate URL
  $ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP); // Validate IP address
  $float = filter_input(INPUT_POST, 'float', FILTER_VALIDATE_FLOAT); // Validate floating-point number
  $date = filter_input(INPUT_POST, 'date', FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^\d{4}-\d{2}-\d{2}$/"))); // Validate date in YYYY-MM-DD format
  */

  /*
  we can validate the brazilian CPF

  function validateCPF($cpf) {
    // Remove any non-numeric characters
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Check the length and the known invalid numbers
    if (strlen($cpf) != 11 || $cpf == '00000000000' || 
        $cpf == '11111111111' || $cpf == '22222222222' || 
        $cpf == '33333333333' || $cpf == '44444444444' || 
        $cpf == '55555555555' || $cpf == '66666666666' || 
        $cpf == '77777777777' || $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
    } else {
        // Calculate the verification digit
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }
  }

  if (isset($_POST['login'])) {
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
    if (validateCPF($cpf)) {
        echo "CPF: " . $cpf . "<br>";
    } else {
        echo "Invalid CPF.<br>";
    }
  }
  // The validateCPF function removes any non-numeric characters from the input and then checks the length and known invalid numbers. If the input passes these checks, the function calculates the verification digit and compares it to the input. If the input is valid, the function returns true; otherwise, it returns false.

  */
?>