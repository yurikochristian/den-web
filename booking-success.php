<?php
session_start();
include_once("db-con.php");
$database = new database();
if(isset($_POST['submit'])){
    $tgl = $_POST['tgl'];
    $bln = $_POST['bulan'];
    $thn = $_POST['tahun'];
    $date = $thn."-".$bln."-".$tgl;
    $durasi = $_POST['lamamenginap'];
    $jml = $_POST['jumlahmenginap'];
    $id_den = $_POST['id_den'];
    $id_user = $_SESSION['id'];
}
$query = "INSERT INTO den_booking(id_user,id_den,book_date,status,person,duration) VALUES($id_user,$id_den,'$date','booking',$jml,$durasi)";
$query = mysqli_query($database->koneksi,$query);
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
  <script src="js/jquery1.min.js"></script>
  <script src="js/bootstrap2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
</head>
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
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

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>

<!-- Navbar -->
<?php include "header.php";?>

<div class="container-fluid bg-3">
    <div class="col-md-12" style="padding-top: 200px;">
        <center>
            <img src="img/reg-success.png" style="height:300px;margin-top:-150px;">
            <h2>Booking Sukses</h2>
            <p></p>
        </center>
    </div>
</div>

<?php include "footer.php";?>

</body>
</html>
