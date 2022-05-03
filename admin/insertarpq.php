<?php
require_once "../conexion.php";

if(isset($_POST['id_pq']) && isset($_POST['num_pq']) && isset($_POST['area']) && isset($_POST['elemento']) && isset($_POST['pregunta'])
    && isset($_POST['orientacion']) && isset($_POST['documentos'])){


    $conexion->query("insert into pqs(id_pq,num_pq,area,elemento,pregunta,orientacion,documentos)
        values (
            '".$_POST['id_pq']."',
            '".$_POST['num_pq']."',
            '".$_POST['area']."',
            '".$_POST['elemento']."',
            '".$_POST['pregunta']."',
            '".$_POST['orientacion']."',
            '".$_POST['documentos']."'
            )
            ")or die($conexion->error);

            header("Location: cursos.php?success");


}else{
    header("Location: cursos.php?error=Favor de llenar todos los campos");
}

?>