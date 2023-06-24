<?php
include("config/conexion.php");

$sql = "select * from sliders order by id DESC";
$query = $mysqli->query($sql);

?>

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <!--<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>-->

      <div class="carousel-inner" role="listbox">

        <?php 
          while($row = $query->fetch_assoc()){
        ?>
        <div class="carousel-item active" style="background-image: url(<?=base_url?>assets/img/slide/<?=$row['imagen']?>)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><?=$row['nombre']?></h2>
              <p class="animate__animated animate__fadeInUp"><?=$row['titulo']?></p>
              <a href="<?=$row['enlace']?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><i style="font-size:18px;" class="bi-search"></i> &nbsp;Ver detalle</a>
              <a style="background: transparent;" href="<?=base_url?>?pag=program-inner" class="btn-get-started animate__animated animate__fadeInUp scrollto"><i style="font-size:18px;" class="bi-calendar-date"></i> &nbsp;Programa del congreso</a>
            </div>
          </div>
        </div>
        <?php 
          }
        ?>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  