<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    
    $id = $_GET['id'];

   
    $sql = "DELETE FROM motor WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ){
        header('Location: listmotor.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>