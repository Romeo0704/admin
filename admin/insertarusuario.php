<?php
require_once "../conexion.php";

if(isset($_POST['id_usuario']) && isset($_POST['id_rol']) && isset($_POST['num_cuenta']) && isset($_POST['nombre']) &&
        isset($_POST['apellido']) && isset($_POST['contraseña'])){


    $conexion->query("insert into usuarios(id_usuario,id_rol,num_cuenta,nombre,apellido,contraseña)
        values (
            '".$_POST['id_usuario']."',
            '".$_POST['id_rol']."',
            '".$_POST['num_cuenta']."',
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