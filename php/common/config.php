 <?php

$link = mysqli_connect("localhost","root","CoronaSpeak1234#@","corona");

if (!$link) 
{
   echo "Error: Unable to connect to MySQL." . PHP_EOL;
   echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
   echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
   exit;
}
?>


<!-- Password updated -->
