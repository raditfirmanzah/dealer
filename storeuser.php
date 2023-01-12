<?php

include("koneksi.php");


if (isset($_POST['daftar'])) {

    // 
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];


    // 
    $sql = "INSERT INTO user (id, nama, username, no_hp, password) VALUE ('$id', '$nama', '$username', '$no_hp', '$password')";
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
