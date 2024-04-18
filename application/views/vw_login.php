
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sertifikat BY Abay</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <center>
                   <a class="navbar-brand brand-logo" href="index.html"><img src="<?= base_url(); ?>assets/images/logosk.png" alt="logo" style="width:200px;height:200px;" /></a>
               </center>
                <h4>Sertifikat Online</h4>
                <h6 class="font-weight-light">Login Dulu Bro.</h6>

				<?php

				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>

				<?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success_register');
					echo '</div>';
				}
				?>
				<form action="<?= base_url('auth'); ?>" method="post">

  
                  <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                  </div>
                  <div class="mt-3">
				  <button type="submit" class="btn btn-outline-primary">Login</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Belum Memiliki Akun? <a href="register" class="text-primary">Buat</a>
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
    <script src="<?= base_url(); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>/assets/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>/assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>
