<?php
    include_once('db-con.php');
    $database = new database();
    $flag=0;
    $query = mysqli_query($database->koneksi,"select * from `den_user`");
    while($data_user = mysqli_fetch_assoc($query)){
        if(password_verify($data_user['user_email'],$_GET['hash'])){
            $flag=1;
            $verified=$data_user['user_email'];
            $query = mysqli_query($database->koneksi,"update den_user SET email_verified='yes' WHERE user_email='$verified'");
            header('location:verification-success.php');
        }
    }
    if($flag==0){
        header('location:oops.php');
    }
?>