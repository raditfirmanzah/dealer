<?php

include("koneksi.php");

// 
if (isset($_POST['daftar'])) {

    // 
    $id = $_POST['id'];
    $nama_merk = $_POST['nama_merk'];


    // 
    $sql =  "INSERT INTO merk (id, nama_merk) VALUE ('$id', '$nama_merk')";
    $query = mysqli_query($db, $sql);

    // 
    if ($query) {
        // 
        header('Location: crud.php?status=sukses');
    } else {
        //
        header('Location: crud.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
