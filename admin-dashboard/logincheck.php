<?php

$servername = "aduanmpp.mysql.database.azure.com";
$username = "adminkacak@aduanmpp";
$password = "Kacak_gagah01";
$dbname = "aduan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "SELECT * FROM adminlogin WHERE admin_name='$username' AND admin_pass='$password'";
	$query = mysqli_query($conn,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			$_SESSION['success'] = 1;
			session_start();
			header('location:dashboard.php');
			exit();
		}else{
			echo "<script>alert('Wrong Credentials!'); window.location.href='index.php';</script>";
			exit();
		}

}


?>