<?php

include("koneksi.php");


if (!isset($_GET['id'])) {
    header('Location: listmerk.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM merk WHERE id=$id";
$query = mysqli_query($db, $sql);
$merk = mysqli_fetch_assoc($query);


if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<?php
include('head.php');
?>


<!-- <!DOCTYPE html>
<html>

<head>
    <title>merk</title>
</head>

<body> -->
<header>
    <p>
        <b>
            Formulir Edit Customer
    </p>
</header>

<form action="proseseditmerk.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $merk['id'] ?>" />
    <div class="container">
        <div class="card card-user-edit">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <label for="nama_merk">Nama Merk :</label>
                        <input class="form-control" type="text" name="nama_merk" placeholder="Nama Merk" aria-label="default input example" value="<?php echo $merk['nama_merk'] ?>">

                    </div>
                    <div class="col-12">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>

<!-- </body>

</html> -->