<?php
session_start();
$id_user = $_SESSION['id'];
include_once("../db-con.php");
$database = new database();
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $nat = $_POST['nat'];
    $email = $_POST['email'];
    $pp   = addslashes(file_get_contents($_FILES['pp']['tmp_name']));
    $idp   = addslashes(file_get_contents($_FILES['idp']['tmp_name']));
    $targetDir = "D:\phppot_uploads";
    $res = mysqli_query($database->koneksi,"UPDATE den_user SET user_name = '$nama', user_notelp = '$telp', user_nationality = '$nat', user_email = '$email' WHERE id_user=$id_user");
    $res = mysqli_query($database->koneksi,"INSERT INTO den_user (profile_pic,foto_id) VALUES ('$pp','$idp') WHERE id_user=$id_user");
    header("location:index.php");
}
?>