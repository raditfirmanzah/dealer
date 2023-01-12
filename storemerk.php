<?php

include("koneksi.php");

// 
if (isset($_POST['simpan'])) {

    // 
    $id = $_POST['id'];
    $nama_merk = $_POST['nama_merk'];


    // 
    $sql = "UPDATE merk SET nama_merk='$nama_merk' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // 
    if ($query) {
        // 
        header('Location: listmerk.php');
    } else {
        //
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
