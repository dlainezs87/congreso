<?php include("open.php");?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Expositor por Ponencias</h1>
<p class="mb-4">Agregar nuevo</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <form id="add" method="post" action="expositorponencia-actions.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="idExpositor">Expositor:</label>
                <select name="idExpositor" class="form-select form-control" id="idExpositor">
                    <option value="-1">Seleccione una opci&oacute;n</option>
                <?php
                    include("conn.php");
                    $sql = "select * from expositores order by id ASC";
                    $query = $mysqli->query($sql);
                    while($row = $query->fetch_assoc()){
                ?>
                    <option value="<?=$row['id']?>"><?= $row['nombre']?></option>
                <?php 
                ?>
                <?php
                    }
                    $mysqli->close();
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="idPonencia">Agenda:</label>
                <select name="idPonencia" class="form-select form-control" id="idPonencia">
                    <option value="-1">Seleccione una opci&oacute;n</option>
                <?php
                    include("conn.php");
                    $sql = "select * from agenda order by id ASC";
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
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a  href="expositorponencia.php" type="submit" class="btn btn-secondary">Regresar</a>
            <input type="hidden" name="action" id="action" value="add">
        </form>
    </div>
</div>
<script>  
    CKEDITOR.replace('contenido'); 
</script>
 <?php include("footer.php");?>