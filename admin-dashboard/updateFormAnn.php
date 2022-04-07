<?php
session_start();
if(!isset($_SESSION['success'])){
	header('location:index.php');
	exit;
}
?>

<?php
  include "../create_conn.php";
  $id = $_GET['editId'];
  $qr = "SELECT * FROM announcement WHERE id='$id'";
  $exec = $conn->query($qr);
  $editA = $exec->fetch_assoc();
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
        <div class="main-panel">
          <div class="content-wrapper">
             <div class="row">
			   <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Announcement Edit</h4>
                    <form class="forms-sample" id="updateForm" method="post" action="updateAnn.php">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $id;?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Title: </label>
                        <text type="text" name="title" class="form-control" id="title"><?= $editA['title'] ?></text>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Summary: </label>
                        <textarea class="form-control" name="summary" id="summary" rows="20"><?= $editA['summary'] ?></textarea>
                      </div> 
                      <div class="form-group">
                        <label for="exampleTextarea1">Content: </label>
                        <textareaMCE class="form-control" name="content" id="content" rows="20"><?= $editA['content'] ?></textareaMCE>
                      </div>
                      
					<div class = "row">
					<input class="btn btn-primary mr-2" name="update" value="Update" type="submit"></input>
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
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

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