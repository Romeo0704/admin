<?php
require_once "../conexion.php";

if(isset($_POST['numpq']) && isset($_POST['area']) && isset($_POST['elemento']) && isset($_POST['pregunta'])
    && isset($_POST['orientacion']) && isset($_POST['documentos'])){


    $conexion->query("insert into altas(numpq,area,elemento,pregunta,orientacion,documentos)
        values (
            '".$_POST['numpq']."',
            ".$_POST['area'].",
            '".$_POST['elemento']."
            '".$_POST['pregunta']."
            '".$_POST['orientacion']."
            '".$_POST['documentos']."
            )
            ")or die($conexion->error);

            header("Location: cursos.php?success");


}else{
    header("Location: cursos.php?error=Favor de llenar todos los campos");
}

?>