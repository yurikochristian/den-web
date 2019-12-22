<?php
session_start();
include_once('db-con.php');
$database = new database();
$id=$_SESSION['id'];
$query="SELECT * FROM den_booking b LEFT JOIN den_den d ON b.id_den=d.id_den WHERE id_user=$id";
$halaman = 10;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$result = mysqli_query($database->koneksi, $query);
$total = mysqli_num_rows($result);
$pages = ceil($total/$halaman); 
$query .= " LIMIT $mulai, $halaman";
$result = mysqli_query($database->koneksi, $query);
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
</head>
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}

input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #FF9900;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
.container {
  padding: 16px;
}
.pilih{
  margin:0px 100px 0px 100px;
}

.pilih tr td img{
  height: 250px;
  width: 250px;
}
label{
  height: 60px;
}

</style>
<?php include "header.php"; ?>

<div class="container-fluid bg-3">
    <div class="col-md-7" style="padding-top: 125px; padding-left: 200px;">
      <div class="konten">
          <div class="caption">
            <p>Bookingan</p>
            <h2 id="reg">Den</h2>
            <img src="img/yeh.png">
            <p style="color:grey;">Cari Den yang sudah kamu booking</p>
            <br><br><br><br><br><br>
            <img src="img/asset1.png">
          </div>
      </div>
    </div>
  </div>
</div>
<?php
while($den = mysqli_fetch_assoc($result)){
  require "book-search-list.php";
} 
?>
<center>
<nav aria-label="...">
<ul class="pagination">
<?php
if($pages>1){
  for($i=1;$i<=$pages;$i++){
    if($i == $page){
      echo "<li class='page-item active'><a class='page-link'>$i</a></li>";
    }
    else{
      echo "<li class='page-item'><a class='page-link' href='?halaman=$i'>$i</a></li>";
    }
  }
}
?>
</ul>
</nav>
</center>
<?php include "footer.php";?>
</body>
</html>