<?php
require_once "../conexion.php";

if(isset($_POST['nombre']) && isset($_POST['costo']) && isset($_POST['requisitos']) && isset($_POST['horainicio']) && isset($_POST['horafin']) && isset($_POST['dias']) 
&& isset($_POST['grupo']) && isset($_POST['sala']) && isset($_POST['fechainicio']) && isset($_POST['cupo'])  && isset($_POST['profesor'])){
  
   
    $conexion->query("update cursos set
                                  nombre='".$_POST['nombre']."',
                                  costo=".$_POST['costo'].",
                                  requisitos='".$_POST['requisitos']."',
                                  hora_inicio='".$_POST['horainicio']."',
                                  hora_fin='".$_POST['horafin']."',
                                  dia='".$_POST['dias']."',
                                  grupo='".$_POST['grupo']."',
                                  sala='".$_POST['sala']."',
                                  fecha_inicio='".$_POST['fechainicio']."',
                                  cupo='".$_POST['cupo']."',
                                  matricula_profesor=".$_POST['profesor']."
                                  
                                  where id_curso=".$_POST['id']);
                                  header("Location: cursos.php?success");                     
}
?>