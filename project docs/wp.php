<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
?>


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = test_input($_POST["email"]);
 
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Login Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Password: <input type="text" name="">
  
  <br><br>
  
  <br><br>
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>