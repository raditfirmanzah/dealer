<?php
include("koneksi.php");
include('head.php')
?>

<header>
    <h1 style="text-align: center;">
        <b>LIST MERK</b>
    </h1>
</header>


<div class="table-user">
    <div class="table-responsive">
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Merk</th>

            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM merk";
                $query = mysqli_query($db, $sql);

                while ($merk = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $merk['id'] . "</td>";
                    echo "<td>" . $merk['nama_merk'] . "</td>";

                    echo "<td>";
                    echo '<a href=editmerk.php?id=' . $merk['id'] . ' class="btn btn-warning">Edit</a> | ';
                    echo '<a href="hapusmerk.php?id=' . $merk['id'] . '" class="btn btn-danger">Hapus</a>';
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
                <a href="form-merk.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
            </nav>
        </div>
    </div>
</div>




<?php
include('bottom.php');
?>