<?php
include("config/conexion.php");

$sql = "SELECT * FROM tcongreso.expositores ep LEFT JOIN tcongreso.agenda a ON (ep.id = a.id)";
$query = $mysqli->query($sql);

?>


<main id="main">

    <div style="width:100%;height:406px;background-size:cover;background-position:center;background-repeat:no-repeat; background:url('assets/img/inner-bg.jpg');">
      
      <div style="padding-top:200px;">
        <h1 style="text-align:center;color:white;font-weight:bolder;">Expositores</h1>
         <p style="text-align:center;"><a style="color:white;" href="<?=base_url?>">Inicio</a> - <span style="text-align:center;color:#F8C300;">Expositores</span></p>
      </div>

    </div>

  
<!-- ======= expositores Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Expositores</h2>
          <p>¡Descubre la experiencia y conocimiento de nuestros <span style="color:#F8C300;">destacados expositores!</span></p>
        </div>

        <div class="row">
          <?php 
            while($row = $query->fetch_assoc()){
          ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div style="background:white;max-height:439px;padding:20px;box-shadow: 0px 0px 26px 7px rgba(0,0,0,0.19);-webkit-box-shadow: 0px 0px 26px 7px rgba(0,0,0,0.05);-moz-box-shadow: 0px 0px 26px 7px rgba(0,0,0,0.19);">
                  <a href="<?=base_url?>?pag=detail-inner&&id=<?=$row['id']?>"><img src="<?=base_url?>assets/img/team/<?=$row['foto']?>" class="img-fluid" alt=""></a>
                  <a href="<?=base_url?>?pag=detail-inner&&id=<?=$row['id']?>">
                    <h6 style="text-align:center;color:#325D7C;font-weight:bolder;padding-top:10px;"><?=$row['nombre']?></h6>
                    <p style="text-align:center;color:black;font-size:12px;font-weight:bolder;">Evento:</p>
                    <p style="font-size:12px;color:black;text-align:center;"><?=$row['titulo']?></p>
                    <p style="text-align:center;font-size:12px;"><a style="color:black;font-weight:bolder;" href="<?=base_url?>?pag=detail-inner&&id=<?=$row['id']?>"><i class="bi bi-search"></i> Ver detalle</a></p>
                  </a>
              </div>
          </div>
          <?php 
            }
          ?>
          

        </div>

      </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->