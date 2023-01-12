<?php

include("koneksi.php");
include("head.php");

// 
if (!isset($_GET['id'])) {
    header('Location: listmotor.php');
}

//
$id = $_GET['id'];

// 
$sql = "SELECT * FROM motor WHERE id=$id";
$query = mysqli_query($db, $sql);
$motor = mysqli_fetch_assoc($query);
$sqlmerk = "SELECT * FROM merk";
$querymerk = mysqli_query($db, $sqlmerk);
$sqluser = "SELECT * FROM user";
$queryuser = mysqli_query($db, $sqluser);

//
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags -->
<!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"> -->
<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Hotel</title>
</head>

<body> -->

<header>
    <h3>Edit Reservasi</h3>
</header>

<!-- </body> --> -->
<form action="proseseditmotor.php" method="post">
    <div class="container">
        <div class="card card-user-edit">
            <div class="card-body">
                <fieldset>
                    <div class="row">

                        <input type="hidden" name="id" value="<?php echo $motor['id'] ?>">

                        <div class="col-md-6">
                            <p>
                                <label for="id_user">id user: </label>
                                <select name="id_user">
                                    <option value="">Pilih User</option>
                                    <?php
                                    while ($user = mysqli_fetch_assoc($queryuser)) {
                                        echo "<option value=" . $user['id'] . ">" . $user['nama'] . "</option>";
                                    } ?>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <label for="id_merk">id_merk: </label>
                                <select name="id_merk">
                                    <option value="">Pilih Nama Merk</option>
                                    <?php
                                    while ($merk = mysqli_fetch_assoc($querymerk)) {
                                        echo "<option value=" . $merk['id'] . ">" . $merk['nama_merk'] . "</option>";
                                    } ?>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <label for="warna">Warna: </label>
                                <input type="text" name="warna" value="<?php echo $motor['warna'] ?>" />
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <label for="kode_mesin">Kode Mesin: </label>
                                <input type="text" name="kode_mesin" value="<?php echo $motor['kode_mesin'] ?>" />
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <label for="cc">Cc: </label>
                                <input type="text" name="cc" value="<?php echo $motor['cc'] ?>" />
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <label for="no_rangka">No Rangka: </label>
                                <input type="text" name="no_rangka" value="<?php echo $motor['no_rangka'] ?>" />
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <label for="no_polisi">No Polisi: </label>
                                <input type="text" name="no_polisi" value="<?php echo $motor['no_polisi'] ?>" />
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <label for="total">Total: </label>
                                <input type="text" name="total" value="<?php echo $motor['total'] ?>" />
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <input type="submit" value="Simpan" name="simpan" />
                            </p>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</form>
<?php
include("bottom.php");

?>