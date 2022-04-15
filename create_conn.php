<?php

//Local connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mppaduan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error) . "<br>";
}

//$conn=mysqli_init(); 
// mysqli_ssl_set($conn, NULL, NULL, {ca-cert filename}, NULL, NULL); 
// mysqli_real_connect($conn, "aduanmpp.mysql.database.azure.com", "adminkacak@aduanmpp", "Kacak_gagah01", "aduan", 3306);
?>