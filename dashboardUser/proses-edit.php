<?php 
    include("config.php");

    //jika set sudah 'update'
    if (isset($_POST['update'])) {
        // ambil data dari formulir
        $id = $_POST['update-id'];
        $username = $_POST['update-username'];
        $email = $_POST['update-email'];
        $password = $_POST['update-password'];
        $status = $_POST['update-status'];
        $notelp = $_POST['update-notelp'];
        $emailVer = $_POST['update-emailver'];
        $kenegaraan = $_POST['update-kenegaraan'];
        $fotoid = $_POST['update-fotoid'];
        $premium = $_POST['update-premium'];

    }
    //query
    $sql = "UPDATE den_user SET user_name = '$username', user_password = '$password',
    user_role = '$status', user_notelp = '$notelp', foto_id = '$fotoid', user_nationality = '$kenegaraan',
    user_email = '$email', premium = '$premium', email_verified = '$emailVer' WHERE id_user='$id'";
    
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        header('location: index.php');
    } else {
        die('Gagal menyimpan perubahan');
    }
    




?>