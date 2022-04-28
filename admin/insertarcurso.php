<?php
require_once "../conexion.php";

if(isset($_POST['nombre']) && isset($_POST['costo']) && isset($_POST['requisitos']) && isset($_POST['profesor']) ){


    $conexion->query("insert into cursos (nombre,costo,requisitos)
           values (
                  '".$_POST['nombre']."',
                  ".$_POST['costo'].",
                  '".$_POST['requisitos']."
              )
            ")or die($conexion->error);

            header("Location: cursos.php?success");


}else{
    header("Location: cursos.php?error=Favor de llenar todos los campos");
}

?>