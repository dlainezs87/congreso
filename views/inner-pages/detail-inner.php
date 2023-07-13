<?php
$id = $_GET['id'];
include("config/conexion.php");
$sql = "SELECT ep.id, e.nombre, e.foto, e.profesion, e.pais, e.bandera, e.resumen, p.fechaInicio, p.titulo, p.contenido FROM dbcongreso.expositorvsponencia ep LEFT JOIN dbcongreso.expositores e ON (ep.idExpositor = e.id) LEFT JOIN dbcongreso.agenda p ON (ep.idAgenda = p.id) where ep.idExpositor=".$id;
$query = $mysqli->query($sql);
$row = $query->fetch_assoc()

?>



<div style="width:100%;height:406px;background-size:cover;background-position:center;background-repeat:no-repeat; background:url('assets/img/inner-bg.jpg');">
      
      <div style="padding-top:200px;">
        <h1 style="text-align:center;color:white;font-weight:bolder;">Detalle del Expositor</h1>
         <p style="text-align:center;"><a style="color:white;" href="<?=base_url?>">Inicio</a> - <span style="text-align:center;color:#F8C300;">Expositores</span></p>
      </div>

</div>


<section>
	<div class="container">
		<div class="row mb-3">
			<div class="col-lg-3">
				<img style="width:100%;border-radius:50%;" src="<?=base_url?>assets/img/team/<?=$row['foto']?>">
			</div>
			<div class="col-lg-9">
				<div class="section-title">
					<h2 style="padding-top:30px;" class="mb-3 mt-3">Resumen del expositor</h2>
					<h1 style="font-weight:bolder;color:#2C5976;"><?=$row['nombre']?></h1>
					<h4 style="padding-top:10px;"><?=$row['profesion']?></h4>
					<h4 style="padding-top:10px;"><?=$row['fechaInicio']?></h4>
					<h4 style="padding-top:10px;"><img style="width:30px;height:30px;border-radius:50%;" src="<?=base_url?>assets/img/team/<?=$row['bandera']?>">&nbsp; <?=$row['pais']?></h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				
				<p><?=$row['resumen']?></p><br>

				<h4 style="font-weight:bolder;"><?=$row['titulo']?></h4>

				<p><?=$row['contenido']?></p>
			</div>

			<!--
			<div class="col-lg-2">
				<h3>Fechas:</h3>
				<div class="mt-5 mb-5">
					<p style="font-weight:bolder;">Viernes 2 Agosto</p>
					<p style="font-weight:bolder;">8:00 am - 10:00 am</p>
				</div>
				<div class="mt-5 mb-5">
					<p style="font-weight:bolder;">Viernes 2 Agosto</p>
					<p style="font-weight:bolder;">8:00 am - 10:00 am</p>
				</div>
			</div>-->
		</div>
	</div>
</section>
