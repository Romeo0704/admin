<?php
require_once "./conexion.php";

if( isset($_POST['num_pq']) && isset($_POST['area']) && isset($_POST['elemento']) && isset($_POST['pregunta'])
&& isset($_POST['orientacion']) && isset($_POST['documentos']) && isset($_POST['fecha_inicio']) && isset($_POST['fecha_termino']) && isset($_POST['porcentaje'])
&& isset($_POST['introduccion']) && isset($_POST['fundamentos']) && isset($_POST['cumplimiento']) && isset($_POST['intervenciones']) && isset($_POST['conclusion'])
&& isset($_POST['pruebas']) && isset($_POST['responsable']) && isset($_POST['evidencias']) && isset($_POST['fecha_inicio_atencion']) && isset($_POST['fecha_termino_cap'])
&& isset($_POST['porcentaje_total']) && isset($_POST['actividades']) && isset($_POST['responsable_cap']) && isset($_POST['fecha_inico_final']) && isset($_POST['producto'])
&& isset($_POST['porcentaje_cap']) && isset($_POST['comentarios']) && isset($_POST['fecha_subio_olf']) && isset($_POST['fecha_revision_oaci'])){
 

    $conexion->query("insert into formulario(num_pq,area,elemento,pregunta,orientacion,documentos,fecha_inicio,fecha_termino,porcentaje,introduccion,fundamentos,
                        cumplimiento,intervenciones,conclusion,pruebas,responsable,evidencias,fecha_inicio_atencion,fecha_termino_cap,
                        porcentaje_total,actividades,responsable_cap,fecha_inico_final,producto,porcentaje_cap,comentarios,
                        fecha_subio_olf,fecha_revision_oaci)
        values (
            '".$_POST['num_pq']."','".$_POST['area']."','".$_POST['elemento']."','".$_POST['pregunta']."','".$_POST['orientacion']."','".$_POST['documentos']."',
            '".$_POST['fecha_inicio']."','".$_POST['fecha_termino']."','".$_POST['porcentaje']."','".$_POST['introduccion']."',
            '".$_POST['fundamentos']."','".$_POST['cumplimiento']."','".$_POST['intervenciones']."','".$_POST['conclusion']."',
            '".$_POST['pruebas']."','".$_POST['responsable']."','".$_POST['evidencias']."','".$_POST['fecha_inicio_atencion']."',
            '".$_POST['fecha_termino_cap']."','".$_POST['porcentaje_total']."','".$_POST['actividades']."','".$_POST['responsable_cap']."',
            '".$_POST['fecha_inico_final']."','".$_POST['producto']."','".$_POST['porcentaje_cap']."','".$_POST['comentarios']."',
            '".$_POST['fecha_subio_olf']."','".$_POST['fecha_revision_oaci']."'
            )
            ")or die($conexion->error);

            header("Location: formulario.php?success");


}else{
    header("Location: formulario.php?error=Favor de llenar todos los campos");
}

?>