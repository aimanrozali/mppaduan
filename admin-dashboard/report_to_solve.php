<?php
session_start();

if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
    error_reporting(-1);
} else {
    
    if(isset($_SESSION['id']) && isset($_GET['click'])) {
        include "../create_conn.php";
        $date = date("Y-m-d");
        $id = $_SESSION['id'];
        $sql = "UPDATE report SET  resolved = 1 WHERE  REPORT_ID = '$id'";   
        if($conn->query($sql) === true) {
            $sql = "UPDATE report SET  DATE_RESOLVED = '$date' WHERE  REPORT_ID = '$id'";
            if($conn->query($sql) === true) {
                header('location:report.php?reportid='.$id);  
            } else {
                echo '<script type="text/javascript"> alert("Problem in updating report status");</script>';
            }        
        } else {
            echo '<script type="text/javascript"> alert("Problem in updating date resolve");</script>';
        }
    } else {
        header('location:dashboard.php');
    }   
}
?>