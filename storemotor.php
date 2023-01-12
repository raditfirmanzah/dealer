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
    $sql = "UPDATE motor SET id_user='$id_user', id_merk='$id_merk', warna='$warna', kode_mesin='$kode_mesin', cc='$cc', no_rangka='$no_rangka', no_polisi='$no_polisi', total='$total' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // 
    if ($query) {
        // 
        header('Location: listmotor.php');
    } else {
        //
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
