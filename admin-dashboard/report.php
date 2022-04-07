<?php
session_start();

if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
  error_reporting(-1);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title> 
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
  	<link rel="stylesheet" href="assets/css/popup.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php include "navigation.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php include "header.php"; ?>
        
        <?php
          include "../create_conn.php";
          $id = $_GET['reportid'];
          $sql = "SELECT * FROM report WHERE REPORT_ID ='$id'";
          $result = $conn->query($sql);
          $rows=$result->fetch_assoc();
          $conn->close();

          //Sent id through session
          $_SESSION['id'] = $id;
        ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
		        <div class="row">
		          <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">		  
				            <p class="card-description my-n1"> </p>
                    <h4 class="card-title">Sender Details </h4>

                    	<p class="card-description mt-3"> Name: </p>
                      <blockquote class="blockquote h-8 my-n2">
                        <p class="my-n2-5 scrolly-25"> <?php echo $rows['USER_NAME']?></p>
                      </blockquote>
					
				          	<div class="row">
					            <div class = "col-6">
					              <p class="card-description mt-4"> Matric Number: </p>
                      </div>
                      <div class = "col-6">
                        <p class="card-description mt-4"> School of: </p>
                      </div>
                    </div>
					
					          <div class="row  mt-2">
                      <div class = "col-6">
                        <blockquote class="blockquote h-8 my-n2">
                          <p class="my-n2-5 scrolly-25" > <?php echo $rows['USER_MATRIC']?></p>
                        </blockquote>
                      </div>
                      <div class = "col-6">
                        <blockquote class="blockquote h-8 my-n2">
                          <p class="my-n2-5 scrolly-25"><?php echo $rows['USER_SCHOOL']?></p>
                        </blockquote>
                      </div>
                    </div>
					
					          <p class="card-description"> Email: </p>
                    <blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"><?php echo $rows['USER_EMAIL']?> </p>
                    </blockquote>
					
                    <div class="row">
                      <div class = "col-6">
                        <p class="card-description mt-4"> Date Received: </p>
                      </div>
                      <div class = "col-6">
                        <p class="card-description mt-4"> Date Resolved: </p>
                      </div>
                    </div>
                    
                    <div class="row  mt-2">
                      <div class = "col-6">
                        <blockquote class="blockquote h-8 my-n2">
                          <p class="my-n2-5 scrolly-25" ><?php echo $rows['DATE_RECEIVED']?> </p>
                        </blockquote>
                      </div>
                      <div class = "col-6">
                        <blockquote class="blockquote h-8 my-n2">
                          <p class="my-n2-5 scrolly-25"><?php echo $rows['DATE_RESOLVED']?></p>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  
			        <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
				            <p class="card-description my-n1"> </p>
                    <h4 class="card-title">Reports Details</h4>
                    
					            <p class="card-description"> Status: </p>
                      <?php if($rows['resolved']==false) { ?>
					            <div class = "w-100 my-n3 pb-2">
					              <button type="button" class="btn btn-danger btn-lg w-93" id = "popup-confirm"> UNSOLVED </button>

                        <?php } else { ?>
                      <div class = "w-100 my-n3 pb-2">
                        <a href = "view_all_reports.php">
					                <button type="button" class="btn btn-success btn-lg w-93" > SOLVED </button>
                        </a>
                      <?php } ?>

                      <button type="button" class="btn-danger btn-sm" id = "popup-confirm-delete"><i class="mdi mdi-delete"></i></button>
                      </div>

                      <p class="card-description mt-4"> Report ID: </p>
                      <blockquote class="blockquote h-8 my-n2">
                        <p class="my-n2-5 scrolly-25"><?php echo $rows['REPORT_ID']?></p>
                      </blockquote>
					
                      <p class="card-description mt-4">Description: </p>
                      <blockquote class="blockquote blockquote-primary h-50 my-n2" >
                        <div class="my-n2 sticky py-sm-2">
                          <h4><?php echo $rows['report_title']?></h4>
                        </div> 
                        <div>
                          <p class= "scrolly-145"><?php echo $rows['REPORT_CONTENT']?></p> 
                        </div>
                      </blockquote>
                  </div>
                </div>
              </div>         
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include "footer.php"; ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->

    <!-- inject:js -->
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/popup-confirm-delete.js"></script>
	  <script src="assets/js/popup-confirm.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>