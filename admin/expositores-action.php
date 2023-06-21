<?php 

include("conn.php");


if($_POST['action']=="add"){
    

    //get values
    $nombre    = addslashes($_POST['nombre']);
    $pais      = addslashes($_POST['pais']);
    $edad      = addslashes($_POST['edad']);
    $profesion = addslashes($_POST['profesion']);
    $foto      = addslashes($_POST['foto']);

    //insert
    $sql = "insert into expositores(
                    nombre,
                    pais,
                    edad,
                    profesion
                    )values(
                        '".$nombre."',
                        '".$pais."',
                        '".$edad."',
                        '".$profesion."'
                    );";

                                     

    if($mysqli->query($sql)){ 
        $idgen = $mysqli->insert_id;

        $archivo = $_FILES['imagen']['name'];
        if (isset($archivo) && $archivo != "") {
            $tipo = $_FILES['imagen']['type'];
            $tamano = $_FILES['imagen']['size'];
            $temp = $_FILES['imagen']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/expositores/'.$nombrefinal)) {
                    chmod('../assets/expositores/'.$nombrefinal, 0777);
                    $sqlima = "update expositores set foto = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('expositores.php?ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('expositores.php?err','_self');</script><?php
    }

}//ADD

if($_POST['action']=="edit"){
    //get values
    $nombre    = addslashes($_POST['nombre']);
    $pais      = addslashes($_POST['pais']);
    $edad      = addslashes($_POST['edad']);
    $profesion = addslashes($_POST['profesion']);
    $id        = (int)addslashes($_POST['id']);

    //insert
    $sql = "update blogs set 
                nombre = '".$nombre."',
                pais = '".$pais."',
                edad = '".$edad."',
                profesion = '".$profesion."'
                where id = " . $id;

    if($mysqli->query($sql)){ 
        $idgen = $id;

        $archivo = $_FILES['imagen']['name'];
        if (isset($archivo) && $archivo != "") {
            $tipo = $_FILES['imagen']['type'];
            $tamano = $_FILES['imagen']['size'];
            $temp = $_FILES['imagen']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/expositores/'.$nombrefinal)) {
                    chmod('../assets/expositores/'.$nombrefinal, 0777);
                    $sqlima = "update expositores set foto = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('expositores.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('expositores.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 


    $sql = "delete from expositores where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('expositores.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('expositores.php?err','_self');</script><?php
     }

}//DELETE

$mysqli->close();
?>