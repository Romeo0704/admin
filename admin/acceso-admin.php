<?php

session_start();

require_once "../conexion.php";

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$validar_login = mysqli_query($conexion, "SELECT * FROM administrador WHERE usuario='$usuario' and contraseña='$contraseña' ");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $usuario;

    header('location: cursos.php');
    mysqli_close($conexion);

}else{
    echo '
    <script> 
      alert("Usuario y/o contraseña incorrectos, verifique sus datos");
      window.location = "login_admin.html";
    </script>
    ';
    mysqli_close($conexion);
}


?>