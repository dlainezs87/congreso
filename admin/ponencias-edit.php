<?php include("open.php");?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ponencias</h1>
    <p class="mb-4">Editar registro existente</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <?php 
    include("conn.php");
    $id = (int)$_GET['id'];
    if($id>0){
        $sql = "select * from ponencias where id = " . $id;
        $query = $mysqli->query($sql);
        $row = mysqli_fetch_assoc($query);
    ?>
        <div class="card-body">
            <form id="add" method="post" action="ponencias-actions.php"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Titulo:</label>
                    <input type="text" required class="form-control" value="<?php echo $row['titulo']?>" id="titulo" name="titulo" placeholder="">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion corta:</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5"><?php echo $row['descripcion']?></textarea>
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido:</label>
                    <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"><?php echo $row['contenido']?></textarea>
                </div>
                <div class="form-group">
                <select name="idAgenda" class="form-select form-control" id="idAgenda">
                <?php
                    include("conn.php");
                    $sql = "select * from agenda order by id DESC";
                    $query = $mysqli->query($sql);
                    while($rowAgenda = $query->fetch_assoc()){
                ?>
                    <option value="<?=$rowAgenda['id']?>" <?php echo ($row['idAgenda'] == $rowAgenda['id']) ? 'selected':''; ?>><?= $rowAgenda['titulo']?></option>
                <?php 
                ?>
                <?php
                    }
                    $mysqli->close();
                ?>
                </select>
            </div>
                <?php
                if($row['imagen']!=""){?>
                <div class="form-group">
                    <label for="imagen2">Actual:</label>
                    <img src="../assets/ponencias/<?php echo $row['imagen']?>" width="100px" alt="Img blog" id="imagen2">
                </div>
                <?php } ?>
                <div class="form-group">
                    <label for="imagen">Imagen: * Recomendado 600 x 600px</label>
                    <input class="form-control" name="imagen" id="imagen" type="file"/>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
                <a href="ponencias.php" class="btn btn-secondary">Regresar</a>
                <input type="hidden" name="action" id="action" value="edit">
                <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
            </form>
        </div>
    </div>
<script>  
    CKEDITOR.replace('contenido'); 
</script>
<?php 
    $mysqli->close();
}else{ 
    ?><script>window.open('ponencias.php','_self');</script><?php 
}
    
include("footer.php");?>