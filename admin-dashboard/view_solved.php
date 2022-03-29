<?php
session_start();
if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
}
include "../create_conn.php";
$sql = "SELECT * FROM report WHERE resolved='1'";
$result = $conn->query($sql);
$conn->close();
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
        <?php include "header.php"; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
		  <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
				  
				  <div class="row">
				  
				
<div class="input-group mb-3 w-9 mx-4">
  <input type="text" class="form-control" id = "search-input" placeholder="Search report by term" aria-label="Text input with dropdown button">
  
  <div class="input-group-append">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-settings"></i></button>
    <div class="dropdown-menu">
      <a class="nav-link dropdown-item" id = "search-term">Search by term</a>
      <a class="nav-link dropdown-item" id = "search-id">Search by ID</a>
      <div role="separator" class="dropdown-divider"></div>
      <a class="dropdown-item">Cancel</a>
    </div>
  </div>
</div>
                      
					 
					 
                      <div class = "w-95">
					  <button type="button" class="btn btn-primary btn-lg btn-block mx-4">
                        <i class="mdi mdi-magnify"></i>Search</button>
                    </div>		

                   
                    </div>	
					
                    </div>			  
						</div>
							</div>
		  
             <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-success">Solved Reports</h4>
                    <div class="table-responsive" id = "table-view">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
							<th>Date Resolved</th>
                            <th>Name</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            while($row=$result->fetch_assoc())
                            {
                            ?>
                            <?php
                          //binding address
                            $id = $row["REPORT_ID"];
                            $url = 'report.php';
                            $url .= '?reportid=';
                            $url .= $id;
                            ?>
                            
						 <tr data-url=<?= $url ?>>
                            <td><?php echo $row['REPORT_ID']; ?></td>
							<td><?php echo $row['DATE_RESOLVED']; ?></td>
                            <td><?php echo $row['USER_NAME']; ?></td>
							<td><?php echo $row['report_title']; ?></td>
                          </tr>
                            <?php } ?>
                          <!-- <tr data-url="report.php">
                            <td>001</td>
							<td>21/02/2022</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
						   <tr data-url="report.php">
                            <td>002</td>
							<td>21/02/2022</td>
                            <td>Alice</td>
							<td>Organise Event</td>
                          </tr>
						   <tr data-url="report.php">
                            <td>002</td>
							<td>21/02/2022</td>
                            <td>Alice</td>
							<td>Organise Event</td>
                          </tr>
                          <tr data-url="report.php">
                            <td>002</td>
							<td>21/02/2022</td>
                            <td>Alice</td>
							<td>Organise Event</td>
                          </tr>
                          <tr data-url="report.php">
                            <td>003</td>
							<td>21/02/2022</td>
                            <td>Kondo</td>
							<td>Sponsorship</td>
                          </tr>
                          <tr data-url="report.php">
                            <td>004</td>
							<td>21/02/2022</td>
                            <td>Flash</td>
							<td>Charity Event</td>
                          </tr>
                          <tr data-url="report.php">
                            <td>001</td>
							<td>21/02/2022</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
                          <tr data-url="report.php">
                            <td>001</td>
							<td>21/02/2022</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr>
                          <tr data-url="report.php">
                            <td>001</td>
							<td>21/02/2022</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                          </tr> -->
                        </tbody>
                      </table>
                       
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
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
	<script src="assets/js/placeholder.js"></script>
	<script src="assets/js/table-hover.js"></script>
    <!-- End custom js for this page -->
	
  </body>
</html>