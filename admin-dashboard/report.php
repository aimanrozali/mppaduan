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
          
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/logo-mini.png" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
   		
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="icon icon-box-warning" >
						<span class="mdi mdi-newspaper"></span>
                        </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">New report received!</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="icon icon-box-success" >
						<span class="mdi mdi-calendar-check"></span>
                        </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">A report has been solved!</p>
                      <p class="text-muted mb-0"> 30 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="icon icon-box-warning" >
						<span class="mdi mdi-newspaper"></span>
                        </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">New report received!</p>
                      <p class="text-muted mb-0"> 1 Hours ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">3 new messages</p>
                </div>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/admin.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">adminname</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href = "logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

        <?php
          include "../create_conn.php";
          $id = $_GET['reportid'];
          $sql = "SELECT * FROM report WHERE REPORT_ID ='$id'";
          $result = $conn->query($sql);
          $rows=$result->fetch_assoc();
          $conn->close();
          ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
		  <div class="row">
		  
		   <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
				  
				  <p class="card-description my-n1"> 
                    </p>
                    <h4 class="card-title">Sender Details</h4>
					<p class="card-description mt-3"> Name:
                    </p>
                    <blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"> <?php echo $rows['USER_NAME']?></p>
                    </blockquote>
					
					<div class="row">
					<div class = "col-6">
					<p class="card-description mt-4"> Matric Number:
                    </p>
					</div>
					<div class = "col-6">
					<p class="card-description mt-4"> School of:
                    </p>
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
					
					<p class="card-description"> Email:
                    </p>
                    <blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"><?php echo $rows['USER_EMAIL']?></p>
                    </blockquote>
					
					<div class="row">
					<div class = "col-6">
					<p class="card-description mt-4"> Date Received:
                    </p>
					</div>
					<div class = "col-6">
					<p class="card-description mt-4"> Date Resolved:
                    </p>
					</div>
					</div>
					
					<div class="row  mt-2">
					<div class = "col-6">
					<blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25" ><?php echo $rows['DATE_RECEIVED']?></p>
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
					<div class = "w-100 my-n3 pb-2">
					  <button type="button" class="btn btn-danger btn-lg btn-block" id = "popup-confirm">
                       UNSOLVED
                    </div>
                    <p class="card-description mt-4"> Report ID:
                    </p>
                    <blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"><?php echo $rows['REPORT_ID']?></p>
                    </blockquote>
					
					
						<p class="card-description mt-4">Description:
                    </p>
						<blockquote class="blockquote blockquote-primary h-50 my-n2" >
						<div class="my-n2 sticky py-sm-2"><h4><?php echo $rows['report_title']?></h4></div> 
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

    <!-- inject:js -->
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
	<script src="assets/js/popup-confirm.js"></script>
    <!-- End custom js for this page -->
	
  </body>
</html>
