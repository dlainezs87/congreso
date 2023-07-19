<?php
include("config/conexion.php");

$sql = "select * from expositores order by id DESC";
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
            <div class="member" >
              <img src="<?=base_url?>assets/img/team/<?=$row['foto']?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <a href="<?=base_url?>?pag=detail-inner&&id=<?=$row['id']?>"><h4><?=$row['nombre']?></h4></a>
                  <p style="font-size:12px;color: white;"><span style="font-weight:bolder;">Ponencia:</span><?=$row['profesion']?></p>
                </div>
                <!--<div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>-->
              </div>
            </div>
          </div>
          <?php 
            }
          ?>
          

        </div>

      </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->