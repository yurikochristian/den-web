<!DOCTYPE html>
<html lang="en">
<head>
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
      $( "#tabs" ).tabs();
    } );
  </script>
</head>
<body>

<?php include 'header.php';?>

<!-- First Container -->
<!-- <div class="container"> -->
  <div class="container-fluid bg-1" style="background-image: url(img/Homepage.jpg); background-size: cover; height: 500px;">
    <div style="background-color: #ffffff4d; color: black; width: 300px; height: auto; margin-left: 100px; padding: 20px;">
      <p>Badung</p>
      <h3>Homestay Denny</h3>
      <img src="img/yeh.png">
    </div>
    <div class="absolute" style="position: absolute; margin-top: 270px; right: 400px; width: auto; height: auto; background-color: #FED701; padding: 10px;">200K/Kamar</div>
    <div class="absolute" style="position: absolute; margin-top: 270px; right: 200px; width: auto; height: auto; background-color: #FF9900; padding: 10px;">Max Person: 3</div>
</div>

<div style="padding: 50px;" id="tabs">
  <ul>
    <li><a href="#tabs-1">Deskripsi</a></li>
    <li><a href="#tabs-2">Peraturan</a></li>
    <li><a href="#tabs-3">Rating dan Review</a></li>
  </ul>
  <div id="tabs-1"><p>Disini ditampilkan deskripsi dari setiap homestay, baik itu fasilitas yang disediakan pada homestay, dan juga fasilitas-fasilitas yang didapatkan penginap saat bermalam di homestay ini.</p></div>
  <div id="tabs-2"><p>Peraturan Homestay Pak Bambang: <br><br>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br>2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br>3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
  <div id="tabs-3">
  <table>
    <label>Rating and Reviews</label>
    <tr>
      <td style="background-color: #F4F4F4; width: 100px; text-align: right;">
        <img style="border-radius: 50px; height: 70px; width: 70px;" src="img/Test1.jpg">
        <br>
        <label style="color: blue;">Denny</label>
        <br>
        <label>4.5/5</label>
      </td>
      <td style="background-color: #F4F4F4;">
        <div style=" margin-left: 20px; width: 95%; height: 100px; background-color: #FFFFFF;">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
        </div>
      </td>
    </tr>
    <tr>
      <td style="background-color: #F4F4F4; width: 100px; text-align: right;">
        <img style="border-radius: 50px; height: 70px; width: 70px;" src="img/Test1.jpg">
        <br>
        <label style="color: blue;">Denny</label>
        <br>
        <label>4.5/5</label>
      </td>
      <td style="background-color: #F4F4F4;">
        <div style=" margin-left: 20px; width: 95%; height: 100px; background-color: #FFFFFF;">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
        </div>
      </td>
    </tr>
    <tr>
      <td style="background-color: #F4F4F4; width: 100px; text-align: right;">
        <img style="border-radius: 50px; height: 70px; width: 70px;" src="img/Test1.jpg">
        <br>
        <label style="color: blue;">Denny</label>
        <br>
        <label>4.5/5</label>
      </td>
      <td style="background-color: #F4F4F4;">
        <div style=" margin-left: 20px; width: 95%; height: 100px; background-color: #FFFFFF;">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
        </div>
      </td>
    </tr>
  </table>
  </div>  
  <center>
  <a href="booking.php"><button style="background-color: #FF9900; color: #FFFFFF; width: 100px; height: 50px; padding: 15px; margin-top: 10px; border: none;">Booking</button></a>
  </center>
</div>

<?php include 'footer.php';?>

</body>
</html>
