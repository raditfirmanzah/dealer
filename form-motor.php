<!DOCTYPE html>
<html>
<head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Formulir Motor</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<form action="store-reservasi.php" method="POST">
        <?php
        include("koneksi.php");
        $sql = "SELECT * FROM user";
        $query = mysqli_query($db, $sql);
        $sqlkamar = "SELECT * FROM merk";
        $querykamar = mysqli_query($db, $sqlkamar);
        ?>

        <div class="custom-info">
            <fieldset>

                <div class="input-box" style="margin-bottom: 20px;">
                    <label for="id_user">Pilih User: </label>
                    <select name="id_user">
                        <option value="">Pilih User</option>
                        <?php
                        while ($user = mysqli_fetch_assoc($query)) {
                            echo "<option value=" . $user['id'] . ">" . $user['nama'] . "</option>";
                        } ?>
                    </select>
                </div>

                <div class="input-box" style="margin-bottom: 20px;">
                    <label for="id_merk">Pilih Merk: </label>
                    <select name="id_merk">
                        <option value="">Pilih Merk</option>
                        <?php
                        while ($merk = mysqli_fetch_assoc($querymerk)) {
                            echo "<option value=" . $merk['id'] . ">" . $merk['nama_merk'] . "</option>";
                        } ?>
                    </select>
                </div>

                <div class="input-box">
                    <label for="warna">Warna: </label>
                    <input type="text" name="warna">
                </div>

                <div class="input-box">
                    <label for="kode_mesin">Kode mesin: </label>
                    <input type="text" name="kode_mesin">
                </div>

                <div class="input-box">
                    <label for="cc">Cc: </label>
                    <input type="text" name="cc">
                </div>

                <div class="input-box">
                    <label for="no_rangka">No Rangka: </label>
                    <input type="text" name="no_rangka">
                </div>
                <div class="input-box">
                    <label for="no_polisi">No Polisi: </label>
                    <input type="text" name="no_polisi">
                </div>

                <p style="margin-top: 1rem; font-size: medium">
                    <input type="submit" value="Daftar" name="daftar" />
                </p>

            </fieldset>
        </div>

    </form>


</body>

</html>

