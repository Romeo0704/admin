<?php
require_once "../conexion.php";

if(isset($_POST['id_pq']) && isset($_POST['num_pq']) && isset($_POST['area']) && isset($_POST['elemento']) && isset($_POST['pregunta']) 
    && isset($_POST['orientacion']) && isset($_POST['inciso']) && isset($_POST['documentos'])){

    $conexion->query("update pqs set
                                id_pq='".$_POST['id_pq']."',
                                num_pq='".$_POST['num_pq']."',
                                area='".$_POST['area']."',
                                elemento='".$_POST['elemento']."',
                                pregunta='".$_POST['pregunta']."',
                                orientacion='".$_POST['orientacion']."',
                                orientacion='".$_POST['inciso']."',
                                documentos='".$_POST['documentos']."'

                                where id_pq=".$_POST['id']);
                                header("Location: pqs.php?success");                     
}
?>