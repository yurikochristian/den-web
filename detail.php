<?php
include_once("db-con.php");
$database = new database();
$id = $_GET['id'];
$query="select * from den_den where id_den=$id";
$result = mysqli_query($database->koneksi,$query);
$hs = $result->fetch_array();
$result = mysqli_query($database->koneksi,"SELECT * FROM den_rules WHERE id_den=$id");
$rate_res = mysqli_query($database->koneksi,"SELECT * FROM den_rating
                                            LEFT JOIN den_user
                                            ON den_rating.id_user = den_user.id_user 
                                            WHERE den_rating.id_den=$id");
?>
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
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active" style="height:93vh;">
          <img src="img/homepage.png"style="object-fit: contain;">
        <div class="carousel-caption" style="padding-bottom: 310px;">
        <center><h1 style="background-color: rgba(0,0,0,0.5); width: 350px;"><?php echo $hs['name'];?></h1></center>
        </div>
        </div>

        <div class="item" style="height:93vh;">
          <img src="img/homepage.png"style="object-fit:contain;">
          <div class="carousel-caption">
        </div>
        </div>

        <div class="item" style="height:93vh;">
          <img src="img/homepage.png"style="object-fit:contain;">
          <div class="carousel-caption">
        </div>
        </div>
      
        <div class="item" style="height:93vh;">
          <img src="img/Test1.jpg"style="object-fit:contain;width:100vw;">
          <div class="carousel-caption">
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

<div style="padding: 50px 200px 50px 200px;">
  <h1><?php echo $hs['name'];?></h1>
  <h3 style="float: right; background-color: #FED701; width: 220px; height: 50px; text-align: center; padding: 10px;">Rp <?php echo $hs['price'];?><span style="font-size: 15px;">/hari</span></h3>
  <h5 style="background-color: #FF9900; width: 150px; height: 40px; text-align: center; padding: 10px;">Max Person: <?php echo $hs['max_pax'];?></h5>
</div>

<div style="padding: 50px 200px 50px 200px;" id="tabs">
  <ul>
    <li><a href="#tabs-1">Deskripsi</a></li>
    <li><a href="#tabs-2">Peraturan</a></li>
    <li><a href="#tabs-3">Rating dan Review</a></li>
  </ul>
  <div id="tabs-1"><p><?php echo $hs['description'];?></p></div>
  <div id="tabs-2">
    <?php 
    $i = 1;
    while($rule = mysqli_fetch_assoc($result)){echo "<p>".$i.". ".$rule['den_rule'];$i++;}?>
  </div>
  <div id="tabs-3">
  <table>
    <label>Rating and Reviews</label>
    <?php while($rating = mysqli_fetch_assoc($rate_res)){?>
    <tr style="border-bottom: solid 5px white;">
      <td style="padding:20px 0 20px 0; background-color: #F4F4F4; width: 130px; text-align: right;">
        <img style="border-radius: 50px; height: 70px; width: 70px;" src="img/Test1.jpg">
        <br>
        <label style="color: blue;"><?php echo $rating['user_name'];?></label>
        <br>
        <label><?php echo $rating['rating'];?>/5</label>
      </td>
      <td style="background-color: #F4F4F4;width:100%;">
        <div style="padding:20px; margin-left: 20px; width: 95%; height: 100px; background-color: #FFFFFF;">
          <p><?php echo $rating['review'];?></p>
        </div>
      </td>
    </tr>
    <?php } ?>
  </table>
  </div>  
  <center>
  <a href="booking.php?id=<?php echo $id;?>"><button style="background-color: #FF9900; color: #FFFFFF; width: 100px; height: 50px; padding: 15px; margin-top: 10px; border: none;">Booking</button></a>
  </center>
</div>

<?php include 'footer.php';?>

</body>
</html>
