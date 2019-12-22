<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $notelp = $_POST['notelp'];
    $emailVer = $_POST['emailver'];
    $kenegaraan = $_POST['kenegaraan'];
    $fotoid = $_POST['fotoid'];
    $premium = $_POST['premium'];

    // buat query
    $sql = "INSERT INTO den_user (id_user, user_name, user_password, user_role, user_notelp, foto_id, user_nationality, user_email, premium, email_verified) 
    VALUE ('$id', '$username', '$password', '$status', '$notelp', '$fotoid','$kenegaraan','$email', '$premium', '$emailVer')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) { 
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
    echo($id);



} else {
    die("Akses dilarang...");
}

?>

