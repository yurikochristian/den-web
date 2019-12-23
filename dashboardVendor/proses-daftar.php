<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $region = $_POST['region'];
    $harga = $_POST['harga'];
    $max_pax = $_POST['max_pax'];
    $denda = $_POST['denda'];
    $jml_kamar = $_POST['jml_kamar'];
    $deskripsi = $_POST['deskripsi'];

    // buat query
    $sql = "INSERT INTO den_den (address, name, region, harga, max_pax,fine_charge,rooms, description) 
    VALUE ('$alamat', '$nama', '$region', $harga, $max_pax, $denda,$jml_kamar,'$deskripsi')";
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

