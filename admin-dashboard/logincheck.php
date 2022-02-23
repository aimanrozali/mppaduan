
<?php
session_start();

$servername = "aduanmpp.mysql.database.azure.com";
$username = "adminkacak@aduanmpp";
$password = "Kacak_gagah01";
$dbname = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  adminlogin where admin_name='$username' and admin_pass='$password' ";
	$query = mysqli_query($conn,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			$_SESSION['success'] = 1;
			header('location:dashboard.php');
		}else{
			echo "<script>alert('Wrong Credentials!'); window.location.href='index.php';</script>";
		}

}


?>