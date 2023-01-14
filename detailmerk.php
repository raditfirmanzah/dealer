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
    <h2 style="text-align: center;">Detail Merk</h2>
    <div class="container">
    <div class="row">
        <div class="col-4" style="text-align: right;">
            <p>Id</p>
            <p>Nama Merk</p>
        </div>
        <div class="col-4">
            <p>:</p>
            <p>:</p>
        </div>
        <div class="col-4">  
        <?php
        
                $sql = "SELECT * FROM merk WHERE id = ".$_GET['id'];
                $query = mysqli_query($db, $sql);
                $user =  mysqli_fetch_array($query);

                    echo "<tr>";

                    echo "<p>" . $user['id'] . "</p>" ;
                    echo "<p>" . $user['nama_merk'] . "</p>" ;

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