<?php

$con=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
mysqli_real_connect($con, "aduanmpp.mysql.database.azure.com", "adminkacak@aduanmpp", {your_password}, {your_database}, 3306);
?>