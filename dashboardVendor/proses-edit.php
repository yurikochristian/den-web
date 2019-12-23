<?php 
    include("config.php");

    //jika set sudah 'update'
    if (isset($_POST['update'])) {
        // ambil data dari formulir
        $id = $_POST['id-den'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $region = $_POST['region'];
        $harga = $_POST['harga'];
        $max_pax = $_POST['max_pax'];
        $denda = $_POST['denda'];
        $jml_kamar = $_POST['jml_kamar'];
        $deskripsi = $_POST['deskripsi'];

    }
    //query
    $sql = "UPDATE den_den SET nama = '$nama', address = '$alamat',
    region = '$region', price = $harga, max_pax = $max_pax, fine_charge = $denda,
    rooms = $jml_kamar, description = '$deskripsi' WHERE den_den='$id'";
    
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