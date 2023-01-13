<?php

include("koneksi.php");
include("head.php");

// 
if (!isset($_GET['id'])) {
    header('Location: listmotor.php');
}

//
$id = $_GET['id'];

echo $id;

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
      Required meta tags -->
<!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"> -->
<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Hotel</title>
</head>

<body> -->

<header>
    <p>
        <b>
            Form Edit Motor
        </b>
    </p>
</header>

<!-- </body> --> -->
<form action="proseseditmotor.php" method="post">
    <input type="hidden" name="id" value="<?= $motor['id'] ?>">
    <div class="container">
        <div class="card card-user-edit">
            <div class="card-body">


                <div class="row">
                    <div class="col-md-6">

                        <label for="id_user">Pilih User: </label>
                        <select name="id_user" class="form-control" aria-label="default input example">
                            <option value="">Pilih User</option>
                            <?php
                            while ($user = mysqli_fetch_assoc($queryuser)) {
                                $selected = $user['id'] == $motor['id_user'] ? 'selected="selected"' : '';
                                echo "<option value=" . $user['id'] . " $selected>" . $user['nama'] . "</option>";
                            } ?>
                        </select>

                    </div>
                    <div class="col-md-6">

                        <label for="id_merk">Pilih Merk: </label>
                        <select name="id_merk" class="form-control" aria-label="default input example">
                            <option value="">Pilih Merk</option>
                            <?php
                            while ($merk = mysqli_fetch_assoc($querymerk)) {
                                $selected = $merk['id'] == $motor['id_merk'] ? 'selected="selected"' : '';
                                echo "<option value=" . $merk['id'] . " $selected>" . $merk['nama_merk'] . "</option>";
                            } ?>
                        </select>

                    </div>
                    <div class="col-md-6">

                        <label for="warna">Warna: </label>
                        <input class="form-control" type="text" name="warna" placeholder="warna" aria-label="default input example" value="<?= $motor['warna'] ?>">

                    </div>
                    <div class="col-md-6">
                        <label for="kode_mesin">Kode Mesin: </label>
                        <input class="form-control" type="text" name="kode_mesin" placeholder="kode mesin" aria-label="default input example" value="<?= $motor['kode_mesin'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="cc">cc : </label>
                        <input class="form-control" type="text" name="cc" placeholder="cc" aria-label="default input example" value="<?= $motor['cc'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="no_rangka">No Rangka: </label>
                        <input class="form-control" type="text" name="no_rangka" placeholder="no rangka" aria-label="default input example" value="<?= $motor['no_rangka'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="no_polisi">No Polisi: </label>
                        <input class="form-control" type="text" name="no_polisi" placeholder="no polisi" aria-label="default input example" value="<?= $motor['no_polisi'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="total">Total : </label>
                        <input class="form-control" type="text" name="total" placeholder="total" aria-label="default input example" value="<?= $motor['total'] ?>">
                    </div>
                    <div class="col-md-6">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
<?php
include("bottom.php");

?>