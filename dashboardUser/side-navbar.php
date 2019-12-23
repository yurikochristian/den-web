<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="img/pico01.jpeg" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
        <h1 class="h4"><?php echo $_SESSION['nama'];?></h1>
        <p><?php echo $_SESSION['role']?></p>
    </div>
    </div>
    <ul class="list-unstyled">
        <li><a href="index.php">Profil</a></li>
    </ul>
</nav>