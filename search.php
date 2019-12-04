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

</style>
<body>

<?php include "header.php"; ?>

<div class="container-fluid bg-3">
  <div class="col-md-4" style="padding-top: 350px;">
      <div class="konten">
        <img src="asset1.png">
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 125px; padding-left: 0px;">
      <div class="konten">
          <div class="caption">
            <p>Cari</p>
            <h2 id="reg">Den</h2>
            <img src="yeh.png">
            <p>Cari homestay sesuai kebutuhanmu</p>
          </div>
      </div>
    </div>
    <div class="col-md-4">
       <form action="#" style="border:1px solid #ccc; width: 360px; border-radius: 5px; background-color:#f1f1f1 ">
          <div class="biodata" style="padding: 20px;">
            <br>

            <table width="315px">
              <tr>
                <td colspan="2"><label for="katakunci"><b>Kata Kunci</b></label>
                <input type="text" name="katakunci" required></td>
              </tr>
              <tr>
                <td>
                    <select style="width: 150px;">
                      <option value="">Region</option>
                      <option value="Option A">Badung</option>
                      <option value="Option B">Denpasar</option>
                      <option value="Option C">Singaraja</option>
                    </select>
                </td>
                <td><input type="text" name="maxperson" placeholder="Max person" required style="width: 150px; float: right;"></td>
              </tr>
              <tr>
                <td><input type="text" name="hargaterendah" placeholder="Harga Terendah"required style="width: 150px; float: left;"></td>
                <td><input type="text" name="hargatertinggi" placeholder="Harga Tertinggi" required style="width: 150px; float: right;"></td>
              </tr>
            </table>
            
            <div class="clearfix">
              <button type="submit" class="cari">Cari</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

<div class="container-fluid bg-4 text-center" style="padding-bottom: 0px !important; padding-top: 0px !important;">
  <table class="pilih">
    <tr>
      <div style="position: relative;">
        <td><img src="Test1.jpg"></td>
        <div class="absolute" style="position: absolute; margin-top: 40px; left:130px; width: auto; height: auto; background-color: #FED701; padding: 10px;">Badung</div>
      </div>
      <td style="text-align: left; padding: 50px;">
        <table style="height: 200px">
          <tr>
            <td colspan="2"><h2>Homestay Denny</h2></td>
          </tr>
          <tr>
            <td colspan="2">
              <p>blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla</p>
            </td>
          </tr>
          <tr>
            <td><label style="background-color: #FED701; padding: 10px;">200K/Kamar</label></td>
            <td><label style="background-color: #FF9900; padding: 10px;">Max Person: 3</label></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <div style="position: relative;">
        <td><img src="Test1.jpg"></td>
        <div class="absolute" style="position: absolute; margin-top: 340px; left:130px; width: auto; height: auto; background-color: #FED701; padding: 10px;">Denpasar</div>
      </div>
      <td style="text-align: left; padding: 50px;">
        <table style="height: 200px">
          <tr>
            <td colspan="2"><h2>Homestay Denny</h2></td>
          </tr>
          <tr>
            <td colspan="2">
              <p>blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla</p>
            </td>
          </tr>
          <tr>
            <td><label style="background-color: #FED701; padding: 10px;">200K/Kamar</label></td>
            <td><label style="background-color: #FF9900; padding: 10px;">Max Person: 3</label></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <div style="position: relative;">
        <td><img src="Test1.jpg"></td>
        <div class="absolute" style="position: absolute; margin-top: 640px; left:130px; width: auto; height: auto; background-color: #FED701; padding: 10px;">Singaraja</div>
      </div>
      <td style="text-align: left; padding: 50px;">
        <table style="height: 200px">
          <tr>
            <td colspan="2"><h2>Homestay Denny</h2></td>
          </tr>
          <tr>
            <td colspan="2">
              <p>blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla</p>
            </td>
          </tr>
          <tr>
            <td><label style="background-color: #FED701; padding: 10px;">200K/Kamar</label></td>
            <td><label style="background-color: #FF9900; padding: 10px;">Max Person: 3</label></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <div style="position: relative;">
        <td><img src="Test1.jpg"></td>
        <div class="absolute" style="position: absolute; margin-top: 940px; left:130px; width: auto; height: auto; background-color: #FED701; padding: 10px;">Tabanan</div>
      </div>
      <td style="text-align: left; padding: 50px;">
        <table style="height: 200px">
          <tr>
            <td colspan="2"><h2>Homestay Denny</h2></td>
          </tr>
          <tr>
            <td colspan="2">
              <p>blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla</p>
            </td>
          </tr>
          <tr>
            <td><label style="background-color: #FED701; padding: 10px;">200K/Kamar</label></td>
            <td><label style="background-color: #FF9900; padding: 10px;">Max Person: 3</label></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <footer aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</footer>
</div>

<?php include "footer.php"; ?>
</body>
</html>
