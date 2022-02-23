<?php

$servername = "aduanmpp.mysql.database.azure.com";
$username = "adminkacak@aduanmpp";
$password = "Kacak_gagah01";
$dbname = "aduan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error) . "<br>";
}

$conn=mysqli_init(); 
// mysqli_ssl_set($conn, NULL, NULL, {ca-cert filename}, NULL, NULL); 
// mysqli_real_connect($conn, "aduanmpp.mysql.database.azure.com", "adminkacak@aduanmpp", "Kacak_gagah01", "aduan", 3306);
?>