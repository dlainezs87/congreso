<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Patrocinadores</h1>
                    <p class="mb-4">Editar equipo existente</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    include("conn.php");
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from patrocinadores where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="patrocinadores-actions.php"  enctype="multipart/form-data">
                           
                        
                      <div class="form-group">
                                <label for="exampleInputEmail1">Descripción:</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $row['descripcion']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tipo</label>
                                <select class="form-control" name="tipo">
                                    <?php
                                        include("conn.php");
                                        $sql = "select * from tipospatrocinador order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($row2 = $query->fetch_assoc()){
                                            if($row['tipoPatrocinador']==$row2['id']){
                                                
                                            
                                        ?>
                                    <option selected value='<?=$row2['id']?>'><?=$row2['descripcion']?></option>
                                        <?php 
                                        } else {
                                            ?>
                                                 <option value='<?=$row2['id']?>'><?=$row2['descripcion']?></option>
                                                
                                                
                                                <?php
                                        } 
                                            ?>
                                        }
                                        }//while
                                        $mysqli->close();?>
                                </select>
                            </div>
            

                        
                            <?php
                            if($row['imagen']!=""){?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Actual:</label>
                                <img src="../assets/servicios/<?php echo $row['imagen']?>" width="100px" alt="Img blog">
                            </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen: * Recomendado 370 x 243px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>

                       

       
                            
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <a href="servicios.php" class="btn btn-secondary">Regresar</a>
                            <input type="hidden" name="action" id="action" value="edit">
                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('descripcion'); 
                 
            </script>

                <?php 
                $mysqli->close();
                    }else{ 
                        ?><script>window.open('servicios.php','_self');</script><?php 
                    }

                    
                include("footer.php");?>