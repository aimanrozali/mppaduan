<?php
  
include "create_conn.php";
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $sql ="SELECT * FROM adminlogin";
    $result = $conn->query($sql);
     
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        if(($row['admin_name'] == $adminname) && 
            ($row['admin_pass'] == $password)) {
                header("Location: adminview.html");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
else {
	echo "<script language='javascript'>";
            echo "alert('NO ADMIN DATA')";
            echo "</script>";
            die();
}
}
  
?>