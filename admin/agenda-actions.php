<?php 
include("conn.php");
if($_POST['action']=="add"){
    //get values
    $titulo = addslashes($_POST['titulo']);
    $contenido = addslashes($_POST['contenido']);

    $lugar = addslashes($_POST['lugar']);

    $fechaI = addslashes($_POST['fecha-hora-inicio']);
    $fechaF = addslashes($_POST['fecha-hora-final']);

    $fechaIni = date_create_from_format('m/d/Y h:i A', $fechaI);
    $fechaFin = date_create_from_format('m/d/Y h:i A', $fechaF);

    $fechaInicio = date_format($fechaIni, 'Y-m-d H:i:s');
    $fechaFinal  = date_format($fechaFin, 'Y-m-d H:i:s');


    $fechaInicio = addslashes($_POST['fechaInicio']);
    $fechaFinal = addslashes($_POST['fechaFinal']);

    $lugar = addslashes($_POST['lugar']);
    //insert
    $sql = "insert into agenda(
            titulo,
            contenido,
            fechaInicio,
            fechaFinal, 
            lugar
        )values(
        '".$titulo."',
        '".$contenido."',
        '".$fechaInicio."',
        '".$fechaFinal."',
        '".$lugar."'
    )";

    if($mysqli->query($sql)){ 
        $idgen = $mysqli->insert_id;
       ?><script> window.open('agenda.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('agenda.php?err','_self');</script><?php
    }
}//ADD

if($_POST['action']=="edit"){
    //get values


    $titulo = addslashes($_POST['titulo']);
    $contenido = addslashes($_POST['contenido']);
    $lugar = addslashes($_POST['lugar']);
    $id = (int)addslashes($_POST['id']);

    $recibidaInicio = addslashes($_POST['fecha-hora-inicio']);
    $recibidaFinal  = addslashes($_POST['fecha-hora-final']);

    $formato_esperado = 'Y-m-d H:i:s';
    $fecha1 = DateTime::createFromFormat($formato_esperado, $recibidaInicio);
    $fecha2 = DateTime::createFromFormat($formato_esperado, $recibidaFinal);


    if ($fecha1 && $fecha1->format($formato_esperado) === $recibidaInicio) {
        $fechaInicio = $recibidaInicio;
    } else {
        $fechaIni = date_create_from_format('m/d/Y h:i A', $fechaI);
        $fechaInicio = date_format($fechaIni, 'Y-m-d H:i:s');
    }

    if ($fecha2 && $fecha2->format($formato_esperado) === $recibidaFinal) {
        $fechaFinal = $recibidaFinal;
    } else {
        $fechaFin = date_create_from_format('m/d/Y h:i A', $fechaF);
        $fechaFinal  = date_format($fechaFin, 'Y-m-d H:i:s');
    }

    //insert
    $sql = "update agenda set 

    $titulo = addslashes($_POST['titulo']);
    $contenido = addslashes($_POST['contenido']);
    $fechaInicio = addslashes($_POST['fechaInicio']);
    $fechaFinal = addslashes($_POST['fechaFinal']);
    $lugar = addslashes($_POST['lugar']);
    $id = (int)addslashes($_POST['id']);

    //insert
    $sql = "update blogs set 

                titulo = '".$titulo."',
                contenido = '".$contenido."',
                fechaInicio = '".$fechaInicio."',
                fechaFinal = '".$fechaFinal."',

                lugar = '".$lugar."'

                fechaFinal = '".$lugar."'

                where id = " . $id;


    if($mysqli->query($sql)){ 
        $idgen = $id;

       ?><script> window.open('agenda.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('agenda.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 
    $sql = "delete from agenda where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('agenda.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('agenda.php?err','_self');</script><?php
    }
}//DELETE

$mysqli->close();
?>