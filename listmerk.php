<?php
include("koneksi.php");
include('head.php')
?>

<header>
    <h1 style="text-align: center;">
        <b>LIST KAMAR</b>
    </h1>
</header>


<div class="table-kamar">
    <div class="table-responsive">
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>No Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM kamar";
                $query = mysqli_query($db, $sql);

                while ($kamar = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $kamar['id'] . "</td>";
                    echo "<td>" . $kamar['no_kmr'] . "</td>";
                    echo "<td>" . $kamar['tipe_kmr'] . "</td>";



                    echo "<td>";
                    echo '<a href=editkamar.php?id=' . $kamar['id'] . ' class="btn btn-warning">Edit</a> | ';
                    echo '<a href="hapuskamar.php?id=' . $kamar['id'] . '" class="btn btn-danger">Hapus</a>';
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
            <p>
                Total: <?php echo mysqli_num_rows($query) ?>
            </p>
        </div>
        <div class="col-4">
            <nav>
                <a href="daftarkamar.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
            </nav>
        </div>
    </div>
</div>




<?php
include('bottom.php');
?>