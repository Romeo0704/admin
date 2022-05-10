<?php
require_once "../conexion.php";

if( isset($_POST['id_rol']) && isset($_POST['num_empleado']) && isset($_POST['id_area'])
&& isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['contraseña'])){
 

    $conexion->query("insert into usuarios(id_rol,num_empleado,id_area,nombre,apellido,contraseña)
        values (
            '".$_POST['id_rol']."',
            '".$_POST['num_empleado']."',
            '".$_POST['id_area']."',
            '".$_POST['nombre']."',
            '".$_POST['apellido']."',
            '".$_POST['contraseña']."'
            )
            ")or die($conexion->error);

            header("Location: usuario.php?success");


}else{
    header("Location: usuario.php?error=Favor de llenar todos los campos");
}

?>