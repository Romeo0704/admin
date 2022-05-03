<?php
require 'valores_sesion.php';

require_once "conexion.php";

$empleado = $_POST['empleado'];
$contraseña = $_POST['password'];

$sql ="SELECT empleado FROM empleados WHERE empleado='$empleado' and contraseña='$contraseña' ";
$validar_login= mysqli_query($conexion,$sql);

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $empleado;
    header('location: iniciopq.php');
    mysqli_close($conexion);

}else{
    echo '
    <script> 
      alert("Número y/o contraseña incorrectos, verifique sus datos");
      window.location = "login.html";
    </script>
    ';
    mysqli_close($conexion);
}


?>