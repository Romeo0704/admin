<?php
require_once "./conexion.php";

if( isset($_POST['num_pq']) && isset($_POST['area']) && isset($_POST['elemento'])){
 

    $conexion->query("insert into formulario(num_pq,area,elemento)
        values (
            '".$_POST['num_pq']."',
            '".$_POST['area']."',
            '".$_POST['elemento']."'
            )
            ")or die($conexion->error);

            header("Location: formulario.php?success");


}else{
    header("Location: formulario.php?error=Favor de llenar todos los campos");
}

?>