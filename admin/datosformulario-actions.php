<?php 
include("conn.php");
if($_POST['action']=="add"){
    //get values
    $Nombre = (isset($_POST['Nombre'])) ? filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING): '';
    $Apellidos = (isset($_POST['Apellidos'])) ? filter_var($_POST['Apellidos'], FILTER_SANITIZE_STRING): '';
    $Email = (isset($_POST['Email'])) ? filter_var($_POST['Email'], FILTER_SANITIZE_STRING): '';
    $Telefono = (isset($_POST['Telefono'])) ? filter_var($_POST['Telefono'], FILTER_SANITIZE_STRING): '';
    $Participacion = (isset($_POST['Participacion'])) ? filter_var($_POST['Participacion'], FILTER_SANITIZE_STRING): '';
    $Carnet = (isset($_POST['Carnet'])) ? filter_var($_POST['Carnet'], FILTER_SANITIZE_STRING): '';
    $FormaPago = (isset($_POST['FormaPago'])) ? filter_var($_POST['FormaPago'], FILTER_SANITIZE_STRING): '';
    $Empresa = (isset($_POST['Empresa'])) ? filter_var($_POST['Empresa'], FILTER_SANITIZE_STRING): '';
    $Pais = (isset($_POST['Pais'])) ? filter_var($_POST['Pais'], FILTER_SANITIZE_STRING): '';
    $Fecha = (isset($_POST['Fecha'])) ? filter_var($_POST['Fecha'], FILTER_SANITIZE_STRING): '';
    $Mensaje = (isset($_POST['Mensaje'])) ? filter_var($_POST['Mensaje'], FILTER_SANITIZE_STRING): '';

    //insert
    $sql = "insert into datosformulario(
            `Nombre`,
            `Apellidos`,
            `Email`,
            `Telefono`,
            `Participacion`,
            `Carnet`,
            `FormaPago`,
            `Empresa`,
            `Pais`,
            `Mensaje`
        )values(
        '".$Nombre."',
        '".$Apellidos."',
        '".$Email."',
        '".$Telefono."',
        '".$Participacion."',
        '".$Carnet."',
        '".$FormaPago."',
        '".$Empresa."',
        '".$Pais."',
        '".$Fecha."',
        '".$Mensaje."'
    )";

    if($mysqli->query($sql)){ 
        return true;
    }else{ 
        return false;
    }
}
?>