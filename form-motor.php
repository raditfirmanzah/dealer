<!-- <!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css">


    <title>Formulir Motor</title>
</head>
<link rel="stylesheet" href="style.css"> -->

<!-- <body> -->

<?php
include('head.php');
?>

<header>
    <p>
        <b>
            FORM EDIT MOTOR
        </b>
    </p>
</header>

<form action="storemotor.php" method="POST">
    <?php
    include("koneksi.php");
    $sql = "SELECT * FROM user";
    $query = mysqli_query($db, $sql);
    $sqlmerk = "SELECT * FROM merk";
    $querymerk = mysqli_query($db, $sqlmerk);
    ?>


    <div class="container">
        <div class="card card-user">
            <div class="card-body">


                <div class="row">
                    <div class="col-md-6">
                        <label for="id_user">Pilih User: </label>
                        <select name="id_user" class="form-control" aria-label="default input example">
                            <option value="">Pilih User</option>
                            <?php
                            while ($user = mysqli_fetch_assoc($query)) {
                                echo "<option value=" . $user['id'] . ">" . $user['nama'] . "</option>";
                            } ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="id_merk">Pilih Merk: </label>
                        <select name="id_merk" class="form-control" aria-label="default input example">
                            <option value="">Pilih Merk</option>
                            <?php
                            while ($merk = mysqli_fetch_assoc($querymerk)) {
                                echo "<option value=" . $merk['id'] . ">" . $merk['nama_merk'] . "</option>";
                            } ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="warna">Warna: </label>
                        <input class="form-control" type="text" name="warna" placeholder="Warna" aria-label="default input example">
                    </div>


                    <div class="col-md-6">
                        <label for="kode_mesin">Kode mesin: </label>
                        <input class="form-control" type="text" name="kode_mesin" placeholder="Kode Mesin" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="cc">Cc: </label>
                        <input class="form-control" type="text" name="cc" placeholder="CC" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="no_rangka">No Rangka: </label>
                        <input class="form-control" type="text" name="no_rangka" placeholder="no_rangka" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="no_polisi">No Polisi: </label>
                        <input class="form-control" type="text" name="no_polisi" placeholder="No Polisi" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="total">Total: </label>
                        <input class="form-control" type="text" name="total" placeholder="Total" aria-label="default input example">
                    </div>
                    <div class="col-md-12">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-dark" />
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- 

     <div class="input-box">
        
    </div>

    <div class="input-box">
        
    </div>

    <div class="input-box">
        
    </div>

    <div class="input-box">
        
    </div>
    <div class="input-box">
        <label for="no_polisi">No Polisi: </label>
        <input type="text" name="no_polisi">
    </div>
    <div class="input-box">
        
    </div>
    <p style="margin-top: 1rem; font-size: medium">
        <input type="submit" value="Daftar" name="daftar" />
    </p>
 -->



</form>

<!-- 
</body>

</html> -->

<?php
include('bottom.php');
?>