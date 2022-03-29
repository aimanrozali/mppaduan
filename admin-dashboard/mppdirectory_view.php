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
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="dashboard.php"><img src="assets/images/logo.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/logo-mini.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/admin.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                  <span>Website MPPUSM</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                
                <div class="dropdown-divider"></div>
                <a href="change_pass.php" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="dashboard.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_all_reports.php">View All</a></li>
                <li class="nav-item " > <a class="nav-link " href="view_unsolved.php">Unsolved Reports</a></li>
                <li class="nav-item " > <a class="nav-link " href="view_solved.php">Solved Reports</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="announce_main.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document"></i>
              </span>
              <span class="menu-title">Announcement</span>
            </a>
          </li>
		  
		  <li class="nav-item menu-items">
            <a class="nav-link" href="bantuan_main.php">
              <span class="menu-icon">
                <i class="mdi mdi-briefcase-check"></i>
              </span>
              <span class="menu-title">Bantuan</span>
            </a>
          </li>
		  
		  <li class="nav-item menu-items">
            <a class="nav-link" href="mppdirectory_main.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-circle"></i>
              </span>
              <span class="menu-title">MPP Directory</span>
            </a>
          </li>
            </a>
          </li>
          
        </ul>
      </nav>
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
                    <h4 class="card-title">MPP Details</h4>
					<p class="card-description mt-3"> Name:
                    </p>
                    <blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"> Alif Danial Marzuki</p>
                    </blockquote>
					
					<p class="card-description mt-3"> Position:
                    </p>
                    <blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"> Alif Danial Marzuki</p>
                    </blockquote>
					<p class="card-description mt-3"> School of:
                    </p>
                    <blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"> Alif Danial Marzuki</p>
                    </blockquote>
					
					<div class="row">
					<div class = "col-6">
					<p class="card-description mt-4"> Phone:
                    </p>
					</div>
					<div class = "col-6">
					<p class="card-description mt-4"> Email:
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
				  <button class="btn btn-danger btn-block my-3"><h4 class="card-title w-100 my-1">Delete MPP</h4> <span class="mdi mdi-delete"></span></button>
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