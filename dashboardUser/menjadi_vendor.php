<?php
session_start();
$id_user = $_SESSION['id'];
include_once("../db-con.php");
$database = new database();
$query = "UPDATE den_user SET user_role = 'vendor' WHERE id_user = $id_user";
$query = mysqli_query($database->koneksi,$query);
$_SESSION['role'] = 'vendor';
header("location:../dashboardVendor");
?>