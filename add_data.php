<?php

	$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

	if($pageWasRefreshed ) {
		  header('Location: aduan.html');
	}
	
	else {
		
		$name_err = FALSE;
		$matric_err = FALSE;
		$school_err = FALSE;
		//$phone_err = FALSE;
		$email_err = FALSE;
		$content_err = FALSE;
		
		$in_name = $_GET['name'];
		$in_name = "'".addslashes($in_name)."'";
		
		$in_matric = $_GET['matric'];
			if (filter_var($in_matric, FILTER_VALIDATE_INT)) {}
			else {
				$matric_err = TRUE;
		        echo $in_matric." is not in number format <br>";
			}
	
		
			
		$in_school = $_GET['school'];
		$in_school = "'".addslashes($in_school)."'";
		
		/*$in_phone = $_GET['phone'];
		if (empty($in_phone) || ctype_space($in_phone)) {
		$phone_err = TRUE;
		echo "There is no matric number submitted." . "<br>";}
		else
		{
			if (filter_var($in_phone, FILTER_VALIDATE_INT)) {}
			else {
				$phone_err = TRUE;
		        echo $in_phone." is not in number format <br>";
			}
			
		}*/
		
		$in_email = $_GET['email'];
		$in_email = '"'.addslashes($in_email).'"';

		$in_title = $_GET['reporttitle'];
		$in_title = '"'.addslashes($in_title).'"'; 
		
		
		$in_content = $_GET['content'];
		$in_content = "'".addslashes($in_content)."'";

		$datereceived = "'".addslashes(date('Y-m-d'))."'";

	include "create_conn.php";

	//if ($name_err == TRUE ||	$matric_err == TRUE || $school_err == TRUE || $phone_err == TRUE || $email_err == TRUE || $content_err == TRUE) {
		if ($name_err == TRUE ||	$matric_err == TRUE || $school_err == TRUE || $email_err == TRUE || $content_err == TRUE) {
		echo "Data was not uploaded." . "<br>";
	}
	else {
		
		$table = "REPORT";
		$id = "REPORT_ID";
		$name = "USER_NAME";
		$matric = "USER_MATRIC";
		$school = "USER_SCHOOL";
		//$phone = "USER_PHONE";
		$email = "USER_EMAIL";
		$content = "REPORT_CONTENT";
		$daterec = "DATE_RECEIVED";
		$title = "report_title";
		

		/*$sql = "INSERT INTO ".$table." (".$name.", ".$matric.", ".$school.", ".$phone.", ".$email.", ".$content.") 
		VALUES (".$in_name.", ".$in_matric.", ".$in_school.", ".$in_phone.", ".$in_email.", ".$in_content.")";*/
		
		$sql = "INSERT INTO ".$table." (".$name.", ".$matric.", ".$school.", ".$email.", ".$content.", ".$title.", ".$daterec.") 
		VALUES (".$in_name.", ".$in_matric.", ".$in_school.", ".$in_email.", ".$in_content.", ".$in_title.", ".$datereceived.")";
		
		if ($conn->query($sql) === FALSE) {
		  echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
		}
		else {
			echo "Insert successful! <br><br>";
			$sql = "SELECT * FROM $table ORDER BY $id DESC LIMIT 1";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
				echo "ID: " . $row["REPORT_ID"] . "<br>";
				echo "Student Name: " . $row["USER_NAME"] . "<br>";
				echo "Matric Number: " . $row["USER_MATRIC"] . "<br>";
				echo "School: " . $row["USER_SCHOOL"] . "<br>";
				//echo "Contact Number: " . $row["USER_PHONE"] . "<br>";
				echo "Email: " . $row["USER_EMAIL"] . "<br>";
				echo "Report: " . $row["REPORT_CONTENT"] . "<br><br>";
			  }
			}
	}

	}
	}

?>