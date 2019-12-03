<?php 
    session_start();
    include_once('db-con.php');
    $database = new database();
    if(! isset($_SESSION['is_login']))
    {
    header('location:login1.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>DEN-in Aja!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap1.min.css">
  <script src="js/jquery1.min.js"></script>
  <script src="js/bootstrap2.min.js"></script>
  <style>
    .dropdown li {
        padding: 16px;
    }

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar1 navbar-default">
  <div class="container">
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> -->
      <a class="navbar-brand1" href="#">Den</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">  
        <li><a class="ya" href="#">Beranda</a></li>
        <li><a href="#">Cari Den</a></li>
        <li><a href="#">Tentang Den</a></li>
        <div class="dropdown">
            <li><?php echo $_SESSION['nama'] ?></li>
            <div class="dropdown-content">
                <a class="dropdown-item" href="adminPage/dashboard.php">Dashboard</a>
                <a class="dropdown-item" href="logout.php">Keluar</a>
            </div>
        </div>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<!-- <div class="container"> -->
  <!-- <h2>Carousel Example</h2>   -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="homepage.png"style="width:100%;">
       <div class="carousel-caption">
        <h3>AKHIRNYA BISA YA TUHAN</h3>
        <p>om santhi, santhi, santhi om</p>
      </div>
      </div>

      <div class="item">
        <img src="homepage.png"style="width:100%;">
        <div class="carousel-caption">
        <h3>YES!!!!!!!!!!!!!!!!!!!!!!!!</h3>
        <p>berhasil, yahoooo...</p>
      </div>
      </div>
    
      <div class="item">
        <img src="Test1.jpg"style="width:100%;">
        <div class="carousel-caption">
        <h3>Oh</h3>
        <p>yes</p>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon1">&#10140;</span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon2">&#10140;</span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- </div> -->

<!-- Second Container -->
<div class="container-fluid bg-2"> 
  <div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="left">
          <div class="caption">
            <p>Apa saja yang bisa didapat di</p>
            <h3 id="nama">Den <br>
            <img src="yeh.png"></h3>
            <p>Booking ribuan homestay yang terdaftar pada Den</p>
          </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="konten">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="Test1.jpg">
          <div class="caption">
            <h5 id="nama">Booking Homestay</h5>
            <p>Gak tau isi apa</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-3">
      <div class="konten">
       <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="Test1.jpg">
          <div class="caption">
            <h5 id="nama">Cari Den</h5>
            <p>Apalagi ini</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-3">
      <div class="konten">
       <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="Test1.jpg">
          <div class="caption">
            <h5 id="nama">Premium Owner</h5>
            <p>Apalagi ini</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
  </div>
</div>

</div>

<!-- Third Container -->
<div class="container-fluid bg-3 text-center">
  <div class="col-md-4">
      <div class="konten">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="Star.png">
          <div class="caption">
            <h2 id="nama">666</h2>
            <p>Homestay Seekers</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="konten">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="Globe.png">
          <div class="caption">
            <h2 id="nama">5</h2>
            <p>Kota</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="konten">
       <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="City.png">
          <div class="caption">
            <h2 id="nama">2390</h2>
            <p>Homestay</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
  </div>
</div>

<!-- Fourth Container (Grid) -->
<div class="container-fluid bg-4 text-center">    
  <h5>Den</h5><h3 class="margin">Yang terpopuler <br><img src="yeh.png"></h3>
  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="konten">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="Test1.jpg">
          <div class="caption">
            <p>666K/Kamar</p>
            <p id="nama">Homestay Denny</p>
            <p>Fasilitas Lengkap, semua yang anda perlukan ada disini</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="konten">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="Test1.jpg">
          <div class="caption">
            <p>Gratis/Kamar</p>
            <p id="nama">Homestay Yuriko</p>
            <p>Gak tau isi apa</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="konten">
       <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="Test1.jpg">
          <div class="caption">
            <p>Gratis/Kamar</p>
            <p id="nama">Homestay Teguh</p>
            <p>Apalagi ini</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
  </div>
</div>
</div>

<!-- Fifth Container -->
<div class="container-fluid bg-5 text-center">
  <h5>Testimoni</h5><h3 class="margin">Pengguna Den <br><img src="yeh.png"></h3>
  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <img src="Test1.jpg">
          <div class="caption">
            <p id="nama">Denny</p>
            <p>Denny suka bermain game</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <!-- <a href="/w3images/nature.jpg" target="_blank"> -->
          <img src="Test1.jpg">
          <div class="caption">
            <p id="nama">Yuriko</p>
            <p>Gak tau manusia ini suka apa</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <!-- <a href="/w3images/nature.jpg" target="_blank"> -->
          <img src="Test1.jpg">
          <div class="caption">
            <p id="nama">Teguh</p>
            <p>Apalagi ini</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Sixth Container -->
<div class="bg-6 text-center">
  <h1>Coba pengalaman dengan Den sekarang!</h1>
  <button><a href="register.php">Daftar</a></button>
</div>

<!-- Seventh Container -->
<div class="container-fluid bg-7">
  <h3>Alamat</h3>
  <p>Jl. Raya Kampus Unud<br>Bukit Jimbaran, Badung</p>
  <h3>Telp</h3>
  <p>081999877909</p>
</div>

<!-- Footer -->
<footer class="bg-8 text-center">
  <p>Den</a></p> 
</footer>

</body>
</html>
