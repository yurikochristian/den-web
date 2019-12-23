<?php
include_once("../db-con.php");
$database = new database();
$book_id = $_GET['book_id'];
$query = "UPDATE den_booking SET status='check-out' WHERE book_id=$book_id";
$query = mysqli_query($database->koneksi,$query);
header("location:bookings.php");
?>