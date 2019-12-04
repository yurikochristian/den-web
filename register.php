<?php
include_once('db-con.php');
$database = new database();
if(isset($_SESSION['is_login']))
{
  header('location:index.php');
}
if(isset($_POST['register']))
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $telp = $_POST['telp'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    if($database->register($name,$email,$telp,$password))
    {
        header('location:index.php');
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
<body>

<!-- Navbar -->
<?php include "header.php";?>

<div class="container-fluid bg-3">
    <div class="col-md-6" style="padding-top: 200px;">
      <div class="konten user-input">
        <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
          <div class="caption">
            <p>Daftar ke Den</p>
            <h2 id="reg">Sign Up</h2>
          </div>
          <img src="img/yeh.png">
        <!-- </a> -->
      </div>
    </div>
    <div class="col-md-6">
       <form method="post" action="" style="border:1px solid #ccc; width: 360px; border-radius: 5px; background-color:#f1f1f1" name="register">
          <div class="biodata" style="padding: 20px;">
            <!-- <h1>Daftar</h1>
            <p>Silakan isi formulir ini untuk membuat akun.</p> -->
            <br>

            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="Enter E-mail" name="email" required><br>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required><br>

            <label for="telp"><b>No. Telp</b></label>
            <input type="text" placeholder="Enter Phone Number" name="telp" required><br>
            
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br>
            
            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
            <p>Sudah punya akun? <a href="login.php" style="color:dodgerblue">login</a></p>

            <div class="clearfix">
              <button type="submit" name="register" class="signupbtn">Sign Up</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

<?php include "footer.php";?>

</body>
<script>
$(function() {
  $('form[name="register"]').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      name: {
        required: true,
        name: true
      },
      password: {
        required: true,
        minlength: 8
      },
      telp: {
        required: true,
        phoneno: true
      }
    },
    messages: {
      password: {
        required: "Password belum diisi",
        minlength: "Password harus lebih dari 8 karakter"
      },
      email: {
        required: "Email belum diisi",
        email: "Email tidak valid"
      },
      name: {
        required: "Nama belum diisi"
      },
      telp:{
        required: "Nomor telepon belum diisi",
        telp: "Nomor telepon tidak valid"
      }
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
</html>
