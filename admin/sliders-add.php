<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Sliders</h1>
                    <p class="mb-4">Agregar nuevo</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="sliders-actions.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre:</label>
                                <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Título:</label>
                                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enlace:</label>
                                <input type="text" required class="form-control" id="enlace" name="enlace" placeholder="">
                            </div>

                             <div class="form-group">
                                <label for="exampleInputEmail1">Imagen: * Recomendado: 1280 x 600px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>


                          

                        
                            
                            <button type="submit" class="btn btn-primary">Agregar</button>
                            <a  href="sliders.php" type="submit" class="btn btn-secondary">Regresar</a>
                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('contenido'); 
                 
            </script>

 <?php include("footer.php");?>