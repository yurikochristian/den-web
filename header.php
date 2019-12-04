<nav class="navbar1 navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand1" href="index.php">Den</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="ya" href="index.php">Beranda</a></li>
        <li><a href="search.php">Cari Den</a></li>
        <li><a href="#">Tentang Den</a></li>
        <li><a href="<?php if(isset($_SESSION['is_login'])) echo "adminPage/dashboard.php"; else echo "login.php";?>">
        <?php if(isset($_SESSION['is_login']))
          {
            echo $_SESSION['nama'];
          }
          else{
            echo "Masuk";
          }?>
        </a></li>
      </ul>
    </div>
  </div>
</nav>