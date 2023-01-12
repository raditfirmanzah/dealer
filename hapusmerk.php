<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    
    $id = $_GET['id'];

   
    $sql = "DELETE FROM merk WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ){
        header('Location: listmerk.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>