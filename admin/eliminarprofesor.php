<?php
require_once "../conexion.php";



$conexion->query("delete from profesores where matricula_profesor=".$_POST['id']);
echo 'Se elimino correctamente';
?>
