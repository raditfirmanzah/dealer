<?php

include("koneksi.php");


if(isset($_POST['simpan'])){

   
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];


    $sql = "UPDATE user SET nama='$nama',  username='$username', no_hp='$no_hp', password='$password' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
       
        header('Location: listuser.php');
    } else {
       
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>