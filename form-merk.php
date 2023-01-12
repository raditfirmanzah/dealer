<!DOCTYPE html>
<html>

<head>
    <title>Merk</title>
</head>

<link rel="stylesheet" href="style.css">

<body>
    <header>
        <h3>Merk Motor</h3>
    </header>

    <form action="storemerk.php" method="POST">
        <div class="custom-info">
            <fieldset>

                <div class="input-box">
                    <label for="nama_merk">Nama Merk: </label>
                    <input type="text" name="nama_merk" placeholder="nama merk" />
                </div>

                <div class="input-box">
                    <input type="submit" value="Daftar" name="daftar" />
                </div>

            </fieldset>
        </div>
    </form>

</body>

</html>