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
      <?php include "header.php"; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
             <div class="row">
               <div class="col-md-5 grid-margin stretch-card">
                <div class="card ">
                   <div class="card-body my-n2">
                    <h4 class="card-title">Important announcement </h4>
					  <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel my-3 " id="owl-carousel-basic">
                      <div class="item">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
						<div>
                    <div class="d-flex py-4 row">
					<h6 class="col-9 grid-margin stretch-card preview-subject"> Annoucement Title</h6>
					<p class="col-2 grid-margin stretch-card text-muted text-small">02/02/02</p>
                    </div>
                    <div class="my-n3 row mx-0 my-n4-5">
					<p class="text-muted overflow-elipses ">sdasd sad asd asd asd asd asd asd asd asd as das dsad asd asd asd asdasdasdsadsadsa asd asd asd asd sad asd asds d02/02/02</p>
                  </div>
                  </div>
                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/Img_5.jpg" alt="">
						<div>
                    <div class="d-flex py-4 row">
					<h6 class="col-9 grid-margin stretch-card preview-subject"> Annoucement Title</h6>
					<p class="col-2 grid-margin stretch-card text-muted text-small">02/02/02</p>
                    </div>
                    <div class="my-n3 row mx-0 my-n4-5">
					<p class="text-muted overflow-elipses ">!sdasd sad asd asd asd asd asd asd asd asd as das dsad asd asd asd asdasdasdsadsadsa asd asd asd asd sad asd asds d02/02/02</p>
                  </div>
                  </div>
                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/img_6.jpg" alt="">
						<div>
                    <div class="d-flex py-4 row">
					<h6 class="col-9 grid-margin stretch-card preview-subject"> Annoucement Title</h6>
					<p class="col-2 grid-margin stretch-card text-muted text-small">02/02/02</p>
                    </div>
                    <div class="my-n3 row mx-0 my-n4-5">
					<p class="text-muted overflow-elipses ">sdasd sad asd asd asd asd asd asd asd asd as das dsad asd asd asd asdasdasdsadsadsa asd asd asd asd sad asd asds d02/02/02</p>
                  </div>
                  </div>
                      </div>
                    </div>
					
					
                    <a href="announce_add.php">
				  <button class="btn btn-primary btn-inline btn-left mr-4 w-45 my-4"><h6 class=" w-100 my-1 text-medium">Edit</h6> </button>
				  </a>
				  <button class="btn btn-danger btn-inline btn-right w-45 my-4" id="popup-confirm"><h6 class=" w-100 my-1 text-medium">Remove</h6>  </button>
				  <button class="btn btn-success btn-block" id= "popup-add"><h6 class=" w-100 my-1 text-medium" >Add Important</h6> </button>
                  </div>
                </div>
              </div>
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body my-n2">
				  <h4 class="card-title w-100">Announcement List</h4>
                    <div class="table-responsive-full my-n2">
                      <table class="table table-hover">
                        <thead>
                          <tr data-url="">
                            <th>ID</th>
                            <th>Date</th>
                            <th>Title</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						  <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
                          <tr data-url="announce_view.php">
                            <td>002</td>
                            <td>Alice</td>
							<td>Organise Event</td>
                          </tr>
                          <tr data-url="announce_view.php">
                            <td>003</td>
                            <td>Kondo</td>
							<td>Sponsorship</td>
                          </tr>
                          <tr data-url="announce_view.php">
                            <td>004</td>
                            <td>Flash</td>
							<td>Charity Event</td>
                          </tr>
                          <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
                          <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
                          <tr data-url="announce_view.php">
                            <td>001</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  <a href="announce_add.php">
				  <button class="btn btn-success btn-block my-4-2"><h4 class="card-title w-100 my-1">Add Announcement</h4> </button>
				  </a>
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