<?php
include("koneksi.php");
include('head.php');
?>
<header>
    <h1 style="text-align: center;">
        <b>USER</b>
    </h1>
</header>

<div class="table-customer">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>No Hp</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM customer";
                $query = mysqli_query($db, $sql);

                while ($hotel = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $hotel['id'] . "</td>";
                    echo "<td>" . $hotel['no_id'] . "</td>";
                    echo "<td>" . $hotel['nm_customer'] . "</td>";
                    echo "<td>" . $hotel['gender'] . "</td>";


                    echo "<td>";
                    echo "<a href=editcustomer.php?id=$hotel[id] class='btn btn-warning'>Edit</a> | ";
                    echo '<a href="hapuscustomer.php?id= ' . $hotel['id'] . '" class="btn btn-danger">Hapus</a>';
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
                <a href="daftarcustomer.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
            </nav>
        </div>
    </div>

    <?php
    include('bottom.php');
    ?>