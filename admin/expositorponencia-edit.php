<?php include("open.php");?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Expositor por Ponencia</h1>
    <p class="mb-4">Editar registro existente</p>
    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <?php 
    include("conn.php");
    $id = (int)$_GET['id'];
    if($id>0){
        $sql = "select * from expositorvsponencia where id = " . $id;
        $query = $mysqli->query($sql);
        $row = mysqli_fetch_assoc($query);
    ?>
    <div class="card-body">
        <form id="add" method="post" action="expositorponencia-actions.php"  enctype="multipart/form-data">
            <div class="form-group">
                <select name="idExpositor" class="form-select form-control" id="idExpositor">
                <?php
                    include("conn.php");
                    $sql = "select * from expositores order by id ASC";
                    $query = $mysqli->query($sql);
                    while($rowExpositor = $query->fetch_assoc()){
                ?>
                    <option value="<?=$rowExpositor['id']?>" <?php echo ($row['idExpositor'] == $rowExpositor['id']) ? 'selected':''; ?>><?= $rowExpositor['nombre']?></option>
                <?php 
                ?>
                <?php
                    }
                    $mysqli->close();
                ?>
                </select>
            </div>
            <div class="form-group">
                <select name="idPonencia" class="form-select form-control" id="idPonencia">
                <?php
                    include("conn.php");
                    $sql = "select * from ponencias order by id DESC";
                    $query = $mysqli->query($sql);
                    while($rowPonencia = $query->fetch_assoc()){
                ?>
                    <option value="<?=$rowPonencia['id']?>" <?php echo ($row['idPonencia'] == $rowPonencia['id']) ? 'selected':''; ?>><?= $rowPonencia['titulo']?></option>
                <?php 
                ?>
                <?php
                    }
                ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="expositorponencia.php" class="btn btn-secondary">Regresar</a>
            <input type="hidden" name="action" id="action" value="edit">
            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
        </form>
    </div>
</div>
<?php 
    $mysqli->close();
}else{ 
    ?><script>window.open('expositorponencia.php','_self');</script><?php 
}
    
include("footer.php");?>