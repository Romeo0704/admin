<?php
require_once "../conexion.php";



$conexion->query("delete from cursos where id_curso=".$_POST['id']);
echo 'Se elimino correctamente';
?>