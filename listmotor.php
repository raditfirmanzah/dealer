<?php
include("koneksi.php");
include("head.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dealer</title>
</head>

<body>
    <header>
        <h1 style="text-align: center;">
            <b>LIST MOTOR</b>
        </h1>
    </header>


    <div class="table-motor">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Id User</th>
                        <th>Id Merk</th>
                        <th>Warna</th>
                        <th>Kode Mesin</th>
                        <th>CC</th>
                        <th>No Rangka</th>
                        <th>No Polisi</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM motor";
                    $query = mysqli_query($db, $sql);

                    while ($motor = mysqli_fetch_array($query)) {
                        echo "<tr>";

                        echo "<td>" . $motor['id'] . "</td>";
                        echo "<td>" . $motor['id_user'] . "</td>";
                        echo "<td>" . $motor['id_merk'] . "</td>";
                        echo "<td>" . $motor['warna'] . "</td>";
                        echo "<td>" . $motor['kode_mesin'] . "</td>";
                        echo "<td>" . $motor['cc'] . "</td>";
                        echo "<td>" . $motor['no_rangka'] . "</td>";
                        echo "<td>" . $motor['no_polisi'] . "</td>";
                        echo "<td>" . $motor['total'] . "</td>";




                        echo "<td>";
                        echo '<a href=editmotor.php?id=' . $motor['id'] . ' class="btn btn-warning">Edit</a> | ';
                        echo '<a href="hapusmoor.php?id=' . $motor['id'] . '" class="btn btn-danger">Hapus</a>';
                        echo "</td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-4 pt-4 pe-5">
                <p>Total: <?php echo mysqli_num_rows($query) ?></p>
            </div>
            <div class="col-4">
                <nav>
                    <a href="form-motor.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
                </nav>
            </div>
        </div>
    </div>


</body>

</html>