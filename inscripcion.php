<?php
    require_once "conexion.php";
    include_once ("validar_sesion.php");
    
    $usuario = $_SESSION['usuario'];
    
    $nombre_curso =$_POST['nombre_curso'];
    $fecha_inicio =$_POST['fecha_inicio'];
    $grupo =$_POST['grupo'];
    $sala=$_POST['sala'];
    $profesor=$_POST['profesor'];
    $costo=$_POST['costo'];
    $horario =$_POST['horario'];
    $nombre_alumno=$_POST['nombre_alumno'];
    $correo_alumno=$_POST['correo_alumno'];
    $celular_alumno=$_POST['celular_alumno'];
    $telefono_casa_alumno=$_POST['telefono_casa_alumno'];
    /* $procedencia=$_POST['procedencia']; */
    $carrera =$_POST['carrera'];
    $num_cuenta=$_POST['num_cuenta'];
    $grado_academico =$_POST['grado_academico'];

    $sql="SELECT correo from alumnos where correo='$usuario'";
    $resulte= mysqli_query($conexion,$sql);
    if(mysqli_num_rows($resulte) >= 1){

            /*Insertando los datos en la base de datos*/
            $result = mysqli_query($conexion, "INSERT INTO inscripcion (nombre_curso,fecha_inicio,grupo,sala,profesor,costo,horario,nombre_alumno,correo_alumno,celular_alumno,telefono_casa_alumno,carrera,num_cuenta,grado_academico)
                                        VALUES ('$nombre_curso','$fecha_inicio','$grupo','$sala','$profesor','$costo','$horario','$nombre_alumno','$correo_alumno','$celular_alumno','$telefono_casa_alumno','$carrera','$num_cuenta','$grado_academico')");
            if (!$result) {
                echo'<script type="text/javascript">
                     alert("Ocurrio un Error");
                     window.history.go(-1);
                     
                    </script>';
            }else{
                echo'<script type="text/javascript">
                alert("Inscrito Exitosamente");
                /* window.location.href="cursos.php" */
                /* history.back(); */
                window.history.go(-2);

                
               </script>';
            }
        }else{
            echo'<script type="text/javascript">
                alert("Correo Invalido, Coloque el Correo con el que se Registro");
                /* window.location.href="cursos.php" */
                /* history.back(); */
                window.history.go(-2);

                
               </script>';
        }
?>