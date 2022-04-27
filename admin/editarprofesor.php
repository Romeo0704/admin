<?php
require_once "../conexion.php";

if(isset($_POST['matricula']) && isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['telefono'])){
  
   
    $conexion->query("update profesores set
                                  matricula_profesor='".$_POST['matricula']."',
                                  nombre='".$_POST['nombre']."',
                                  correo='".$_POST['correo']."',
                                  telefono='".$_POST['telefono']."'
                                  
                                  where matricula_profesor=".$_POST['matricula']);
                                  header("Location: profesores.php?success");                     
}
?>