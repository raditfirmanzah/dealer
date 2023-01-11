<!DOCTYPE html>
<html>

<link rel="stylesheet" href="style.css">

<head>
    <title>Formulir pemesanan motor</title>
</head>

<body>
    <header>
        <h3>Formulir pemesananan motor</h3>
    </header>

    <form action="storeuser.php" method="POST">

        <fieldset>

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama" />
            </p>
            <p>
                <label for="username">Username: </label>
                <input type="text" name="username" placeholder="username" />
            </p>
            <p>
                <label for="no_hp">No Hp: </label>
                <input type="text" name="no_hp" placeholder="no_hp" />
            </p>
            <p>
                <label for="password">Password: </label>
                <input type="text" name="password" placeholder="password" />
            </p>

            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>