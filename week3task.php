<?php
    function multiply_numbers($num1, $num2, $num3 = 5) {
       return $num1 * $num2 * $num3;
}

$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabase";

// Create connection
$db_connect = mysqli_connect('localhost', 'root', '', 'phaithi');

// Check connection
if ($db_connect) {
  echo("Connection");
}
else "Connected successfully";


?>
