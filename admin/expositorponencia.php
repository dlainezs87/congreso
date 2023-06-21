<?php include("open.php");?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Expositor por Ponencia</h1>

<?php 
if(isset($_GET['ok'])){ 
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
Se realizó la acción con éxito
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<?php } ?>

<?php 
if(isset($_GET['err'])){ 
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
No se agregó el regitro, vuelva a intentarlo.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<?php } ?>

<p class="mb-4">Agregue, edite o elimine.</p>
<a class="btn btn-primary mb-4" href="expositorponencia-add.php">Agregar nuevo</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                <thead>
                    <tr>
                        <th class="col-8">Expositor</th>
                        <th class="col-2">Ponencia</th>
                        <th class="col-2 text-center">Acciones</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("conn.php");
                    $sql = "SELECT ep.id, e.nombre, p.titulo 
                    FROM dbcongreso.expositorvsponencia ep
                    LEFT JOIN dbcongreso.expositores e ON (ep.idExpositor = e.id)
                    LEFT JOIN dbcongreso.ponencias p ON (ep.idPonencia = p.id);";
                    $query = $mysqli->query($sql);
                    while($row = $query->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['titulo']?></td>
                    <td class="text-center">
                        <a href="expositorponencia-edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="expositorponencia-actions.php?del=true&id=<?php echo $row['id']?>" onclick="return confirm('Desea continuar? Se eliminará el registro permanetemente')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                        
                    </tr>
                    <?php 
                    }//while
                    $mysqli->close();?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("footer.php");?>