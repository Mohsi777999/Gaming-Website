<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gameverse";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($conn, $dbname);

?>