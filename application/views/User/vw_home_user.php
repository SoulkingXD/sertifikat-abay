<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Certificate BY Bay</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico" />
  </head>
  <body>

       <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?= base_url(); ?>assets/images/logosk.png" alt="logo" style="width:100px;height:100px;" /></a>
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face2.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $this->session->userdata('nama')?></p>
                </div>
              </a>             
            </li>            
            
            <li class="nav-item nav-logout d-none d-lg-block">
              <a href="<?php echo base_url(); ?>auth/logout" class="nav-link" >
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home">
                <span class="menu-title">Profil</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="cetak_serti">
                <span class="menu-title">Cetak Sertifikat</span>
                <i class="mdi mdi-plus-box menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-account"></i>
                </span> Profil
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
  
        </div>
        <center>
              <div class="card mb-3" style="width: 500px;">
                <div class="card-body">
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                    <center>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title text-body">Username : <?= $user['username']; ?></h5>
                          <p class="card-text text-body">Email : <?= $user['email']; ?>.</p>
                          <p class="card-text text-body">Full Name : <?= $user['fullname']; ?>.</p>
                          <p class="card-text"><small class="text-muted"><?= $user['created_at']; ?></small></p>
                        </div>
</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </center>
      </div>

   
      <footer class="footer">
            
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url(); ?>assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>assets/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url(); ?>assets/js/dashboard.js"></script>
    <script src="<?= base_url(); ?>assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
            
       