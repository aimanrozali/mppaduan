<?php 

	$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

	if($pageWasRefreshed ) {
		  header('Location: adminview.html');
	}
	
	else {
	
		$search_content = addslashes($_GET['search']);
		
		if (empty($search_content) || ctype_space($search_content)) {
			echo "There is no data submitted." . "<br>";
		}
		else {	
			include "create_conn.php";

			$sql = "SELECT * FROM REPORT WHERE REPORT_CONTENT LIKE '%$search_content%';";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				echo "ID: " . $row["REPORT_ID"] . "<br>";
				echo "Student Name: " . $row["USER_NAME"] . "<br>";
				echo "Matric Number: " . $row["USER_MATRIC"] . "<br>";
				echo "School: " . $row["USER_SCHOOL"] . "<br>";
				//echo "Contact Number: " . $row["USER_PHONE"] . "<br>";
				echo "Email: " . $row["USER_EMAIL"] . "<br>";
				echo "Report: " . $row["REPORT_CONTENT"] . "<br><br>";
				}
			} else {
			  echo "0 results";
			}
		}
		
	}
?>
