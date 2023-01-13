<?php
include('head.php');

?>
<div class="home">
  <div class="container">

    <div class="row">
      <!-- gambar -->
      <div class="col-8 pt-5 pb-5">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="logo.jpg" class="d-block" alt="..." style="width: 700px; height: 400px;">

            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="yamaha.png" class="d-block" alt="..." style="width: 700px; height: 400px;">

            </div>
            <div class="carousel-item">
              <img src="gb.png" class="d-block" alt="..." style="width: 700px; height: 400px;">

            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>


      <!-- akhir gambar -->
      <div class="col-4 pt-5">

        <div class="d-flex flex-column mb-3 justify-content-center text-start">
          <div class="p-2">
            <h1>
              <b>
                Dealer Merdeka
              </b>
            </h1>
          </div>

          <div class="p-2">
            <h5>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea similique, earum placeat ipsa praesentium doloremque cumque expedita omnis quia cupiditate veniam dolorum sed impedit voluptas aspernatur perferendis! Provident, tempora?
            </h5>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>
<?php
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