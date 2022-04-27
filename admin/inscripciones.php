<?php
session_start();
require_once "../conexion.php";


$resultado = $conexion->query("select* from inscripcion")or die ($conexion->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manager</title>
  <link rel="shortcut icon" href="../images/unam-icon.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./layouts/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./layouts/css/adminlte.min.css">
  
 
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include "./layouts/header.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Inscripciones</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <?php
          if(isset($_GET['error'])){
        ?>
        <div class="alert alert-danger" role="alert">
         <?php echo $_GET['error']; ?>
         <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php  } ?>

        <?php
          if(isset($_GET['success'])){
        ?>
        <div class="alert alert-success" role="alert">
           Se ha insertado correctamente
         <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php  } ?>

        
        <div class="card"  >
              <div class="card-header" >
                <h3 class="card-title">Cursos Iniciación al Cómputo Semestre 2021-2</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>Id</td>
                        <td>Nombre curso</td>
                        <td>Fecha inicio</td>
                        <td>Grupo</td>
                        <td>Sala</td>
                        <td>Horario</td>
                        <td>Nombre Alumno</td>
                        <td>Correo</td>
                        <td>Celular</td>
                        <td>Número de cuenta</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                      </tr>
                    </thead>
                    <tbody>
                         <?php
                           while($fila= mysqli_fetch_array($resultado)){
                         ?>
                      <tr>
                       <td><?php echo $fila['id_inscripcion'];?></td>
                       <td><?php echo $fila['nombre_curso'];?></td>
                       <td><?php echo $fila['fecha_inicio'];?></td>
                       <td><?php echo $fila['grupo'];?></td>
                       <td><?php echo $fila['sala'];?></td>
                       <td><?php echo $fila['horario'];?></td>
                       <td><?php echo $fila['nombre_alumno'];?></td>
                       <td><?php echo $fila['correo_alumno'];?></td>
                       <td><?php echo $fila['celular_alumno'];?></td>
                       <td><?php echo $fila['num_cuenta'];?></td>
                       
          
                       <td><button class="btn btn-success btnEditar" 
                       data-id_inscripcion="<?php echo $fila['id_inscripcion'];?>"
                       data-nombre_curso="<?php echo $fila['nombre_curso'];?>"
                       data-fecha_inicio="<?php echo $fila['fecha_inicio'];?>"
                       data-grupo="<?php echo $fila['grupo'];?>"
                       data-sala="<?php echo $fila['sala'];?>"
                       data-horario="<?php echo $fila['horario'];?>"
                       data-nombre_alumno="<?php echo $fila['nombre_alumno'];?>"
                       data-correo_alumno="<?php echo $fila['correo_alumno'];?>"
                       data-celular_alumno="<?php echo $fila['celular_alumno'];?>"
                       data-num_cuenta="<?php echo $fila['num_cuenta'];?>"
                       data-toggle="modal" data-target="#modalEditar">
                       <i class="fa fa-edit"></i></button></td>
          
                       <td><button class="btn btn-danger btnEliminar" 
                       data-id_inscripcion="<?php echo $fila['id_inscripcion'];?>"
                       data-toggle="modal" data-target="#modalEliminar">
                       <i class="fa fa-trash"></i></button></td>
          
                      </tr>
                         <?php } ?>
          
                    </tbody>
               
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <!-- Modal Eliminar -->
<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar Inscripción</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar esta inscripción?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger eliminar" data-dismiss="modal">Eliminar</button>
      </div>
    </div>
  </div>
</div>
  <!-- Modal Editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <form action="./editarinscripcion.php" method="POST" enctype="multipart/form-data" > 
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarLabel">Actualizar Inscripción</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idEdit" name="id_inscripcion" class="form-control">
        <div class="form-group">
          <label for="nombre" >Nombre curso</label> 
          <input type="text" name="nombre_curso" placeholder="nombre" id="nombre_curso" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="requisitos" >Fecha Inicio</label> 
          <input type="text" name="fecha_inicio" placeholder="Fecha Inicio" id="fecha_inicio" class="form-control" required> 
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="horainicio" >Grupo</label> 
          <input type="text" name="grupo" placeholder="Grupo" id="grupo" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="horafin" >Sala</label> 
          <input type="text" name="sala" placeholder="Sala" id="sala" class="form-control" required> 
        </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="costo" >Horario</label> 
          <input type="text" name="horario" placeholder="Horario" id="horario" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="dias" >Nombre</label> 
          <input type="text" name="nombre_alumno" placeholder="Nombre" id="nombre_alumno" class="form-control" required> 
        </div>
        </div>
        
        <div class="row">
        <div class="form-group col-6">
          <label for="grupo" >Correo</label> 
          <input type="text" name="correo_alumno" placeholder="Correo" id="correo_alumno" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="sala" >celular</label> 
          <input type="text" name="celular_alumno" placeholder="Celularr" id="celular_alumno" class="form-control" required> 
        </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="cupo" >Numero de cuenta</label> 
          <input type="text" name="num_cuenta" placeholder="Numero de cuenta" id="num_cuenta" class="form-control" required> 
        </div>
        
        </div>
      </div>
      
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary editar">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <?php include "./layouts/footer.php";?>
</div>
<!-- jQuery -->
<script src="./layouts/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./layouts/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="./layouts/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function(){
  var idEliminar= -1;
  var idEditar= -1;
  var fila;
  $(".btnEliminar").click(function(){
    idEliminar=$(this).data('id');
    fila=$(this).parent('td').parent('tr');
  });
  $(".eliminar").click(function(){
    $.ajax({
      url: 'eliminarinscripcion.php',
      method: 'POST',
      data:{
        id:idEliminar
      }
    }).done(function(res){
      alert(res);
      $(fila).fadeOut(1000);
    });
  });
  $(".btnEditar").click(function(){
    idEditar=$(this).data('id_inscripcion');
    var nombre_curso=$(this).data('nombre_curso');
    var fecha_inicio=$(this).data('fecha_inicio');
    var grupo=$(this).data('grupo');
    var sala=$(this).data('sala');
    var horario=$(this).data('horario');
    var nombre_alumno=$(this).data('nombre_alumno');
    var correo_alumno=$(this).data('correo_alumno');
    var celular_alumno=$(this).data('celular_alumno');
    var num_cuenta=$(this).data('num_cuenta');
    $("#nombre_curso").val(nombre_curso);
    $("#fecha_inicio").val(fecha_inicio);
    $("#grupo").val(grupo);
    $("#sala").val(sala);  
    $("#horario").val(horario);  
    $("#nombre_alumno").val(nombre_alumno);
    $("#correo_alumno").val(correo_alumno);
    $("#celular_alumno").val(celular_alumno);
    $("#num_cuenta").val(num_cuenta);
    $("#idEdit").val(idEditar);

});

});
</script>

</body>
</html>
