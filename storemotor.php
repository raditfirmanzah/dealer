<?php

include("koneksi.php");

// 
if (isset($_POST['simpan'])) {

    // 
    $id = $_POST['id'];
    $id_user = $_POST['id_user'];
    $id_merk = $_POST['id_merk'];
    $warna = $_POST['warna'];
    $kode_mesin = $_POST['kode_mesin'];
    $cc = $_POST['cc'];
    $no_rangka = $_POST['no_rangka'];
    $no_polisi = $_POST['no_polisi'];
    $total = $_POST['total'];

    // 
    $sql = "INSERT INTO motor (id, id_user, id_merk, warna, kode_mesin, cc, no_rangka, no_polisi, total) VALUE ('$id', '$id_user', '$id_merk', '$warna', '$kode_mesin', '$cc', '$no_rangka', '$mo_polisi', '$total')"; 
    $query = mysqli_query($db, $sql);

    // 
    if ($query) {
        // 
        header('location: crud.php?status=sukses');
    } else {
        //
        header('location: crud.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
