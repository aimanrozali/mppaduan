<?php

$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

if($pageWasRefreshed ) {
	  header('Location: adminview.html');
}

include "create_conn.php";

$table = "REPORT";
$id = "REPORT_ID";
$name = "USER_NAME";
$matric = "USER_MATRIC";
$school = "USER_SCHOOL";
$phone = "USER_PHONE";
$email = "USER_EMAIL";
$content = "REPORT_CONTENT";


/*$sql = "SELECT ".$id.", ".$name.", ".$matric.", ".$school.", ".$phone.", ".$email.", ".$content." FROM ".$table;
$result = $conn->query($sql);*/
$sql = "SELECT ".$id.", ".$name.", ".$matric.", ".$school.", ".$email.", ".$content." FROM ".$table;
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

?>