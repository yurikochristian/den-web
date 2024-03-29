  <?php 
    session_start();
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>DEN-in Aja!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery1.min.js"></script>
    <script src="js/bootstrap2.min.js"></script>
  </head>
  

  <!-- Navbar -->
  <?php include 'header.php';?>

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
        <div class="item active" style="height:93vh;">
          <img src="img/homepage.png"style="object-fit: contain;">
        <div class="carousel-caption" style="padding-bottom: 300px !important;">
          <h1>SELAMAT DATANG!</h1>
          <?php
            if(isset($_SESSION['is_login']))
              echo '<button><a href="search.php">Explore</a></button>';
            else
              echo '<button><a href="register.php">Daftar</a></button>';
          ?>
        </div>
        </div>

        <div class="item" style="height:93vh;">
          <img src="img/homepage.png"style="object-fit:contain;">
          <div class="carousel-caption" style="padding-bottom: 300px !important;">
          <h1>Rasakan mudahnya mencari homestay.</h1>
          <?php
            if(isset($_SESSION['is_login']))
              echo '<button><a href="search.php">Explore</a></button>';
            else
              echo '<button><a href="register.php">Daftar</a></button>';
          ?>
        </div>
        </div>
      
        <div class="item" style="height:93vh;">
          <img src="img/Test1.jpg"style="object-fit:contain;width:100vw;">
          <div class="carousel-caption" style="padding-bottom: 300px !important;">
          <h1>Coba pengalaman dengan DEN sekarang!</h1>
          <?php
            if(isset($_SESSION['is_login']))
              echo '<button><a href="search.php">Explore</a></button>';
            else
              echo '<button><a href="register.php">Daftar</a></button>';
          ?>
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
              <img src="img/yeh.png"></h3>
              <p>Nikmati fitur-fitur pada Den</p>
            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="konten">
          <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
            <div style="height: 138px;">
              <img src="img/booking.jpg" style="object-fit: cover;width:250px;">
            </div>
            <div class="caption">
              <h3 id="nama">Booking Homestay</h3>
              <p>Jangan sampai kehilangan homestay kamu inginkan</p>
            </div>
          <!-- </a> -->
        </div>
      </div>
      <div class="col-md-3">
        <div class="konten">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
            <img src="img/Test1.jpg">
            <div class="caption">
              <h3 id="nama">Cari Den</h3>
              <p>Tidak perlu bingung lagi untuk mencari homestay yang terbaik untuk-mu</p>
            </div>
          <!-- </a> -->
        </div>
      </div>
      <div class="col-md-3">
        <div class="konten">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
            <img src="img/Test1.jpg">
            <div class="caption">
              <h3 id="nama">Premium Owner</h3>
              <p>Promosikan homestay-mu agar berbda dengan homestay yang lain</p>
            </div>
          <!-- </a> -->
        </div>
      </div>
    </div>
  </div>

  </div>

  <div class="container-fluid bg-3 text-center" style="width:50vw;">
    <div class="col-md-4">
        <div class="konten">
            <img src="img/Star.png">
            <div class="caption">
              <h2 id="nama">666</h2>
              <p>Homestay Seekers</p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="konten">
            <img src="img/Globe.png">
            <div class="caption">
              <h2 id="nama">5</h2>
              <p>Kota</p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="konten">
            <img src="img/City.png">
            <div class="caption">
              <h2 id="nama">2390</h2>
              <p>Homestay</p>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Fourth Container (Grid) -->
  <div class="container-fluid bg-4 text-center">    
    <h5>Den</h5><h3 class="margin">Yang terpopuler <br><img src="img/yeh.png"></h3>
    <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="konten">
          <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
            <img src="img/Test1.jpg">
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
            <img src="img/Test1.jpg">
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
            <img src="img/Test1.jpg">
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
    <h5>Testimoni</h5><h3 class="margin">Pengguna Den <br><img src="img/yeh.png"></h3>
    <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
            <img src="img/Test1.jpg">
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
            <img src="img/Test1.jpg">
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
            <img src="img/Test1.jpg">
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
    <?php
      if(isset($_SESSION['is_login']))
        echo '<button><a href="search.php">Explore</a></button>';
      else
        echo '<button><a href="register.php">Daftar</a></button>';
    ?>
  </div>

  <?php include "footer.php";?>

  </body>
  </html>
