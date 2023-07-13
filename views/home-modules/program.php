<?php
include("config/conexion.php");

$sql = "SELECT * FROM dbcongreso.expositorvsponencia ep LEFT JOIN dbcongreso.expositores e ON (ep.idExpositor = e.id) LEFT JOIN dbcongreso.agenda p ON (ep.idAgenda = p.id) where p.destacado = 'Y'";
$query = $mysqli->query($sql);

?>


<section class="about" style="background: linear-gradient(to right, white 0%, white 50%, #F7F7F7 50%, #F7F7F7 100%);">
	<div class="container">
		<div class="row content">
			<div class="col-lg-8">
				<div class="section-title">
		          <h2>Programa</h2>
		          <p>Explora los temas destacados del Congreso Regional</p>
		          <p style="color:#F8C300;">¡Únete ahora y amplía tus conocimientos!</p><br>
		          <a href="#" class="btn-learn-more"><i class="bi-person-fill-add"></i>&nbsp;Inscripciones</a>
		        </div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row content">
			<?php 
	          while($row = $query->fetch_assoc()){
	          $time = $row['fechaInicio'];
	          $dateTime = new \DateTime($time);
	          $hour = $dateTime->format('H:i:s');
	          $date = $dateTime->format('Y-m-d');	
	        ?>

			<div style="margin-top:30px;" class="col-lg-12">
				<div class="row program-container">
					<div style="background:#2C5976;padding:30px;" class="col-lg-4">
						<p style="font-size:14px;font-weight:lighter;color:white;"><?=$date?> / <?=$hour?></p>
						<p style="font-size:20px;font-weight:bolder;color:white;"><?=$row['titulo']?></p>
					</div>
					<div style="padding:30px;border-right:0.5px solid rgba(0, 0, 0, 0.1);"class="col-lg-5">
						<p style="font-size:12px;color:black;"><?=$row['contenido']?></p>
						<span style="font-size:12px;"><i style="color:#F8C300;" class="bi-pin-map-fill"></i> &nbsp;<?=$row['lugar']?></span>
						&nbsp;&nbsp;
					</div>
					<div class="col-lg-3">
						<div class="row">
							<div class="col-lg-4 col-4">
								<div class="expositor-programa-img">
									<img style="width:100%;border-radius:50%;" src="<?=base_url?>assets/img/team/<?=$row['foto']?>">
								</div>
							</div>
							<div class="col-lg-8 col-8">
								<div class="expositor-programa-datos">
									<p><?=$row['nombre']?><br>
									<span><?=$row['profesion']?></apan></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
	          }
	        ?>
			
		</div>
	</div>
</section>