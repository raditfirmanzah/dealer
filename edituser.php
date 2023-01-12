<?php

include("koneksi.php");
include("head.php");


if( !isset($_GET['id']) ){
    header('Location: listuser.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM user WHERE id=$id";
$query = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
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
        <h3>Formulir Edit Customer</h3>
    </header>

    <div class="container">
    <form action="prosesedituser.php" method="POST">
    <div class="container">
        <div class="card card-user-edit">
            <div class="card-body">


              
        <fieldset>

           <div class="row">
           <div class="col-md-6">
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
            </div>

       <div class="col-md-6">
       <p>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" placeholder="nama" value="<?php echo $user['nama'] ?>" />
        </p>
       </div>
        <div class="col-md-6">
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username" value="<?php echo $user['username'] ?>" />
        </p>
        </div>
        <div class="col-md-6">
        <p>
            <label for="no_hp">No Hp :</label>
            <input type="text" name="no_hp" placeholder="no_hp" value="<?php echo $user['no_hp'] ?>" />
        </p>
        </div>
        <div class="col-md-6">
        <p>
            <label for="password">Password :</label>
            <input type="text" name="password" placeholder="password" value="<?php echo $user['password'] ?>" />
        </p>
        </div>
        <div class="col-md-6">
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </div>
        </div>
            </div>
       </div>
    </div>
        </fieldset>


    </form>
    </div>
<?php
    include("bottom.php")
?>
    <!-- </body>
</html> -->