<?php
require_once "../conexion.php";

if(isset($_POST['matricula']) && isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['telefono']) ){


    $conexion->query("insert into profesores (matricula_profesor,nombre,correo,telefono)
           values (
                  '".$_POST['matricula']."',
                  '".$_POST['nombre']."',
                  '".$_POST['correo']."',
                  '".$_POST['telefono']."'
                  
              )
            ")or die($conexion->error);

            header("Location: profesores.php?success");


}else{
    header("Location: profesores.php?error=Favor de llenar todos los campos");
}

?>