<?php 

include("conn.php");


if($_POST['action']=="add"){
    

    //get values
    $titulo = addslashes($_POST['titulo']);
    $tipo = addslashes($_POST['tipo']);


    //insert
    $sql = "insert into patrocinadores(
                                description,tipoPatrocinador)
                        values(
                            '".$titulo."',
                            '".$tipo."'
                        )";

                                     

    if($mysqli->query($sql)){ 
        $idgen = $mysqli->insert_id;

                        
       $archivo = $_FILES['imagen']['name'];
    
       if (isset($archivo) && $archivo != "") {
                
           $tipo = $_FILES['imagen']['type'];
           $tamano = $_FILES['imagen']['size'];
           $temp = $_FILES['imagen']['tmp_name'];
if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 200000000))) {              
               $errorimg = true;
            }else {
               
                $nombrefinal = $idgen.$archivo;
                
                if (move_uploaded_file($temp, '../assets/patrocinadores/'.$nombrefinal)) {
                    chmod('../assets/patrocinadores/'.$nombrefinal, 0777);
                    $sqlima = "update patrocinadores set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
     
       ?><script> window.open('patrocinadores.php?ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('patrocinadores.php?err','_self');</script><?php
    }

}//ADD


if($_POST['action']=="edit"){
    

    //get values
    $titulo = addslashes($_POST['titulo']);
    $descripcion = addslashes($_POST['descripcion']);
    $id = (int)addslashes($_POST['id']);

    //insert
    $sql = "update patrocinadores set 
                    titulo = '".$titulo."',
                    descripcion = '".$descripcion."'
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
                if (move_uploaded_file($temp, '../assets/servicios/'.$nombrefinal)) {
                    chmod('../assets/patrocinadores/'.$nombrefinal, 0777);
                    $sqlima = "update patrocinadores set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('patrocinadores.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('patrocinadores.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 


    $sql = "delete from servicios where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('patrocinadores.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('patrocinadores.php?err','_self');</script><?php
     }

}//DELETE

$mysqli->close();
?>