<?php
session_start();
if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
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
	<link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/popup.css">
	    <link rel="stylesheet" href="assets/css/owl-carousel-custom.css">

	
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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
             <div class="row">
			 			   <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
				  <p class="card-description my-n1"> 
                    </p>
                    <h4 class="card-title">Bantuan Details</h4>
						<blockquote class="blockquote blockquote-primary h-55 my-n2" >
						<div class="my-n2 sticky py-sm-2"><h4>Organize Event </h4></div> 
						<div>
                      <p class= "scrolly-145">Want to organize an event at Tekun</p> 
					  </div>
                    </blockquote>
					
					<div class="row">
					<div class = "col-6">
					<p class="card-description mt-4"> Date Open:
                    </p>
					</div>
					<div class = "col-6">
					<p class="card-description mt-4"> Date Close:
                    </p>
					</div>
					</div>
					
					<div class="row  mt-2">
					<div class = "col-6">
					<blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25" > Alif Danial Marzuki</p>
                    </blockquote>
					</div>
					<div class = "col-6">
					<blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"> Alif Dani Marzuki</p>
                    </blockquote>
					</div>
					</div>
					
					<p class="card-description"> Link:
                    </p>
                    <blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"> Alif Danial Marzuki</p>
                    </blockquote>					
					</div>
                </div>
              </div>
               <div class="col-md-5 grid-margin stretch-card">
                <div class="card ">
                  <div class="card-body my-4-5">
                    <h6 class="card-description mb-3">Image:</h6>
					                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel mb-4-5" id="owl-carousel-basic">
                      <div class="item">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                      </div>
                    </div>
                    <div>
				  <button class="btn btn-primary btn-block my-3"><h4 class="card-title w-100 my-1">Edit Details</h4> <span class="mdi mdi-pencil"></span></button>
				  <button class="btn btn-danger btn-block my-3"><h4 class="card-title w-100 my-1">Delete Bantuan</h4> <span class="mdi mdi-delete"></span></button>
                  </div>
                </div>
              </div>

               </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © mppusm.usm.my 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="http://www.usm.my/" target="_blank">Universiti Sains Malaysia</a></span>
            </div>
          </footer>
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
    <!-- Plugin js for this page -->
	<script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
	<script src="assets/js/date.js"></script>
	<script src="assets/js/table-hover.js"></script>
    <!-- End custom js for this page -->
	
  </body>
</html>