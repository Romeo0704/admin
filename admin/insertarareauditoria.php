<?php
require_once "../conexion.php";

if(isset($_POST['id_area']) && isset($_POST['areas']) ){


    $conexion->query("insert into areas (id_area,areas)
           values (
                  '".$_POST['id_area']."',
                  '".$_POST['areas']."'
                  
              )
            ")or die($conexion->error);

            header("Location: areauditoria.php?success");


}else{
    header("Location: areauditoria.php?error=Favor de llenar todos los campos");
}

?>