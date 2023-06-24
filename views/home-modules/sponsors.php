<?php
include("config/conexion.php");

$sql = "select * from patrocinadores order by id ASC";
$query = $mysqli->query($sql);

?>

<section id="counts" class="counts">
      <div class="container">
        <div class="section-title">
          <h2>Patrocinadores</h2>
          <p>¡Bienvenidos, a nuestros patrocinadores!</p>
          <p style="font-size:24px;font-weight:normal;">Agradecemos su apoyo incondicional en nuestra misión conjunta de crecimiento y éxito. <span style="color:#F8C300;">¡Juntos logramos grandes cosas!</span></p>
        </div>
        <div class="row no-gutters">
          <?php 
            while($row = $query->fetch_assoc()){
          ?>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <div style="width:95%;margin:0 auto;"><a href="<?=$row['link']?>"><img style="width:100%" src="<?=base_url?>assets/img/sponsors/<?=$row['imagen']?>"></a></div>
            </div>
          </div>
          <?php 
            }
          ?>
        </div>

      </div>
    </section><!-- End sponsors Section -->