<?php
include('head.php');

include('bottom.php');
?>


<?php if (isset($_GET['status'])) : ?>
    <p class="status" style="text-align: center; font-size: xx-large;">
        <?php
        if ($_GET['status'] == 'sukses') {
            echo "Pendaftaran berhasil!";
        } else {
            echo "Pendaftaran gagal!";
        }
        ?>
    </p>
<?php endif; ?>