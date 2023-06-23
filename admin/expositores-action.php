<?php 
include("conn.php");
if($_POST['action']=="add"){
    error_log(PHP_EOL.__FILE__.PHP_EOL.'LINE: '.__LINE__.PHP_EOL.'|_FILES: ->'.PHP_EOL.print_r($_FILES,true),3,'C:/xampp/htdocs/codetest.log');
    //get values
    $nombre    = addslashes($_POST['nombre']);
    $pais      = addslashes($_POST['pais']);
    $profesion = addslashes($_POST['profesion']);

    //insert
    $sql = "insert into expositores(
                nombre,
                pais,
                profesion
            )values(
                '".$nombre."',
                '".$pais."',
                '".$profesion."'
            );";

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
<<<<<<< Updated upstream
                if (move_uploaded_file($temp, '../assets/img/expositores/'.$nombrefinal)) {
                    chmod('../assets/img/expositores/'.$nombrefinal, 0777);
=======
                if (move_uploaded_file($temp, '../assets/img/team/'.$nombrefinal)) {
                    chmod('../assets/img/team/'.$nombrefinal, 0777);
>>>>>>> Stashed changes
                    $sqlima = "update expositores set foto = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
        }

        $archivo1 = $_FILES['bandera']['name'];
        if (isset($archivo1) && $archivo1 != "") {
            $tipo = $_FILES['bandera']['type'];
            $tamano = $_FILES['bandera']['size'];
            $temp = $_FILES['bandera']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo1;
                if (move_uploaded_file($temp, '../assets/img/expositores/'.$nombrefinal)) {
                    chmod('../assets/img/expositores/'.$nombrefinal, 0777);
                    $sqlima = "update expositores set bandera = '".$nombrefinal."' where id = " . $idgen;
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
    $profesion = addslashes($_POST['profesion']);
    $id        = (int)addslashes($_POST['id']);

    //insert

    $sql = "update expositores set 
                nombre = '".$nombre."',
                pais = '".$pais."',
                profesion = '".$profesion."'
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
<<<<<<< Updated upstream
                if (move_uploaded_file($temp, '../assets/img/expositores/'.$nombrefinal)) {
                    chmod('../assets/img/expositores/'.$nombrefinal, 0777);
=======
                if (move_uploaded_file($temp, '../assets/img/team/'.$nombrefinal)) {
                    chmod('../assets/img/team/'.$nombrefinal, 0777);
>>>>>>> Stashed changes
                    $sqlima = "update expositores set foto = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
        }

        $archivo1 = $_FILES['bandera']['name'];
        if (isset($archivo1) && $archivo1 != "") {
            $tipo = $_FILES['bandera']['type'];
            $tamano = $_FILES['bandera']['size'];
            $temp = $_FILES['bandera']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo1;
                if (move_uploaded_file($temp, '../assets/img/expositores/'.$nombrefinal)) {
                    chmod('../assets/img/expositores/'.$nombrefinal, 0777);
                    $sqlima = "update expositores set bandera = '".$nombrefinal."' where id = " . $idgen;
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