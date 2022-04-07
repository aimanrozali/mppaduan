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
  <script src="https://cdn.tiny.cloud/1/uyccmfybr5gp0lpj6urgkep0ffgpjqnvawwxxrn4v2nt4brx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
                    <h4 class="card-title">Announcement Registration</h4>
                    <form class="forms-sample" id="forms-popup" method="post" action="announceAdd.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Title: </label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description: </label>
                        <textarea class="form-control" name="summary" id="summary" rows="20" placeholder="Description"></textarea>
                      </div> 
                      <div class="form-group">
                        <label for="exampleTextarea1">Content: </label>
                        <textareaMCE class="form-control" name="content" id="content" rows="20" placeholder="Description"></textareaMCE>
                      </div>
                      <div class="col-md-5 grid-margin stretch-card">
                <div class="card ">
                  <div class="card-body">
                      <div class="drop-zone">
                       <span class="drop-zone__prompt">Drop image here or click to upload</span>
                           <input type="file" name="image" id="uploadImage" class="drop-zone__input">
                    </div>
                    <div>
					
                  </div>
                </div>
                    
					<div class = "row">
            <br>
					<input class="btn btn-primary mr-2" onclick="data()" value="Submit" type="submit"></input>
          </div>
          </form>
          <div id="err"></div>
                  
                  </div>
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
	<script src="assets/js/dropzone.js"></script>
    <script src="assets/js/dashboard.js"></script>
	<script src="assets/js/date.js"></script>
	<script src="assets/js/table-hover.js"></script>
	<script src="assets/js/popup-confirm-form.js"></script>
  <script type="text/javascript" src="annSubmit.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- End custom js for this page -->
    <script>
    tinymce.init({
      selector: 'textareaMCE',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
	
  </body>
</html>