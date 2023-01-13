<?php
include("koneksi.php");
include('head.php');
?>
<header>
    <p>
        <b>LIST USER</b>
    </p>
</header>

<div class="table-user">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr class="table-secondary">
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>No Hp</th>
                    <th>Password</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM user";
                $query = mysqli_query($db, $sql);

                while ($user = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $user['id'] . "</td>";
                    echo "<td>" . $user['nama'] . "</td>";
                    echo "<td>" . $user['username'] . "</td>";
                    echo "<td>" . $user['no_hp'] . "</td>";
                    echo "<td>" . $user['password'] . "</td>";

                    echo "<td>";
                    echo "<a href=edituser.php?id=$user[id] class='btn btn-warning'>Edit</a> | ";
                    echo '<a  href="hapususer.php?id= ' . $user['id'] . '" class="btn btn-danger">Hapus</a> |';
                    echo "<a href=detailuser.php?id=$user[id] class='btn btn-info'>Detail</a>  ";
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
                <a href="form-user.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
            </nav>
        </div>
    </div>
</div>
<?php
include('bottom.php');
?>