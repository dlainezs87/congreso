<?php 
include("open.php");
?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Datos Formulario</h1>
</head><!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
    <button onclick="exportTableToExcel('tblData')">Export Table Data To Excel File</button>
        <div class="table-responsive">
            <table class="table table-bordered" id="tblData" width="100%" cellspacing="10">
                <thead>
                    <tr>
                        <th class="col-2">Nombre</th>
                        <th class="col-2">Email</th>
                        <th class="col-2">Telefono</th>
                        <th class="col-2">Participacion</th>
                        <th class="col-2">Carnet</th>
                        <th class="col-2">Forma de Pago</th>
                        <th class="col-2">Empresa</th>
                        <th class="col-2">Pais</th>
                        <th class="col-2">Fecha</th>
                        <th class="col-2">Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("conn.php");

                    $sql = "select * from datosformulario order by Fecha ASC";

                    $query = $mysqli->query($sql);
                    while($row = $query->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?= $row['Nombre'] . ' ' . $row['Apellidos']?></td>
                        <td><?= $row['Email']?></td>
                        <td><?= $row['Telefono']?></td>
                        <td><?= $row['Participacion']?></td>
                        <td><?= $row['Carnet']?></td>
                        <td><?= $row['FormaPago']?></td>
                        <td><?= $row['Empresa']?></td>
                        <td><?= $row['Pais']?></td>
                        <td><?= $row['Fecha']?></td>
                        <td><?= $row['Mensaje']?></td>
                    </tr>
                    <?php 
                    }//while
                    $mysqli->close();?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function exportTableToExcel(tableID, filename = ''){
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);

        var tdContent = "";  // Variable para almacenar el contenido de los td

        // Recorrer cada fila de la tabla
        for (var i = 0; i < tableSelect.rows.length; i++) {
            var row = tableSelect.rows[i];

            // Recorrer cada celda de la fila
            for (var j = 0; j < row.cells.length; j++) {
                var cell = row.cells[j];
                tdContent += cell.innerHTML.replace(/ /g, "%20") + " ";  // Reemplazar espacios y agregar contenido a la variable
            }

            tdContent += "\n";  // Agregar salto de línea después de cada fila
        }

        // Specify file name
        filename = filename?filename+'.xls':'excel_data.xls';
        
        // Create download link element
        downloadLink = document.createElement("a");
        
        document.body.appendChild(downloadLink);
        
        if(navigator.msSaveOrOpenBlob){
            var blob = new Blob(['ufeff', tdContent], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob( blob, filename);
        }else{
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tdContent;
        
            // Setting the file name
            downloadLink.download = filename;
            
            //triggering the function
            downloadLink.click();
        }
    }
</script>

<?php include("footer.php");?>
