<?php include("open.php");?>
                    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Agenda</h1>
<p class="mb-4">Agregar nuevo</p>
                    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <form id="add" method="post" action="agenda-actions.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">T&iacute;tulo Tema:</label>
                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
            </div>
            <div class="form-group">
                <label for="fechaInicio">Fecha Inicio:</label>
                <input class="form-control" name="fechaInicio" id="fechaInicio" type="date" />
            </div>
            <div class="form-group">
                <label for="fechaFinal">Fecha Final:</label>
                <input class="form-control" name="fechaFinal" id="fechaFinal" type="date" />
            </div>
            <div class="form-group">
                <label for="lugar">Lugar:</label>
                <input type="text" required class="form-control" id="lugar" name="lugar" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contenido:</label>
                <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a  href="blogs.php" type="submit" class="btn btn-secondary">Regresar</a>
            <input type="hidden" name="action" id="action" value="add">
        </form>
    </div>
</div>

<script>  
    CKEDITOR.replace('contenido'); 
</script>
 <?php include("footer.php");?>