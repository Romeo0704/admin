<?php
require_once "../conexion.php";



$conexion->query("delete from altas where id_pqs=".$_POST['id']);
echo 'Se elimino correctamente';
?>