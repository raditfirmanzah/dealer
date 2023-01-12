<!-- <!DOCTYPE html>
<html> -->


<!-- <head>
    <link rel="stylesheet" href="style.css">
    <title>Formulir pemesanan motor</title>
</head> -->
<?php include('./head.php') ?>

<!-- <body> -->
<header>
    <p>
        <b>
            FORMULIR PENDAFTARAN USER
        </b>
    </p>
</header>


<form action="storeuser.php" method="POST">
    <div class="container">
        <div class="card card-user">
            <div class="card-body">


                <div class="row">
                    <div class="col-md-6">
                        <label for="nama">Nama: </label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="username">Username: </label>
                        <input class="form-control" type="text" name="username" placeholder="Username" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="no_hp">No Hp: </label>
                        <input class="form-control" type="text" name="no_hp" placeholder="No hp" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="password">Password: </label>
                        <input class="form-control" type="password" name="password" placeholder="password" aria-label="default input example">
                    </div>
                    <div class="col-md-12">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-dark" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
include('bottom.php');
?>
<!-- </body>

</html> -->