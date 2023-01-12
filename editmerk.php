
<?php

include("koneksi.php");


if( !isset($_GET['id']) ){
    header('Location: listmerk.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM merk WHERE id=$id";
$query = mysqli_query($db, $sql);
$merk = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>merk</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Customer</h3>
    </header>

    <form action="proseseditmerk.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $merk['id'] ?>" />

        <p>
            <label for="nama_merk">Nama Merk :</label>
            <input type="text" name="nama_merk" placeholder="nama_merk" value="<?php echo $merk['nama_merk'] ?>" />
        </p>
         <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>