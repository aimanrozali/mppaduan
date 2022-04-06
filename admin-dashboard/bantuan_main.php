<?php
session_start();
if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
}
?>
<?php
  include("../create_conn.php");
  $sql = "SELECT * FROM bantuan";
  $result = $conn->query($sql);
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
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body my-n2">
				  <h4 class="card-title w-100">Bantuan List</h4>
                     <div class="table-responsive-full my-n2">
                      <table class="table table-hover">
					   <thead>
                          <tr data-url="">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
							<th>Date Open</th>
							<th>Date Closed</th>
                            <th>Link</th>							
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            while($rows=$result->fetch_assoc()){
                              $id = $rows["id"];
                              $url = "bantuan_view.php?bantuanId=".$id;
                              ?>
                            
                          <tr data-url=<?= $url ?>>
                            <td><?= $rows['id'] ?></td>
                            <td><?= $rows['title'] ?></td>
							<td> <p class = "overflow-elipses mb-0"><?= $rows['description'] ?></p> </td>
                            <td><?= $rows['dateOpen'] ?></td>
							<td><?= $rows['dateClosed'] ?></td>
							<td><?= $rows['link'] ?></td>
						  </tr>
						  <?php }
              $conn->close(); ?>
                        </tbody>
                      </table>
                    </div>
                  <a href="bantuan_add.php">
				  <button class="btn btn-success btn-block my-4-2"><h4 class="card-title w-100 my-1">Add Bantuan</h4> </button>
				  </a>
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
	    <script src="assets/js/owl-carousel-custom.js"></script>

	<script src="assets/js/date.js"></script>
	<script src="assets/js/table-hover.js"></script>
	<script src="assets/js/popup-confirm.js"></script>
	<script src="assets/js/popup-add-announce.js"></script>

    <!-- End custom js for this page -->
	
  </body>
</html>