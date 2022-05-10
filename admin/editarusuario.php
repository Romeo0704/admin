<?php
require_once "../conexion.php";

if(isset($_POST['id_usuario']) && isset($_POST['id_rol']) && isset($_POST['num_empleado']) && isset($_POST['id_area']) 
&& isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['contraseña'])){
  
   
    $conexion->query("update usuarios set
                                  id_usuario='".$_POST['id_usuario']."',
                                  id_rol='".$_POST['id_rol']."',
                                  num_empleado='".$_POST['num_empleado']."',
                                  id_area='".$_POST['id_area']."',
                                  nombre='".$_POST['nombre']."',
                                  apellido='".$_POST['apellido']."',
                                  contraseña='".$_POST['contraseña']."'
                                  
                                  where id_usuario=".$_POST['id_usuario']);
                                  header("Location: usuario.php?success");                     
}
?>