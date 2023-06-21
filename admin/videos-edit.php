<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Videos</h1>
                    <p class="mb-4">Editar video existente</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    include("conn.php");
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from videos where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="videos-actions.php"  enctype="multipart/form-data">
                           
                        
                        <div class="form-group">
                                <label for="exampleInputEmail1">Titulo:</label>
                                <input type="text" required class="form-control" value="<?php echo ($row['titulo'])?>" id="titulo" name="titulo" placeholder="">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Embed de Youtube:</label>
                                <textarea class="form-control" name="video" id="video" cols="30" rows="10"><?php echo $row['video']?></textarea>
                            </div>

                           

            

                        
                    


       
                            
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <a href="videos.php" class="btn btn-secondary">Regresar</a>
                            <input type="hidden" name="action" id="action" value="edit">
                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                            </form>
                        </div>
                    </div>

                

                <?php 
                $mysqli->close();
                    }else{ 
                        ?><script>window.open('videos.php','_self');</script><?php 
                    }

                    
                include("footer.php");?>