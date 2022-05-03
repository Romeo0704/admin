<?php
require 'valores_sesion.php';

require_once "conexion.php";

$num_cuenta = $_POST['num_cuenta'];
$contraseña = $_POST['password'];

$sql ="SELECT num_cuenta FROM usuarios WHERE num_cuenta='$num_cuenta' and contraseña='$contraseña' ";
$validar_login= mysqli_query($conexion,$sql);

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $num_cuenta;
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