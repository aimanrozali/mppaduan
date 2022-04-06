<?php
session_start();
if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
}
?>
<?php
  include "../create_conn.php";
  $id = $_GET['bantuanId'];
  $sql = "SELECT * FROM bantuan WHERE id='$id'";
  $exec = $conn->query($sql);
  $bantuan = $exec->fetch_assoc();
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
						<div class="my-n2 sticky py-sm-2"><h4><?= $bantuan['title'] ?></h4></div> 
						<div>
                      <p class= "scrolly-145"><?= $bantuan['description'] ?></p> 
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
                      <p class="my-n2-5 scrolly-25" ><?= $bantuan['dateOpen'] ?></p>
                    </blockquote>
					</div>
					<div class = "col-6">
					<blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"><?= $bantuan['dateClosed'] ?></p>
                    </blockquote>
					</div>
					</div>
					
					<p class="card-description"> Link:
                    </p>
                    <blockquote class="blockquote h-8 my-n2">
                      <p class="my-n2-5 scrolly-25"><?= $bantuan['link'] ?></p>
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
                        <img src="<?= $bantuan['pic'] ?>" alt="" class="w-100">
                      </div>
                    </div>
                    <div>
				  <button class="btn btn-primary btn-block my-3"><h4 class="card-title w-100 my-1">Edit Details</h4> <span class="mdi mdi-pencil"></span></button>
				  <button class="btn btn-danger btn-block my-3"><h4 class="card-title w-100 my-1" id="delete"><a href="<?php echo htmlspecialchars("updateBantuan.php?"."deleteId=".$bantuan['id']); ?>">Delete Bantuan</h4> <span class="mdi mdi-delete"></span></button>
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