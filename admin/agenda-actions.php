<?php 
include("conn.php");
if($_POST['action']=="add"){
    //get values
    $titulo = addslashes($_POST['titulo']);
    $contenido = addslashes($_POST['contenido']);
    $lugar = addslashes($_POST['lugar']);
    $destacado = addslashes($_POST['destacado']);

    $fechaI = addslashes($_POST['fecha-hora-inicio']);
    $fechaIni = date_create_from_format('m/d/Y h:i A', $fechaI);
    $fechaInicio = date_format($fechaIni, 'Y-m-d H:i:s');
    

    //insert
    $sql = "insert into agenda(
            titulo,
            contenido,
            fechaInicio,
            lugar,
            destacado
        )values(
        '".$titulo."',
        '".$contenido."',
        '".$fechaInicio."',
        '".$lugar."',
        '".$destacado."'
    )";

    if($mysqli->query($sql)){ 
        $idgen = $mysqli->insert_id;

        $archivo = $_FILES['foto']['name'];
        if (isset($archivo) && $archivo != "") {
            $tipo = $_FILES['foto']['type'];
            $tamano = $_FILES['foto']['size'];
            $temp = $_FILES['foto']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/img/team/'.$nombrefinal)) {
                    chmod('../assets/img/team/'.$nombrefinal, 0777);
                    $sqlima = "update agenda set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
        }

        
        ?><script> window.open('agenda.php?ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('agenda.php?err','_self');</script><?php
    }
}//ADD

if($_POST['action']=="edit"){
    $titulo = addslashes($_POST['titulo']);
    $contenido = addslashes($_POST['contenido']);
    $lugar = addslashes($_POST['lugar']);
    $destacado = addslashes($_POST['destacado']);
    $id = (int)addslashes($_POST['id']);

    $recibidaInicio = addslashes($_POST['fecha-hora-inicio']);

    $formato_esperado = 'Y-m-d H:i:s';
    $fecha1 = DateTime::createFromFormat($formato_esperado, $recibidaInicio);

    if ($fecha1 && $fecha1->format($formato_esperado) === $recibidaInicio) {
        $fechaInicio = $recibidaInicio;
    } else {
        $fechaIni = date_create_from_format('m/d/Y h:i A', $fechaI);
        $fechaInicio = date_format($fechaIni, 'Y-m-d H:i:s');
    }

    //insert
    $sql = "update agenda set
                titulo = '".$titulo."',
                contenido = '".$contenido."',
                fechaInicio = '".$fechaInicio."',
                lugar = '".$lugar."',
                destacado = '".$destacado."'
                where id = " . $id;

    if($mysqli->query($sql)){ 
        $idgen = $id;

        $archivo = $_FILES['foto']['name'];
        if (isset($archivo) && $archivo != "") {
            $tipo = $_FILES['foto']['type'];
            $tamano = $_FILES['foto']['size'];
            $temp = $_FILES['foto']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;

                if (move_uploaded_file($temp, '../assets/img/team/'.$nombrefinal)) {
                    chmod('../assets/img/team/'.$nombrefinal, 0777);

                    $sqlima = "update agenda set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
        }

        
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