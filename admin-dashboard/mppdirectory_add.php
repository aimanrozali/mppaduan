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
                    <h4 class="card-title">MPP Registration</h4>
                    <form class="forms-sample" id="forms-popup" method="post" action="#">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name: </label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Position:</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="adminname">
                      </div>
					  <div class="form-group">
                        <label for="exampleInputUsername1">School:</label>
<select class="form-control" name="school" id="school">
<option selected="true" disabled="disabled">Choose School</option>      
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputUsername1">Phone:</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="adminname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div> 
                    </form>
					<div class = "row">
					<button class="btn btn-primary mr-2" id = "popup-confirm-form" value="submit">Submit</button>
					<a href="mppdirectory_main.php"><button class="btn btn-dark">Cancel</button></a>

                  </div>
                  </div>
                </div>
              </div> 
           
               <div class="col-md-5 grid-margin stretch-card">
                <div class="card ">
                  <div class="card-body">
                      <div class="drop-zone">
                       <span class="drop-zone__prompt">Drop image here or click to upload</span>
                           <input type="file" name="myFile" class="drop-zone__input">
                    </div>
                    <div>
					
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
	    <script src="assets/js/owl-carousel-custom.js"></script>

	<script src="assets/js/date.js"></script>
	<script src="assets/js/table-hover.js"></script>
	<script src="assets/js/popup-confirm.js"></script>
	<script src="assets/js/popup-add-announce.js"></script>

    <!-- End custom js for this page -->
	
  </body>
</html>