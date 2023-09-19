<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign up to login.</h6>
              <form class="pt-3" action="inc/proses.php" method="post" oninput='passwordUlang.setCustomValidity(passwordUlang.value != password.value ? "Passwords do not match." : "")'>
                <div class="form-group">
                  <input name="nama" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Name">
                </div>
                <div class="form-group">
                  <input name="alamat" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <input name="no" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="No. Hp">
                </div>
                <div class="form-group">
                      <input name="tgl" class="form-control form-control-lg" placeholder="Tanggal Lahir yyyy-mm-dd"/>
                </div>
                <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleSelectGender" name="level">
                      <option value="admin">Admin</option>
                      <option value="kasir">Kasir</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleSelectGender" name="jenkel">
                      <option value="laki-laki">Male</option>
                      <option value="perempuan">Female</option>
                    </select>
                </div>
                <div class="form-group">
                  <input name="username" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input name="passwordUlang" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Re-type Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="register" >SIGN UP</button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Already have an account? <a href="register.html" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
