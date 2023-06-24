<?php 
include("conn.php");
if($_POST['action']=="add"){
    //get values
    $Nombre = (isset($_POST['nombre'])) ? filter_var($_POST['nombre'], FILTER_SANITIZE_STRING): '';
    $Apellidos = (isset($_POST['apellido'])) ? filter_var($_POST['apellido'], FILTER_SANITIZE_STRING): '';
    $Email = (isset($_POST['email'])) ? filter_var($_POST['email'], FILTER_SANITIZE_STRING): '';
    $Telefono = (isset($_POST['telefono'])) ? filter_var($_POST['telefono'], FILTER_SANITIZE_STRING): '';
    $Participacion = (isset($_POST['participacion'])) ? filter_var($_POST['participacion'], FILTER_SANITIZE_STRING): '';
    $Carnet = (isset($_POST['carnet'])) ? filter_var($_POST['carnet'], FILTER_SANITIZE_STRING): '';
    $FormaPago = (isset($_POST['formaPago'])) ? filter_var($_POST['formaPago'], FILTER_SANITIZE_STRING): '';
    $Empresa = (isset($_POST['empresa'])) ? filter_var($_POST['empresa'], FILTER_SANITIZE_STRING): '';
    $Pais = (isset($_POST['pais'])) ? filter_var($_POST['pais'], FILTER_SANITIZE_STRING): '';
    $Fecha = (isset($_POST['fecha'])) ? filter_var($_POST['fecha'], FILTER_SANITIZE_STRING): '';
    $Mensaje = (isset($_POST['mensaje'])) ? filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING): '';

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
            `fecha`,
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