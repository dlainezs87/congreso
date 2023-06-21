<?php 
include("conn.php");
if($_POST['action']=="add"){
    //get values
    $titulo = addslashes($_POST['titulo']);
    $contenido = addslashes($_POST['contenido']);
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