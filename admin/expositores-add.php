<?php include("open.php");?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Expositor</h1>
<p class="mb-4">Agregar nuevo</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <form id="add" method="post" action="expositores-action.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-4 form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="">
                </div>
                <div class="col-4 form-group">
                    <label for="pais">Pais:</label>
                    <input type="text" required class="form-control" id="pais" name="pais" placeholder="">
                </div>
                <div class="col-4 form-group">
                    <label for="profesion">Profesion:</label>
                    <input type="text" class="form-control" id="profesion" name="profesion" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="foto">Foto Expositor: * Recomendado: 600 x 600px</label>
                    <input class="form-control" name="foto" id="foto" type="file"/>
                </div>
                <div class="col-6 form-group">
                    <label for="bandera">Imagen Bandera: * Recomendado: 600 x 600px</label>
                    <input class="form-control" name="bandera" id="bandera" type="file"/>
                </div>
            </div>
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary mr-2">Agregar</button>
                <a  href="expositores.php" type="submit" class="btn btn-secondary">Regresar</a>
            </div>
            <input type="hidden" name="action" id="action" value="add">
        </form>
    </div>
</div>
 <?php include("footer.php");?>