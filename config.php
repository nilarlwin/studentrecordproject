<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn, $dbname);

?>