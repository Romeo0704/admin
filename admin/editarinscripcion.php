
<?php
require_once "../conexion.php";


if(isset($_POST['nombre_curso']) && isset($_POST['fecha_inicio']) && isset($_POST['grupo']) && isset($_POST['sala'])
&& isset($_POST['horario']) && isset($_POST['nombre_alumno']) && isset($_POST['correo_alumno']) && isset($_POST['celular_alumno'])
&& isset($_POST['num_cuenta'])){
  
   
    $conexion->query("update inscripcion set
                                  nombre_curso='".$_POST['nombre_curso']."',
                                  fecha_inicio=".$_POST['fecha_inicio'].",
                                  grupo='".$_POST['grupo']."',
                                  sala='".$_POST['sala']."',
                                  horario='".$_POST['horario']."',
                                  nombre_alumno='".$_POST['nombre_alumno']."',
                                  correo_alumno='".$_POST['correo_alumno']."',
                                  celular_alumno='".$_POST['celular_alumno']."',
                                  num_cuenta=".$_POST['num_cuenta']."
                                  

                                  where id_inscripcion=".$_POST['id_inscripcion']);
                                  header("Location: inscripciones.php?success");                     
}
?>