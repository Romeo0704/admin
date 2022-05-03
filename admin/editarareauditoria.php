<?php
require_once "../conexion.php";

if(isset($_POST['matricula']) && isset($_POST['nombre']) ){
  
   
    $conexion->query("update areas set
                                  id_area='".$_POST['matricula']."',
                                  areas='".$_POST['nombre']."'
                                  
                                  where id_area=".$_POST['matricula']);
                                  header("Location: areauditoria.php?success");                     
}
?>