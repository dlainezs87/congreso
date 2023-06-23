<?php include("open.php"); ?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Agenda</h1>
<p class="mb-4">Editar registro existente</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <?php
    include("conn.php");
    $id = (int)$_GET['id'];
    if ($id > 0) {
        $sql = "select * from agenda where id = " . $id;
        $query = $mysqli->query($sql);
        $row = mysqli_fetch_assoc($query);
    ?>
        <div class="card-body">
            <form id="edit" method="post" action="agenda-actions.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="titulo">Titulo:</label>
                        <input type="text" required class="form-control" value="<?php echo $row['titulo'] ?>" id="titulo" name="titulo" placeholder="">
                    </div>
                    <div class="col-6 form-group">
                        <label for="fecha-hora">Fecha y Hora Inicio:</label>
                        <div class="input-group date" id="fecha-hora-inicio" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#fecha-hora-inicio" name="fecha-hora-inicio" value="<?php echo $row['fechaInicio'] ?>"/>
                            <div class="input-group-append" data-target="#fecha-hora-inicio" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa-solid fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="titulo">Lugar:</label>
                        <input type="text" required class="form-control" value="<?php echo $row['lugar'] ?>" id="lugar" name="lugar" placeholder="">
                    </div>
                    <div class="col-6 form-group">
                        <label for="destacado">Destacado:</label>
                        <select name="destacado" class="form-select form-control" id="destacado">
                            <option value="-1">Seleccione una opci&oacute;n</option>
                            <option value="N" <?php echo ($row['destacado'] == 'N') ? 'selected': ''; ?>>No</option>
                            <option value="Y" <?php echo ($row['destacado'] == 'Y') ? 'selected': ''; ?>>Si</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="expositor">Expositor(No indispensable):</label>
                        <input type="text" required class="form-control" id="expositor" name="expositor" placeholder="">
                    </div>
                    <div class="col-6 form-group">
                        <label for="rol">Rol(No indispensable):</label>
                        <input type="text" required class="form-control" id="rol" name="rol" placeholder="">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-6 form-group">
                        <label for="foto">Foto Expositor: * Recomendado: 600 x 600px (No indispensable)</label>
                        <input class="form-control" name="foto" id="foto" type="file"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido:</label>
                    <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"><?php echo $row['contenido'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
                <a href="agenda.php" class="btn btn-secondary">Regresar</a>
                <input type="hidden" name="action" id="action" value="edit">
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
            </form>
        </div>
</div>

<script>
    CKEDITOR.replace('contenido');


    $(document).ready(function() {
        $('#fecha-hora-inicio').datetimepicker({
            format: 'YYYY-MM-DD hh:mm:ss' // Cambia el formato de hora a 'HH:mm'
        });
    });


</script>
<!-- Archivos CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css">

<!-- Archivos JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
<?php
        $mysqli->close();
    } else {
?>  <script>
        window.open('agenda.php', '_self');
    </script>
<?php
    }

    include("footer.php"); 
?>

