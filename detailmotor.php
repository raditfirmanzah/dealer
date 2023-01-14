<?php
include("koneksi.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h2 style="text-align: center;">Detail Motor</h2>
    <div class="container">
    <div class="row">
        <div class="col-4" style="text-align: right;">
            <p>Id</p>
            <p>Nmaa User</p>
            <p>Nama Merk</p>
            <p>Warna</p>
            <p>Kode Mesin</p>
            <p>CC</p>
            <p>No Rangka</p>
            <p>No Polisi</p>
            <p>Total</p>
        </div>
        <div class="col-4">
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
        </div>
        <div class="col-4">  
        <?php
        
                $sql = "SELECT * FROM motor WHERE id = ".$_GET['id'];
                $query = mysqli_query($db, $sql);
                $motor =  mysqli_fetch_array($query);

                    echo "<tr>";

                    echo "<p>" . $motor['id'] . "</p>";
                    echo "<p>" . $motor['id_user'] . "</p>";
                    echo "<p>" . $motor['id_merk'] . "</p>";
                    echo "<p>" . $motor['warna'] . "</p>";
                    echo "<p>" . $motor['kode_mesin'] . "</p>";
                    echo "<p>" . $motor['cc'] . "</p>";
                    echo "<p>" . $motor['no_rangka'] . "</p>";
                    echo "<p>" . $motor['no_polisi'] . "</p>";
                    echo "<p>" . $motor['total'] . "</p>";

                    echo "</tr>";
    
            ?>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include('bottom.php');
?>