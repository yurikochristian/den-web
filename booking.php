<!DOCTYPE html>
<html lang="en">
<head>
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

</style>
<body>

<?php include "header.php";?>

<div class="container-fluid bg-3">
  <div class="col-md-4" style="padding-top: 350px;">
      <div class="konten">
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 125px; padding-left: 0px;">
      <div class="konten">
          <div class="caption">
            <p>Booking</p>
            <h2 id="reg">Homestay Denny</h2>
            <img src="img/yeh.png">
            <p>Isi data menginapmu di sebelah kanan</p>
          </div>
      </div>
    </div>
    <div class="col-md-4">
       <form action="#" style="border:1px solid #ccc; width: 360px; border-radius: 5px; background-color:#f1f1f1 ">
          <div class="biodata" style="padding: 20px;">
            <br>

            <table width="315px">
              <tr>
                <td width="105px"><input type="text" name="tgl" placeholder="Tgl"required style="width: 100px; "></td>
                <td width="105px"><input type="text" name="bulan" placeholder="Bulan" required style="width: 100px; "></td>
                <td width="105px"><input type="text" name="tahun" placeholder="Tahun"required style="width: 100px; "></td>
              </tr>
              
              <tr>
                <td colspan="3"><input type="text" name="lamamenginap" placeholder="Lama Menginap (Hari)" required> 
              </tr>
              <tr>
                <td colspan="3"><input type="text" name="jumlahmenginap" placeholder="Jumlah Menginap" required> 
              </tr>
            </table>
            
            <div class="clearfix">
              <button type="submit" class="booking">Booking</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

<?php include "footer.php";?>

</body>
</html>
