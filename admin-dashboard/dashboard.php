<?php
session_start();
if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
}
?>
<?php
              include "../create_conn.php";
              $sqlsov = "SELECT COUNT(*) AS totals FROM report WHERE resolved='1'";
              $sqlusov = "SELECT COUNT(*) AS totalu FROM report WHERE resolved='0'";
              $sqltd = "SELECT COUNT(*) AS totaltoday FROM report WHERE DATE(DATE_RECEIVED)";
              $resultsov = $conn->query($sqlsov);
              $resultusov = $conn->query($sqlusov);
              $resulttd = $conn->query($sqltd);
              $conn->close();
              $data3 = $resulttd->fetch_assoc();
              
              ?>
              <?php $data1 = $resultsov->fetch_assoc();?>
              <?php $data2 = $resultusov->fetch_assoc();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title> 
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css"> -->
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
            <div class="row"> 
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card" id = "date-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start ">
                          <h3 class="mb-0" id = "time"></h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                      </div>
					  <div class="col-3">
                        <div class="icon icon-box-info" >
						<span class="mdi mdi-calendar-clock"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal " id = "date1"></h6>
                  </div>
                </div>
              </div>
            
			  <div class="col-xl-4 col-sm-6 grid-margin stretch-card" id = "today-card">
                <div class="card hover">
				<a href="view_unsolved.php">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?= $data3['totaltoday'] ?></h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span class="mdi mdi-pencil-box"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Reports Today</h6>
                  </div>
                </div>
				</a>
              </div>
			  
			  <div class="col-xl-4 col-sm-6 grid-margin stretch-card" id = "unsolved-card">
                <div class="card hover">
				<a href="view_unsolved.php">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?= $data2['totalu'] ?></h3>
                          <p class="text-danger ml-2 mb-0 font-weight-medium">+<?= $data2['totalu']-$data3['totaltoday'] ?></p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span class="mdi mdi-arrow-top-right"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Reports Unsolved</h6>
                  </div>
                </div>
				</a>
              </div>
			  
            </div>
            
              
            <div class="row">
               <div class="col-md-4 grid-margin stretch-card">
                <div class="card ">
                  <div class="card-body">
                    <h4 class="card-title">Reports Statistic</h4>
                    <canvas id="transaction-history" class="transaction-chart"></canvas>
					<a href="view_unsolved.php">
                    <div class="d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3 danger-hover">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Total Unsolved</h6>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0" ><?php echo($data2['totalu']);?></h6>
                      </div>
                    </div>
					</a>
					<a href="view_solved.php">
                    <div class="d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3 success-hover">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Total Solved</h6>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0" ><?php echo($data1['totals']);?></h6>
                      </div>
                    </div>
					</a>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Reports Today</h4>
                    <span class="card-description font-weight-normal" id = "date2"></span>
					 <span class="card-description font-weight-normal" >, </span>
					 <span class="card-description font-weight-normal" id = "day"></span>
                    <div class="table-responsive">
                    <?php
                      include "../create_conn.php";
                      $sql = "SELECT * FROM report";
                      $result = $conn->query($sql);
                      $conn->close();
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr data-url="">
                            <th>ID</th>
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
                          <tr data-url=<?php echo $url; ?>>
                            <td><?php echo $rows['REPORT_ID'];?></td>
                            <td><?php echo $rows['USER_NAME'];?></td>
							              <td><?php echo $rows['report_title'];?></td>
                            <?php 
                              if($rows['resolved']==true)
                              {
                            echo'<td><label class="badge badge-success">Completed</label></td>';
                              }
                            else {
                              echo'<td><label class="badge badge-danger">Pending</label></td>';
                              } ?>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <script type="text/javascript">var sov= <?= $data1['totals'] ?>;
          var usov = <?= $data2['totalu'] ?>;
          </script>
          <script type="text/javascript" src="assets/js/dashboard.js"></script>
         
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
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"> 
    </script>
	<script src="assets/js/date.js"></script>
	<script src="assets/js/table-hover.js"></script>
    <!-- End custom js for this page -->
	
  </body>
</html>