
<?php
session_start();

include "../create_conn.php";

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "SELECT * FROM  adminlogin WHERE admin_name='$username' AND admin_pass='$password'";
	$query = mysqli_query($conn,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			$_SESSION['success'] = 1;
			header('location:dashboard.php');
			exit();
		}else{
			echo "<script>alert('Wrong Credentials!'); window.location.href='index.php';</script>";
			exit();
		}

}


?>