<?php
include("config/conexion.php");

$sql = "SELECT * FROM tcongreso.expositorvsponencia ep LEFT JOIN tcongreso.expositores e ON (ep.idExpositor = e.id) LEFT JOIN tcongreso.agenda p ON (ep.idAgenda = p.id) where p.destacado = 'Y'";
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
			  function fechaEspanol($fecha) {
				  $fecha = substr($fecha, 0, 10);
				  $numeroDia = date('d', strtotime($fecha));
				  $dia = date('l', strtotime($fecha));
				  $mes = date('F', strtotime($fecha));
				  $anio = date('Y', strtotime($fecha));
				  $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
				  $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
				  $nombredia = str_replace($dias_EN, $dias_ES, $dia);
				  $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
				  $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
				  $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
				  return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
				} 

	          while($row = $query->fetch_assoc()){
		          $time = $row['fechaInicio'];
		          $time2 = $row['fechaFinal'];
		          $dateTime = new \DateTime($time);
		          $dateTime2 = new \DateTime($time2);
	          	  $hour = $dateTime->format('H:i A');
	          	  $hour2 = $dateTime2->format('H:i A');
		      ?>

			<div style="margin-top:30px;" class="col-lg-12">
				<div class="row program-container">
					<div style="background:#2C5976;padding:30px;" class="col-lg-4">
						<p style="font-size:14px;font-weight:lighter;color:white;"><?php echo fechaEspanol($time);?> / <?=$hour?> - <?=$hour2?></p>
						<p style="font-size:20px;font-weight:bolder;color:white;"><?=$row['titulo']?></p>
					</div>
					<div style="padding:30px;border-right:0.5px solid rgba(0, 0, 0, 0.1);"class="col-lg-5">
						<p style="font-size:12px;color:black;"><?=$row['contenido']?></p>
						<span style="font-size:12px;"><i style="color:#F8C300;" class="bi-pin-map-fill"></i> &nbsp;<?=$row['lugar']?></span>
						&nbsp;&nbsp;
					</div>
					<div class="col-lg-3">
							<div style="display:table;height:200px;">
								<div style="display:table-cell;vertical-align: middle;">
									<div class="row">
										<div class="col-lg-4 col-4">
											<div class="expositor-programa-img">
												<img style="width:100%;border-radius:50%;" src="<?=base_url?>assets/img/team/<?=$row['foto']?>">
											</div>
										</div>
										<div class="col-lg-8 col-8">
											<div class="expositor-programa-datos">
												<p><?=$row['nombre']?><br><span><?=$row['profesion']?></span></p>
											</div>
										</div>
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

