<?php
session_start();
$id_user = $_SESSION['id'];
include_once("db-con.php");
$database=new database();
if(isset($_POST['submit'])){
    $id_den = $_POST['id_den'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $query = mysqli_query($database->koneksi, "INSERT INTO den_rating VALUES($id_den,$id_user,$rating,'$review')");
    header('location:index.php');
}
?>