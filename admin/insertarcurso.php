<?php
require_once "../conexion.php";

if(isset($_POST['nombre']) && isset($_POST['costo']) && isset($_POST['requisitos']) && isset($_POST['horainicio']) && isset($_POST['horafin']) && isset($_POST['dias']) 
&& isset($_POST['grupo']) && isset($_POST['sala']) && isset($_POST['fechainicio']) && isset($_POST['cupo'])  && isset($_POST['profesor']) ){


    $conexion->query("insert into cursos (nombre,costo,requisitos,hora_inicio,hora_fin,dia,grupo,sala,fecha_inicio,cupo,matricula_profesor)
           values (
                  '".$_POST['nombre']."',
                  ".$_POST['costo'].",
                  '".$_POST['requisitos']."',
                  '".$_POST['horainicio']."',
                  '".$_POST['horafin']."',
                  '".$_POST['dias']."',
                  '".$_POST['grupo']."',
                  '".$_POST['sala']."',
                  '".$_POST['fechainicio']."',
                  '".$_POST['cupo']."',
                  ".$_POST['profesor']."
              )
            ")or die($conexion->error);

            header("Location: cursos.php?success");


}else{
    header("Location: cursos.php?error=Favor de llenar todos los campos");
}

?>