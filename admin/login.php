<?php 
include("../config/conexion.php");

$usuario = addslashes($_POST['usuario']);
$contrasena = addslashes($_POST['contrasena']);

if($usuario!="" and $contrasena!=""){ 
  $sql = "select * from usuarios where usuario='$usuario'";
               $query = $mysqli->query($sql);
               
             
           if ($query->num_rows > 0) {
  // output data of each row
  while($row = $query->fetch_assoc()) {
       if($usuario==$row['usuario'] and $contrasena==$row['contrasena']){ 

        session_start();
        $_SESSION['sesid']=true;
        header("Location: dashboard.php");

    }else{ 
        ?><script>alert("Usuairo o contraseña inválidos.");window.open('index.html','_self');</script><?php
    }
      
  }
} else {
  ?><script>alert("Usuairo o contraseña inválidos.");window.open('index.html','_self');</script><?php
}
   

}else{
    ?><script>alert("Todos los campos son requeridos");window.open('index.html','_self');</script><?php
}//endif

?>