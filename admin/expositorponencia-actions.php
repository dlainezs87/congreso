<?php 
include("conn.php");
if($_POST['action']=="add"){
    //get values
    $idExpositor = addslashes($_POST['idExpositor']);
    $idPonencia = addslashes($_POST['idPonencia']);

    //insert
    $sql = "insert into expositorvsponencia(
            idExpositor,
            idPonencia
        )values(
        '".$idExpositor."',
        '".$idPonencia."'
    )";

    if($mysqli->query($sql)){ 
        $idgen = $mysqli->insert_id;
       ?><script> window.open('expositorponencia.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('expositorponencia.php?err','_self');</script><?php
    }
}//ADD

if($_POST['action']=="edit"){
    //get values

    $idExpositor = addslashes($_POST['idExpositor']);
    $idPonencia = addslashes($_POST['idPonencia']);
    $id = (int)addslashes($_POST['id']);


    //insert
    $sql = "update expositorvsponencia set 
                idExpositor = '".$idExpositor."',
                idPonencia = '".$idPonencia."'
                where id = " . $id;
    if($mysqli->query($sql)){ 
        $idgen = $id;

       ?><script> window.open('expositorponencia.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('expositorponencia.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 
    $sql = "delete from expositorvsponencia where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('expositorponencia.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('expositorponencia.php?err','_self');</script><?php
    }
}//DELETE

$mysqli->close();
?>