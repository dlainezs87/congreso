<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Videos</h1>
                    <p class="mb-4">Agregar nuevo</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="videos-actions.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Titulo:</label>
                                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
                            </div>

                          

                            <div class="form-group">
                                <label for="exampleInputEmail1">Embed de Youtube:</label>
                                <textarea class="form-control" name="video" id="video" cols="30" rows="10"></textarea>
                            </div>



                        
                            
                            <button type="submit" class="btn btn-primary">Agregar</button>
                            <a  href="videos.php" type="submit" class="btn btn-secondary">Regresar</a>
                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>

                  

 <?php include("footer.php");?>