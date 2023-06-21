<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Imágenes</h1>
                    <p class="mb-4">Editar equipo existente</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    include("conn.php");
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from imagenes where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="imagenes-actions.php"  enctype="multipart/form-data">
                           
                        
                        <div class="form-group">
                                <label for="exampleInputEmail1">Titulo:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['titulo']?>" id="titulo" name="titulo" placeholder="">
                            </div>
<div class="form-group">
                                <label for="exampleInputEmail1">Galería:</label>
                                <select name="idGaleria" class="form-select form-control" id="idGaleria">
        
      
                          <?php
                                        include("conn.php");
                                        $sql = "select * from galerias order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($rowGaleria = $query->fetch_assoc()){
                                            if($row['idGaleria']==$rowGaleria['id']){
                                        ?>
                                    <option selected="selected" value="<?=$rowGaleria['id']?>"><?= $rowGaleria['titulo']?></option>
                                        <?php 
                                            } else {
                                                ?>
                                <option  value="<?=$rowGaleria['id']?>"><?= $rowGaleria['titulo']?></option>

                                                    <?php
                                            }
                                        }//while
                                       ?>
        </select>
                            </div>

            

                        
                            <?php
                            if($row['imagen']!=""){?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Actual:</label>
                                <img src="../assets/imagenes/<?php echo $row['imagen']?>" width="100px" alt="Img blog">
                            </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen: </label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>

                       


       
                            
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <a href="galerias.php" class="btn btn-secondary">Regresar</a>
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
                        ?><script>window.open('galerias.php','_self');</script>
                            
                            <?php 
                    }

                    
                include("footer.php");?>