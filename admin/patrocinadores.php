<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Patrocinadores</h1>

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
                    <a class="btn btn-primary mb-4" href="patrocinadores-add.php">Agregar nuevo</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                                    <thead>
                                        <tr>
                                            <th class="col-7">Logo</th>
                                            <th class="col-10">Link</th>
                                            <th class="col-2 text-center">Acciones</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("conn.php");
                                        //$sql = "select p.*,tp.descripcion as tipo from patrocinadores p INNER JOIN tipospatrocinador tp ON tp.id=p.tipoPatrocinador order by id DESC";
                                        $sql = "select * from patrocinadores order by id ASC";
                                        $query = $mysqli->query($sql);
                                        while($row = $query->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><img src="../assets/img/sponsors/<?php echo $row['imagen']?>"></td>

                                            <td><?php echo $row['link']?></td>

                                            <td class="text-center">
                                                <a href="patrocinadores-edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;

                                                <a href="patrocinadores-actions.php?del=true&id=<?php echo $row['id']?>" onclick="return confirm('Desea continuar? Se eliminará el registro permanetemente')"><i class="fas fa-trash-alt"></i></a>
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