<?php
require_once "conexion.php";

$nombre = $_POST['nombre'];
$empleado = $_POST['empleado'];
$contraseña = $_POST['contraseña'];
$apellido = $_POST['apellido'];

// se tiene que ir el insert a la tabla alumnos
/* $query = "INSERT INTO usuarios (nombre,telefono,email,contraseña) VALUES ('$nombre','$telefono','$email','$contraseña')"; */
$query = "INSERT INTO alumnos (nombre,empleado,contraseña,apellido) VALUES ('$nombre','$empleado','$contraseña','$apellido')";
//verificar que el correo no se repita en la BD
$verificar_empleado= mysqli_query($conexion, "SELECT * FROM alumnos WHERE empleado='$empleado'");

if(mysqli_num_rows($verificar_empleado) > 0){
    echo '
    <script> 
      alert("Este empleado ya está registrado");
      window.location = "login.html";
    </script>
    ';
    mysqli_close($conexion);
}

$resultado = mysqli_query($conexion, $query);

if($resultado){
    echo '
    <script> 
      alert("Empleado registrado exitosamente!");
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