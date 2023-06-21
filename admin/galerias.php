<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Galerías</h1>

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
                    <a class="btn btn-primary mb-4" href="galerias-add.php">Agregar nuevo</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                                    <thead>
                                        <tr>
                                        <th class="col-1">Imagen</th>
                                            <th class="col-9">Titulo</th>
                                            <th class="col-2 text-center">Acciones</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("conn.php");
                                        $sql = "select * from galerias order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($row = $query->fetch_assoc()){
                                        ?>
                                        <tr>
                                        <td><img src="../assets/galerias/<?php echo $row['imagen']?>" width="50px" alt="ilearn"></td>
                                        <td><a href="imagenes.php?galeria=<?php echo $row['id']?>"><?php echo $row['titulo']?></a></td>
                                        <td class="text-center">
                                            <a href="galerias-edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="galerias-actions.php?del=true&id=<?php echo $row['id']?>" onclick="return confirm('Desea continuar? Se eliminará el registro permanetemente')"><i class="fas fa-trash-alt"></i></a>
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