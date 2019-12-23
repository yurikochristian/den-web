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
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Region</th>
                      <th scope="col">Price</th>
                      <th scope="col">Rooms</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $id_vendor = $_SESSION['id'];
                      $sql = "SELECT * FROM den_den WHERE id_vendor=$id_vendor";
                      $query = mysqli_query($db, $sql);

                      while($items= mysqli_fetch_assoc($query)){
                          echo "<tr>";
                          echo "<td>".$items['id_den']."</td>";
                          echo "<td>".$items['name']."</td>";
                          echo "<td>".$items['address']."</td>";
                          echo "<td>".$items['region']."</td>";
                          echo "<td>".$items['price']."</td>";
                          echo "<td>".$items['rooms']."</td>";

                          echo "<td>";
                          echo "<button class ='btn btn-warning editModal'><span class='fa fa-edit'></span>Edit</button>";
                          echo "<button class ='btn btn-danger'><span class='fa fa-trash'></span>Delete</button>";
                          echo "</td>";

                          echo "</tr>";
                      }
                    ?>
                    
                  </tbody>
                </table>
                <!-- Modal content-->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                  Tambahkan Data
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Menambahkan Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Form -->
                      <form action="proses-daftar.php" method="POST" name="daftar">
                        <div class="form-group">
                          <label for="Nama">Nama</label>
                          <input type="text" class="form-control" id="id" aria-describedby="emailHelp" placeholder="Masukkan nama homestay" name="nama">
                        </div>
                        <div class="form-group">
                          <label for="address">Alamat</label>
                          <input type="text" class="form-control" id="address" placeholder="Masukkan alamat" name="alamat">
                        </div>
                        <div class="form-group">
                          <label for="region">Region</label>
                          <input type="text" class="form-control" id="region" placeholder="Masukkan daerah" name="region">
                        </div>
                        <div class="form-group">
                          <label for="harga">Harga per hari</label>
                          <input type="text" class="form-control" id="pass" placeholder="Harga" name="harga">
                        </div>
                        <div class="form-group">
                          <label for="max pax">Jumlah Maksimal per Kamar</label>
                          <input type="text" class="form-control" id="max_pax" placeholder="Max Pax" name="max_pax">
                        </div>
                        <div class="form-group">
                          <label for="charge">Denda</label>
                          <input type="text" class="form-control" id="denda" placeholder="Biaya denda per pelanggaran"name="denda">
                        </div>
                        <div class="form-group">
                          <label for="fotoid">Jumlah Kamar</label>
                          <input type="text" class="form-control" id="jml_kamar" placeholder="Masukkan jumlah"name="jml_kamar">
                        </div>
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea type="text" class="form-control" id="deskripsi" placeholder="Deskripsikan homestay anda"name="deskripsi"></textarea>
                        </div>
                        <input type="submit" value="daftar" name="daftar" class="btn btn-primary">
                      </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                 
                <!-- UPDATE MODALS BOOTSTRAP 4 -->
                <!-- Modal -->
                <div class="modal fade " id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Form -->
                      <form action="proses-edit.php" method="POST" name="update">
                        <input type="hidden" id="update-id-den" name="id-den">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="update-id" aria-describedby="emailHelp" placeholder="Enter ID" name="nama">
                        </div>
                        <div class="form-group">
                          <label for="username">Alamat</label>
                          <input type="text" class="form-control" id="update-username" placeholder="Enter username" name="alamat">
                        </div>
                        <div class="form-group">
                          <label for="Email">Region</label>
                          <input type="text" class="form-control" id="update-email" placeholder="Enter email" name="region">
                        </div>
                        <div class="form-group">
                          <label for="status">Harga</label>
                          <input type="text" class="form-control" id="update-status" placeholder="Enter status" name="harga">
                        </div>
                        <div class="form-group">
                          <label for="notelp">Max Pax</label>
                          <input type="text" class="form-control" id="max_pax" placeholder="Masukkan maximum person"name="max_pax">
                        </div>
                        <div class="form-group">
                          <label for="denda">Denda</label>
                          <input type="text" class="form-control" id="update-kenegaraan" placeholder="Biaya denda"name="denda">
                        </div>
                        <div class="form-group">
                          <label for="room">Jumlah Kamar</label>
                          <input type="text" class="form-control" id="update-fotoid" placeholder="Masukkan Jumlah Kamar"name="jml_kamar">
                        </div>
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea type="text" class="form-control" id="update-premium" placeholder="Deskripsi homestay anda"name="deskripsi"></textarea>
                        </div>
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                      </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End of EDIT MODAL -->
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