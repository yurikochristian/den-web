<?php
  session_start();
  if($_SESSION['role'] != 'vendor'){
    header("location:../oops.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page Den</title>
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
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
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
              <h2 class="no-margin-bottom">Admin Den</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                
                <!-- Table Editable-->
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Booking Date</th>
                      <th scope="col">Duration</th>
                      <th scope="col">Person</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $id_vendor = $_SESSION['id'];
                      $sql = "SELECT * FROM den_den d INNER JOIN den_booking b ON d.id_den=b.id_den WHERE d.id_vendor=$id_vendor";
                      $query = mysqli_query($db, $sql);

                      while($items= mysqli_fetch_assoc($query)){
                          $id = $items['book_id'];
                          echo "<tr>";
                          echo "<td>".$items['name']."</td>";
                          echo "<td>".$items['book_date']."</td>";
                          echo "<td>".$items['duration']."</td>";
                          echo "<td>".$items['person']."</td>";

                          echo "<td>";
                          echo "<a href='checkin.php?book_id=$id' class ='btn btn-warning editModal'>Check In</a>";
                          echo "<a href='checkout.php?book_id=$id' style='margin-left:20px;'class ='btn btn-danger'>Check Out</a>";
                          echo "</td>";

                          echo "</tr>";
                      }
                    ?>
                    
                  </tbody>
                </table>
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
    <script>
    $(document).ready(function(){
      $('.editModal').on('click', function(){
        $('#editModal').modal('show');
        $tr = $(this).closest('tr');
        var data =  $tr.children("td").map(function(){
          return $(this).text();
        }).get();

        console.log(data);
        $('#update-id-den').val(data[1]);
        $('#update-id').val(data[1]);
        $('#update-username').val(data[2]);
        $('#update-email').val(data[3]);
        $('#update-status').val(data[4]);
        $('#update-notelp').val(data[5]);
        $('#update-email-verified').val(data[6]);
      });
    });
    
    </script>
    <!-- End Script for Edit Modal -->
  </body>
</html>