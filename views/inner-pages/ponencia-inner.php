<?php
include("config/conexion.php");

$sql = "select * from ponencias order by id ASC";
$query = $mysqli->query($sql);

?>

<div style="width:100%;height:406px;background-size:cover;background-position:center;background-repeat:no-repeat; background:url('assets/img/inner-bg.jpg');">
      
      <div style="padding-top:200px;">
        <h1 style="text-align:center;color:white;font-weight:bolder;">Ejes Temáticos</h1>
         <p style="text-align:center;"><a style="color:white;" href="<?=base_url?>">Inicio</a> - <span style="text-align:center;color:#F8C300;">Ejes Temáticos</span></p>
      </div>

</div>

<section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <?php 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="row mb-5">
          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="align-items-stretch video-box" style='background-image: url("<?=base_url?>assets/img/ponencias/<?=$row['imagen']?>");margin-top:50px;'>
            </div>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch">
            <div class="content">
              <h3 style="color:black;"><strong><?=$row['titulo']?></strong></h3>
              <p>
                <?=$row['contenido']?>
              </p>
            </div>
          </div>
        </div>
        <?php 
           }
        ?>
      </div>
    </section><!-- ponencia Section -->
