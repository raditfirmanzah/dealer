<?php
include('head.php')
?>

<!-- <!DOCTYPE html>
<html>

<head>
    <title>Merk</title>
</head>

<link rel="stylesheet" href="style.css">

<body> -->
<header>
    <p>
        <b>
            Merk Motor
        </b>
    </p>
</header>

<form action="storemerk.php" method="POST">

    <div class="container">
        <div class="card card-merk">
            <div class="card-body">


                <div class="row">
                    <div class="col-md-12">
                        <label for="nama_merk">Nama Merk: </label>
                        <input class="form-control" type="text" name="nama_merk" placeholder="Nama Merk" aria-label="default input example">
                    </div>

                    <div class="col-md-12">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-dark" />
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <div class="custom-info">
        <fieldset>

            <div class="input-box">
                <label for="nama_merk">Nama Merk: </label>
                <input type="text" name="nama_merk" placeholder="nama merk" />
            </div>

            <div class="input-box">
                <input type="submit" value="Daftar" name="daftar" />
            </div>

        </fieldset>
    </div> -->
</form>
<!-- 
</body>

</html> -->

<?php
include('bottom.php')
?>