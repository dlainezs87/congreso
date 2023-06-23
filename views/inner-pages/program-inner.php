<?php
include("config/conexion.php");

$sql = "select * from agenda order by id ASC";
$query = $mysqli->query($sql);

?>

<div style="width:100%;height:406px;background-size:cover;background-position:center;background-repeat:no-repeat; background:url('assets/img/inner-bg.jpg');">
      <div style="padding-top:200px;">
        <h1 style="text-align:center;color:white;font-weight:bolder;">Programa</h1>
         <p style="text-align:center;"><a style="color:white;" href="<?=base_url?>">Inicio</a> - <span style="text-align:center;color:#F8C300;">Programa</span></p>
      </div>
</div>
<section class="about">
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
									<img style="width:100%;border-radius:50%;" src="<?=base_url?>assets/img/team/<?=$row['imagen']?>">
								</div>
							</div>
							<div class="col-lg-8 col-8">
								<div class="expositor-programa-datos">
									<p><?=$row['expositor']?><br>
									<span><?=$row['rol']?></apan></p>
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