<?php
require_once "conexion.php";

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$apellido = $_POST['apellido'];
$grado_academico = $_POST['grado_academico'];

// se tiene que ir el insert a la tabla alumnos
/* $query = "INSERT INTO usuarios (nombre,telefono,email,contraseña) VALUES ('$nombre','$telefono','$email','$contraseña')"; */
$query = "INSERT INTO alumnos (nombre,celular,correo,contraseña,apellido,grado_academico) VALUES ('$nombre','$telefono','$email','$contraseña','$apellido','$grado_academico')";
//verificar que el correo no se repita en la BD
$verificar_email= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");

if(mysqli_num_rows($verificar_email) > 0){
    echo '
    <script> 
      alert("Este correo ya esta registrado");
      window.location = "login.html";
    </script>
    ';
    mysqli_close($conexion);
}

$resultado = mysqli_query($conexion, $query);

if($resultado){
    echo '
    <script> 
      alert("Usuario registrado exitosamente!");
      window.location = "login.html";
    </script>
    ';
} else {
    echo '
    <script> 
      alert("Error, fallo su registro!");
      window.location = "login.html";
    </script>
    ';
}

mysqli_close($conexion);
?>