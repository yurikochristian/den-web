<?php 
session_start();
include_once('db-con.php');
$database = new database();
$id_den = $_GET['den_id'];
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
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
</head>
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}

input[type=email]:focus, input[type=password]:focus {
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
<body>

<!-- Navbar -->
<?php include "header.php";?>

<div class="container-fluid bg-3">
    <div class="col-md-6" style="padding-top: 100px;">
      <div class="konten user-input">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <div class="caption">
            <p>Tulis pengalaman anda</p>
            <h2 id="reg">Rating and Review</h2>
          </div>
          <img src="img/yeh.png">
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-6">
       <form method="post" action="send-review.php" style="border:1px solid #ccc; width: 360px; border-radius: 5px; background-color:#f1f1f1" name="login">
        <center><div class="biodata" style="padding: 20px;">
            <!-- <h1>Daftar</h1>
            <p>Silakan isi formulir ini untuk membuat akun.</p> -->
            <br>
            <label for="rating"><b>Rating</b></label>
            <input type="number" id="email" placeholder="Rating" name="rating" required>
            <input type="hidden" name="id_den" value="<?php echo $id_den;?>">

            <br><label for="review"><b>Review</b></label>
            <textarea id="pass" placeholder="Masukkan review anda" name="review" required></textarea>
            <div class="clearfix">
              <button id="submit" type="submit" name="submit" class="signupbtn">Kirim</button>
            </div>
          </div>
          </center>
        </form>
    </div>
  </div>
</div>

<?php include "footer.php";?>

</body>
</html>