<?php
include("config/conexion.php");

$sql = "select * from expositores order by id DESC";
$query = $mysqli->query($sql);

?>
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
                  <h4><?=$row['nombre']?></h4>
                  <p style="font-size:12px;color: white;"><span style="font-weight:bolder;">Ponencia:</span><?=$row['profesion']?></p>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php 
            }
          ?>
          

        </div>

      </div>
    </section><!-- End Team Section -->