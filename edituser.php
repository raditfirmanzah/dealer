<?php

include("koneksi.php");
include("head.php");


if (!isset($_GET['id'])) {
    header('Location: listuser.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM user WHERE id=$id";
$query = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($query);


if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!-- <!DOCTYPE html>
<html>
<head>
    <title>user</title>
</head> -->

<!-- <body> -->
<header>

    <p>
        <b>
            Form Edit Customer
        </b>
    </p>
</header>

<div class="container">
    <form action="prosesedituser.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
        <div class="container">
            <div class="card card-user-edit">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <label for="nama">Nama :</label>
                            <input class="form-control" type="text" name="nama" placeholder="Nama" aria-label="default input example" value="<?php echo $user['nama'] ?>">
                        </div>
                        <div class="col-md-6">

                            <label for="username">Username:</label>
                            <input class="form-control" type="text" name="username" placeholder="Username" aria-label="default input example" value="<?php echo $user['username'] ?>">

                        </div>
                        <div class="col-md-6">
                            <label for="no_hp">No Hp :</label>
                            <input class="form-control" type="text" name="no_hp" placeholder="No Hp" aria-label="default input example" value="<?php echo $user['no_hp'] ?>">

                        </div>
                        <div class="col-md-6">

                            <label for="password">Password :</label>
                            <input class="form-control" type="password" name="password" placeholder="password" aria-label="default input example" value="<?php echo $user['password'] ?>">
                        </div>
                        <div class="col-md-12">

                            <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />

                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</div>
</div>

</form>
</div>
<?php
include("bottom.php")
?>
<!-- </body>
</html> -->