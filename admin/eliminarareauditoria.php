<?php
    require_once "../conexion.php";
    if( isset($_POST['idEliminar']) && isset($_POST['areas']) ){

        $area = $_POST['areas'];
        $id = $_POST['idEliminar'];
    
        $conexion->query("delete from areas 
                                      
                                      where id_area='$id'");
                                      echo 'Se elimino correctamente';                     
    }

    $conexion->query("delete from areas where id_area=".$_POST['id']);
    echo 'Se elimino correctamente';
?>
