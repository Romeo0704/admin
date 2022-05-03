<?php
require_once "../conexion.php";

if(isset($_POST['id_usuario']) && isset($_POST['id_rol']) && isset($_POST['num_cuenta']) && isset($_POST['nombre']) && 
                            isset($_POST['apellido']) && isset($_POST['contraseña'])){
  
   
    $conexion->query("update usuarios set
                                  id_usuario='".$_POST['id_usuario']."',
                                  id_rol='".$_POST['id_rol']."',
                                  num_cuenta='".$_POST['num_cuenta']."',
                                  nombre='".$_POST['nombre']."',
                                  apellido='".$_POST['apellido']."',
                                  contraseña='".$_POST['contraseña']."'
                                  
                                  where id_usuario=".$_POST['id_usuario']);
                                  header("Location: usuario.php?success");                     
}
?>