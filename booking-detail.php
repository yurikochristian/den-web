<?php
include_once("db-con.php");
$database = new database();
$id = $_GET['id'];
$query="SELECT * FROM den_booking b LEFT JOIN den_den d ON b.id_den=d.id_den WHERE book_id=$id";
$result = mysqli_query($database->koneksi,$query);
$hs = $result->fetch_array();
$result = mysqli_query($database->koneksi,"SELECT * FROM den_rules WHERE id_den=$id");
$phpdate = strtotime( $hs['book_date'] );
$mysqldate = date( 'd-m-Y', $phpdate );
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
<div style="padding: 50px 200px 50px 200px;">
  <h1><?php echo $hs['name'];?></h1>
  <p><?php echo $hs['address'];?></p>
  <p><?php echo "Jumlah Penginap:".$hs['person'];?></p>
  <p><?php echo "Durasi Menginap: ".$hs['duration']." Hari";?></p>
  <h3 style="background-color: #FED701; width: 220px; height: 50px; text-align: center; padding: 10px;">Status: <?php echo $hs['status'];?><span style="font-size: 15px;"></span></h3>
  <h5 style="background-color: #FF9900; width: 220px; height: 40px; text-align: center; padding: 10px;">Booking Date: <?php echo $mysqldate;?></h5>
</div>
<?php if($hs['status'] != 'booking'){?>
<center>
  <a href="review.php?id=<?php echo $id;?>&den_id=<?php echo $hs['id_den'];?>"><button style="background-color: #FF9900; color: #FFFFFF; width: 100px; height: 50px; padding: 15px; margin-top: 10px; border: none;">Review</button></a>
</center><br>
<?php } ?>
<?php include 'footer.php';?>

</body>
</html>
