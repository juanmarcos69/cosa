<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_registration_nega";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Something went wrong;");
}
 echo" congratulations_nega_you_are_connected";

 ?>
