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
                <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <input type="text" required class="form-control" value="<?php echo $row['titulo'] ?>" id="titulo" name="titulo" placeholder="">
                </div>
                <div class="form-group">
                    <label for="fechaInicio">Fecha Inicio:</label>
                    <input type="date" required class="form-control" value="<?php echo $row['fechaInicio'] ?>" id="fechaInicio" name="fechaInicio">
                </div>
                <div class="form-group">
                    <label for="fechaFinal">Fecha Final:</label>
                    <input type="date" required class="form-control" value="<?php echo $row['fechaFinal'] ?>" id="fechaFinal" name="fechaFinal">
                </div>
                <div class="form-group">
                    <label for="titulo">Lugar:</label>
                    <input type="text" required class="form-control" value="<?php echo $row['lugar'] ?>" id="lugar" name="lugar" placeholder="">
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
</script>

<?php
        $mysqli->close();
    } else {
?><script>
        window.open('agenda.php', '_self');
    </script><?php
            }


            include("footer.php"); ?>