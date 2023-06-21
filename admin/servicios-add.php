<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Servicios</h1>
                    <p class="mb-4">Agregar nuevo</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="servicios-actions.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Titulo:</label>
                                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripción:</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen: * Recomendado: 370 x 243px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file" accept="image/*"/>
                            </div>


                        
            
                            <button type="submit" class="btn btn-primary">Agregar</button>
                            <a  href="servicios.php" type="submit" class="btn btn-secondary">Regresar</a>
                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('descripcion'); 
                 
            </script>

 <?php include("footer.php");?>