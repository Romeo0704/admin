<?php
require_once "conexion.php";

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['contraseña'])
&& isset($_POST['cuenta']) && isset($_POST['celular']) && isset($_POST['telcasa']) && isset($_POST['carrera']) && isset($_POST['semestre'])){

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $contraseña = $_POST['contraseña'];
  $cuenta = $_POST['cuenta'];
  $celular = $_POST['celular'];
  $telcasa = $_POST['telcasa'];
  $carrera = $_POST['carrera'];
  $semestre = $_POST['semestre'];
  
  $query = "INSERT INTO alumnos (nombre,apellido,correo,contraseña,num_cuenta,celular,telefono,carrera,semestre) 
  VALUES ('$nombre','$apellido','$correo','$contraseña','$cuenta','$celular','$telcasa','$carrera','$semestre')";


//verificar que el correo no se repita en la BD
$verificar_correo= mysqli_query($conexion, "SELECT * FROM alumnos WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script> 
      alert("Este correo ya esta registrado");
      window.location = "registro-alumnos.html";
    </script>
    ';
    mysqli_close($conexion);
}

$resultado = mysqli_query($conexion, $query);

if($resultado){
    echo '
    <script> 
      alert("Usuario registrado exitosamente!");
      window.location = "index.html";
    </script>
    ';
} else {
    echo '
    <script> 
      alert("Error, fallo su registro!");
      window.location = "registro-alumnos.html";
    </script>
    ';
}


}else{
    header("Location: registro-alumnos.html?error=Favor de llenar todos los campos");
}


?>