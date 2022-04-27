<?php
require 'valores_sesion.php';

require_once "conexion.php";

$email = $_POST['email'];
$contraseña = $_POST['password'];

$sql ="SELECT correo FROM alumnos WHERE correo='$email' and contraseña='$contraseña' ";
$validar_login= mysqli_query($conexion,$sql);

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $email;
    header('location: cursos1.php');
    mysqli_close($conexion);

}else{
    echo '
    <script> 
      alert("Email y/o contraseña incorrectos, verifique sus datos");
      window.location = "login.html";
    </script>
    ';
    mysqli_close($conexion);
}


?>