<?php
session_start();
if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'links.php' ?> 
</head>
<body>

	
			<a href= "index_search_button.php">
		   <button>Search report</button>
		</a>
		<a href="display_all.php">
		   <button>View all</button>
		</a> 
		<a href="logout.php" class="btn btn-danger">  Logout</a>



</body>
</html>
