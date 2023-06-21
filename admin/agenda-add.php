
<?php include("open.php"); ?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Agenda</h1>
<p class="mb-4">Agregar nuevo</p>
<!-- DataTales Example -->

<?php include("open.php");?>
                    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Agenda</h1>
<p class="mb-4">Agregar nuevo</p>
                    <!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-body">
        <form id="add" method="post" action="agenda-actions.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">T&iacute;tulo Tema:</label>
                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
            </div>

            <div class="row">
                <div class="col-6 form-group">
                    <label for="fecha-hora">Fecha y Hora Inicio:</label>
                    <div class="input-group date" id="fecha-hora-inicio" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#fecha-hora-inicio" name="fecha-hora-inicio"/>
                        <div class="input-group-append" data-target="#fecha-hora-inicio" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa-solid fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 form-group">
                    <label for="fechaFinal">Fecha y Hora Final:</label>
                    <div class="input-group date" id="fecha-hora-final" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#fecha-hora-final" name="fecha-hora-final"/>
                        <div class="input-group-append" data-target="#fecha-hora-final" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa-solid fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

            <div class="form-group">
                <label for="fechaInicio">Fecha Inicio:</label>
                <input class="form-control" name="fechaInicio" id="fechaInicio" type="date" />
            </div>
            <div class="form-group">
                <label for="fechaFinal">Fecha Final:</label>
                <input class="form-control" name="fechaFinal" id="fechaFinal" type="date" />

            </div>
            <div class="form-group">
                <label for="lugar">Lugar:</label>
                <input type="text" required class="form-control" id="lugar" name="lugar" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contenido:</label>
                <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>

            <a href="blogs.php" type="submit" class="btn btn-secondary">Regresar</a>

            <a  href="blogs.php" type="submit" class="btn btn-secondary">Regresar</a>

            <input type="hidden" name="action" id="action" value="add">
        </form>
    </div>
</div>


<script>
    CKEDITOR.replace('contenido');
    $(document).ready(function() {
        $('#fecha-hora-inicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm' // Cambia el formato de hora a 'HH:mm'
        });
        $('#fecha-hora-final').datetimepicker({
            format: 'YYYY-MM-DD HH:mm' // Cambia el formato de hora a 'HH:mm'
        });
    });
</script>
<?php include("footer.php"); ?>

<!-- Archivos CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css">

<!-- Archivos JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>

<script>  
    CKEDITOR.replace('contenido'); 
</script>
 <?php include("footer.php");?>

