<?php
include("koneksi.php");
include("head.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Hotel</title>
</head>

<body>
    <header>
        <h1 style="text-align: center;">
            <b>LIST RESERVASI</b>
        </h1>
    </header>


    <div class="table-reservasi">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Kode Reservasi</th>
                        <th>No Customer</th>
                        <th>No Kamar</th>
                        <th>Tipe Kamar</th>
                        <th>Lama Menginap</th>
                        <th>Tanggal Check In</th>
                        <th>Tanggal Check Out</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT reservasi.id, reservasi.tgl_ci, reservasi.tgl_co,reservasi.total, reservasi.lama_menginap, reservasi.kd_reservasi, customer.nm_customer, customer.no_id, kamar.no_kmr, kamar.tipe_kmr  FROM reservasi INNER JOIN customer ON reservasi.id_customer = customer.id INNER JOIN kamar ON reservasi.id_kamar = kamar.id";
                    $query = mysqli_query($db, $sql);

                    while ($reservasi = mysqli_fetch_array($query)) {
                        echo "<tr>";

                        echo "<td>" . $reservasi['id'] . "</td>";
                        echo "<td>" . $reservasi['kd_reservasi'] . "</td>";
                        echo "<td>" . $reservasi['nm_customer'] . "</td>";
                        echo "<td>" . $reservasi['no_kmr'] . "</td>";
                        echo "<td>" . $reservasi['tipe_kmr'] . "</td>";
                        echo "<td>" . $reservasi['lama_menginap'] . "</td>";
                        echo "<td>" . $reservasi['tgl_ci'] . "</td>";
                        echo "<td>" . $reservasi['tgl_co'] . "</td>";
                        echo "<td>" . $reservasi['total'] . "</td>";




                        echo "<td>";
                        echo '<a href=editreservasi.php?id=' . $reservasi['id'] . ' class="btn btn-warning">Edit</a> | ';
                        echo '<a href="hapusreservasi.php?id=' . $reservasi['id'] . '" class="btn btn-danger">Hapus</a>';
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
                    <a href="daftarreservasi.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
                </nav>
            </div>
        </div>
    </div>


</body>

</html>