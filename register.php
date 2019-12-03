<?php 
include_once('db-con.php');
$database = new database();
if(isset($_POST['register']))
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    if($database->register($name,$email,$password))
    {
        header('location:index1.php');
    }
}

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
<body>

<!-- Navbar -->
<nav class="navbar1 navbar-default">
  <div class="container">
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> -->
      <a class="navbar-brand1" href="#">Den</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="ya" href="#">Beranda</a></li>
        <li><a href="#">Cari Den</a></li>
        <li><a href="#">Tentang Den</a></li>
        <li><a href="#">Masuk</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-3">
  <div class="col-md-4">
      <div class="konten">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <!-- <img src="Star.png">
          <div class="caption">
            <h2 id="nama">666</h2>
            <p>Homestay Seekers</p>
          </div> -->
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 200px;">
      <div class="konten">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <div class="caption">
            <p>Daftar ke Den</p>
            <h2 id="reg">Sign Up</h2>
          </div>
          <img src="yeh.png">
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-4">
       <form method="post" action="" style="border:1px solid #ccc; width: 360px; border-radius: 5px; background-color:#f1f1f1 ">
          <div class="biodata" style="padding: 20px;">
            <!-- <h1>Daftar</h1>
            <p>Silakan isi formulir ini untuk membuat akun.</p> -->
            <br>

            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="Enter E-mail" name="email" required>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            
            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <div class="clearfix">
              <button type="submit" name="register" class="signupbtn">Sign Up</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

<!-- Seventh Container -->
<div class="container-fluid bg-7">
  <h3>Alamat</h3>
  <p>Jl. Raya Kampus Unud<br>Bukit Jimbaran, Badung</p>
  <h3>Telp</h3>
  <p>081999877909</p>
</div>

<!-- Footer -->
<footer class="bg-8 text-center">
  <p>Den</a></p> 
</footer>

</body>
</html>
