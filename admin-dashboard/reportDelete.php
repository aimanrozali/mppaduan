<?php
session_start();

if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
    error_reporting(-1);
} else {
    
    if(isset($_SESSION['id']) && isset($_GET['del'])) {
        include "../create_conn.php";
        $id = $_SESSION['id'];
        $sql = "DELETE FROM report WHERE  REPORT_ID = '$id'";   
        if($conn->query($sql) === true) {
            $sql = "UPDATE report SET  DATE_RESOLVED = '$date' WHERE  REPORT_ID = '$id'";
            if($conn->query($sql) === true) {
                header('location:view_all_reports.php');  
            } else {
                echo '<script type="text/javascript"> alert("Problem in deleting report");</script>';
            }        
        } else {
            echo '<script type="text/javascript"> alert("Problem in deleting report");</script>';
        }
    } else {
        header('location:dashboard.php');
    }   
}
?>