<?php
session_start();
if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
}

include "../create_conn.php";
$sql = "SELECT * FROM report";
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
      <?php include "navigation.php"; ?>
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
                    <h4 class="card-title">All Reports</h4>
                    <div class="table-responsive" id = "table-view">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
							<th>Date</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($rows=$result->fetch_assoc())
                            {
                              
                          ?>
                          <?php
                          //binding address
                            $id = $rows["REPORT_ID"];
                            $url = 'report.php';
                            $url .= '?reportid=';
                            $url .= $id;
                            ?>
						 <tr data-url=<?= $url ?>>
                            <td><?php echo $rows['REPORT_ID'];?></td>
							<td><?php echo $rows['DATE_RECEIVED'];?></td>
                            <td><?php echo $rows['USER_NAME'];?></td>
							<td><?php echo $rows['report_title'];?></td>
              <?php
                if($rows['resolved']==false)
                {
                  echo '<td><label class="badge badge-danger">Pending</label></td>';
                }
                else {
                  echo '<td><label class="badge badge-success">Completed</label></td>';
                } ?>
                          </tr>
                          <?php } ?>
                          <!-- <tr data-url="report.php">
                            <td>001</td>
							<td>21/02/2022</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                            <td><label class="badge badge-success">Completed</label></td>
                          </tr>
						   <tr data-url="report.php">
                            <td>002</td>
							<td>21/02/2022</td>
                            <td>Alice</td>
							<td>Organise Event</td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
						   <tr data-url="report.php">
                            <td>002</td>
							<td>21/02/2022</td>
                            <td>Alice</td>
							<td>Organise Event</td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
                          <tr data-url="report.php">
                            <td>002</td>
							<td>21/02/2022</td>
                            <td>Alice</td>
							<td>Organise Event</td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
                          <tr data-url="report.php">
                            <td>003</td>
							<td>21/02/2022</td>
                            <td>Kondo</td>
							<td>Sponsorship</td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
                          <tr data-url="report.php">
                            <td>004</td>
							<td>21/02/2022</td>
                            <td>Flash</td>
							<td>Charity Event</td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
                          <tr data-url="report.php">
                            <td>001</td>
							<td>21/02/2022</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
                            <td><label class="badge badge-success">Completed</label></td>
                          </tr>
                          <tr data-url="report.php">
                            <td>001</td>
							<td>21/02/2022</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
							<td><label class="badge badge-success">Completed</label></td>
                          </tr>
                          <tr data-url="report.php">
                            <td>001</td>
							<td>21/02/2022</td>
                            <td>Dave</td>
							<td>Complaint about Desa</td>
							<td><label class="badge badge-success">Completed</label></td>
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