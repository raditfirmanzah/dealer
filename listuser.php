<?php
include("koneksi.php");
include('head.php');
?>
<header>
    <h1 style="text-align: center;">
        <b>List User</b>
    </h1>
</header>


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

            while ($user = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . $user['nama'] . "</td>";
                echo "<td>" . $user['username'] . "</td>";
                echo "<td>" . $usr['no_hp'] . "</td>";
                echo "<td>" . $usr['password'] . "</td>";

                echo "<td>";
                echo "<a href=edituser.php?id=$user[id] class='btn btn-warning'>Edit</a> | ";
                echo '<a href="hapususer.php?id= ' . $user['id'] . '" class="btn btn-danger">Hapus</a>';
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
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

    <?php
    include('bottom.php');
    ?>