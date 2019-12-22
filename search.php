<?php
include_once('db-con.php');
$database = new database();
$query="select * from den_den";
if(isset($_POST['filter'])){
  $keyword=$_POST['katakunci'];
  $option=$_POST['option'];
  $maxperson=$_POST['maxperson'];
  $terendah=$_POST['hargaterendah'];
  $tertinggi=$_POST['hargatertinggi'];
  $conditions=array();
  if(! empty($keyword))
    $conditions[] = "name LIKE '%$keyword%'";
  if(! empty($option))
    $conditions[] = "region='$option'";
  if(! empty($maxperson))
    $conditions[] = "max_pax>='$maxperson'";
  if(! empty($terendah))
    $conditions[] = "price>=$terendah";
  if(! empty($tertinggi))
    $conditions[] = "price<=$tertinggi";
  $query;
  if (count($conditions) > 0) {
    $query .= " WHERE " . implode(' AND ', $conditions);
  }
}
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
            <p>Cari</p>
            <h2 id="reg">Den</h2>
            <img src="img/yeh.png">
            <p style="color:grey;">Cari homestay sesuai kebutuhanmu</p>
            <br><br><br><br><br><br>
            <img src="img/asset1.png">
          </div>
      </div>
    </div>
    <div class="col-md-5">
       <form action="search.php" method="post" style="border:1px solid #ccc; width: 360px; border-radius: 5px; background-color:#f1f1f1 " name="filter">
          <div class="biodata" style="padding: 20px;">
            <br>
            <table width="315px">
              <tr>
                <td colspan="2"><input type="text" name="katakunci" placeholder="Kata Kunci" value=""></td>
              </tr>
              <tr>
                <td>
                    <select style="width: 150px;height: 47px;border:none;margin-top:-25px;" name="option">
                      <option value="" >Region</option>
                      <?php 
                            $query2 = "SELECT DISTINCT region FROM den_den";
                            $rs = mysqli_query($database->koneksi, $query2);
                            while ($reg = mysqli_fetch_assoc($rs)){
                              echo '<option value="'.$reg['region'].'">'.$reg['region'].'</option>';
                            }
                      ?>
                    </select>
                </td>
                <td><input type="text" name="maxperson" placeholder="Jumlah orang" value="" style="width: 150px; float: right;"></td>
              </tr>
              <tr>
                <td><input type="text" name="hargaterendah" placeholder="Harga Terendah" value="" style="width: 150px; float: left;"></td>
                <td><input type="text" name="hargatertinggi" placeholder="Harga Tertinggi" value="" style="width: 150px; float: right;"></td>
              </tr>
            </table>
            
            <div class="clearfix">
              <button type="submit" class="cari" name="filter">Cari</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>
<?php
while($den = mysqli_fetch_assoc($result)){
  require "search-list.php";
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