<?php
  session_start();
  include_once("../db-con.php");
  $database = new database();
  $id_user = $_SESSION['id'];
  $query = "SELECT * FROM den_user WHERE id_user=$id_user";
  $result = mysqli_query($database->koneksi,$query);
  $user = $result->fetch_array();
  $nama = $user['user_name'];
  $notelp = $user['user_notelp'];
  $nat = $user['user_nationality'];
  $email = $user['user_email'];
  $pp = $user['profile_pic'];
  $idp = $user['foto_id'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Den</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.violet.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/den-01.jpg">
  </head>
  <body>
    <!-- Include config-->
    <?php include("config.php");?>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="../index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><strong>Den</strong></div>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Logout    -->
                <li class="nav-item"><a href="../logout.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <?php require("side-navbar.php") ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"> Den</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Profil</h3>
                    </div>
                    <div class="card-body">
                      <form action="edit-profile.php" method="post">
                        <div class="form-group">
                          <label class="form-control-label">Nama</label>
                          <input type="text" value="<?php echo $nama;?>" class="form-control" name="nama">
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Telp</label>
                          <input type="text" value="<?php echo $notelp;?>" class="form-control" name="telp">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Nationality</label>
                          <input type="text" value="<?php echo $nat;?>" class="form-control" name="nat">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Email</label>
                          <input type="email" value="<?php echo $email;?>" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Profile Picture</label>
                          <input type="file" value="<?php echo $pp;?>" class="form-control" name="pp">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Foto ID (KTP/SIM/Passport)</label>
                          <input type="file" value="<?php echo $idp;?>" class="form-control" name="idp">
                        </div>
                        <div class="form-group">
                          <input type="submit" name="submit" value="Signin" class="btn btn-primary">
                        </div>
                      </form>
                      <div class="form-group">
                          <a href="menjadi_vendor.php" name="vendor_wnb" value="Menjadi Vendor" class="btn btn-primary">Menjadi Vendor</a>
                        </div>
                    </div>
                  </div>
                </div>
          </section>
      </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/hehe.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>

    <!-- Script for Edit Modal -->
    
    <!-- End Script for Edit Modal -->
  </body>
</html>