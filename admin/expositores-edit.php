<?php include("open.php");?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Expositor</h1>
<p class="mb-4">Editar registro existente</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">

<?php 
include("conn.php");
$id = (int)$_GET['id'];
if($id>0){
    $sql = "select * from expositores where id = " . $id;
    $query = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($query);
?>

<div class="card-body">
    <form id="edit" method="post" action="expositores-action.php"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" required class="form-control" value="<?php echo $row['nombre']?>" id="nombre" name="nombre" placeholder="">
        </div>
        <div class="form-group">
            <label for="pais">Pais:</label>
            <input type="text" required class="form-control" value="<?php echo $row['pais']?>" id="pais" name="pais" placeholder="">
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" required class="form-control" value="<?php echo $row['edad']?>" id="edad" name="edad">
        </div>
        <div class="form-group">
            <label for="profesion">Profesion:</label>
            <input type="text" required class="form-control" value="<?php echo $row['profesion']?>" id="profesion" name="profesion" placeholder="">
        </div>
        <?php
        if($row['foto']!=""){?>
        <div class="form-group">
            <label for="exampleInputEmail1">Actual:</label>
            <img src="../assets/expositores/<?php echo $row['foto']?>" width="100px" alt="Img Expositor">
        </div>
        <?php } ?>

        <div class="form-group">
            <label for="foto">Imagen: * Recomendado 600 x 600px</label>
            <input class="form-control" name="foto" id="foto" type="file"/>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
        <a href="expositores.php" class="btn btn-secondary">Regresar</a>
        <input type="hidden" name="action" id="action" value="edit">
        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
        </form>
    </div>
</div>
<?php 
        $mysqli->close();
    }else{ 
        ?><script>window.open('expositores.php','_self');</script><?php 
    }
    include("footer.php");
?>