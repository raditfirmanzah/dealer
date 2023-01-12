<!-- <!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css">


    <title>Formulir Motor</title>
</head>
<link rel="stylesheet" href="style.css"> -->

<!-- <body> -->
<form action="storemotor.php" method="POST">
    <?php
    include("koneksi.php");
    $sql = "SELECT * FROM user";
    $query = mysqli_query($db, $sql);
    $sqlmerk = "SELECT * FROM merk";
    $querymerk = mysqli_query($db, $sqlmerk);
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
            <div class="input-box">
                <label for="total">Total: </label>
                <input type="text" name="total">
            </div>
            <p style="margin-top: 1rem; font-size: medium">
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>
    </div>

</form>

<!-- 
</body>

</html> -->