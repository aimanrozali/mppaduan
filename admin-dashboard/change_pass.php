<?php
  session_start();
  if(!isset($_SESSION['success'])){
    header('location:index.php');
    exit;
  }
?>

<script>
  //Magic script prevent refresh (form resubmitting)
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Change Password</h4>
                  <form class="forms-sample" id="forms-popup" method="post" action="">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Admin name</label>
                      <input type="text" class="form-control" id="name" name = "name" placeholder="adminname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="email" name = "email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Old Password</label>
                      <input type="password" class="form-control" id="oldpass" name = "oldpass" placeholder="Old Password" required>
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputPassword1">New Password</label>
                      <input type="password" class="form-control" id="newpass" name = "newpass" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm New Password</label>
                      <input type="password" class="form-control" id="conpass" name = "conpass" placeholder="New Password" required>
                    </div>
                  </form>
                  <div class = "row">
                    <button class="btn btn-primary mr-2" id = "popup-confirm-form" value="submit">Submit</button>
                    <a href="dashboard.php"><button class="btn btn-dark">Cancel</button></a>
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
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/popup-confirm-form.js"></script>
    <script src="assets/js/popup-danger.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>

<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $oldpass = $_POST['oldpass'];
  $newpass = $_POST['newpass'];
  $conpass = $_POST['conpass'];
  if ($name && $email && $oldpass && $newpass && $conpass) {
    include "../create_conn.php";
    $sql = "SELECT * FROM adminlogin WHERE admin_name = '$name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $rows=$result->fetch_assoc();
      $pass = $rows['admin_pass'];
        if ($oldpass == $rows["admin_pass"]) {
          if ($newpass == $conpass) {
            $sql = "UPDATE adminlogin SET  admin_pass = '$newpass' WHERE  admin_name = '$name'";
              if($conn->query($sql) === true){
                echo '<script>alert("Password changed")</script>';
                echo '<script>window.location.replace("dashboard.php")</script>';
              } else {
                echo '<script>alert("Error in processing")</script>';
              }
          } else {
            echo '<script>alert("Pass not same with confirmation")</script>';
          }
        } else {
          echo '<script>alert("No same pass")</script>';
        }    
    } else {
      echo '<script>alert("No username found")</script>';
    }
    $conn->close();
  }
?>