<?php
require 'valores_sesion.php';

require_once "conexion.php";

$num_empleado = $_POST['num_empleado'];
$contraseña = $_POST['password'];

$sql ="SELECT num_empleado FROM usuarios WHERE num_empleado='$num_empleado' and contraseña='$contraseña' ";
$validar_login= mysqli_query($conexion,$sql);

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $num_empleado;
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