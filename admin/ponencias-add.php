<?php include("open.php");?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Ponencias</h1>
<p class="mb-4">Agregar nuevo</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <form id="add" method="post" action="ponencias-actions.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Titulo:</label>
                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion corta:</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="contenido">Contenido:</label>
                <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="locacion">Locaci&oacute;n:</label>
                <input type="text" required class="form-control" id="locacion" name="locacion" placeholder="">
            </div>
            <div class="form-group">

                <label for="idAgenda">Agenda:</label>
                <select name="idAgenda" class="form-select form-control" id="idAgenda">
                    <option value="-1">Seleccione una opci&oacute;n</option>

                <select name="idAgenda" class="form-select form-control" id="idGaleria">

                <?php
                    include("conn.php");
                    $sql = "select * from agenda order by id DESC";
                    $query = $mysqli->query($sql);
                    while($row = $query->fetch_assoc()){
                ?>
                    <option value="<?=$row['id']?>"><?= $row['titulo']?></option>
                <?php 
                ?>
                <?php
                    }
                    $mysqli->close();
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen: * Recomendado: 600 x 600px</label>
                <input class="form-control" name="imagen" id="imagen" type="file"/>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a  href="ponencias.php" type="submit" class="btn btn-secondary">Regresar</a>
            <input type="hidden" name="action" id="action" value="add">
        </form>
    </div>
</div>
<script>  
    CKEDITOR.replace('contenido'); 
</script>
 <?php include("footer.php");?>