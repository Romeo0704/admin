<?php
session_start();
require_once "../conexion.php";

$resultado = $conexion->query("select cursos.*, profesores.nombre as profesor
from cursos inner join profesores on cursos.matricula_profesor = profesores.matricula_profesor")or die ($conexion->error);

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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Registro de Cursos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-plus mr-2"></i>Registrar Curso</button>
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

        
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cursos Iniciación al Cómputo Semestre 2021-2</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Costo</td>
                        <td>Requisitos</td>
                        <td>Hora inicio</td>
                        <td>Hora fin</td>
                        <td>Días</td>
                        <td>Grupo</td>
                        <td>Sala</td>
                        <td>Fecha inicio</td>
                        <td>Cupo</td>
                        <td>Profesor</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                      </tr>
                    </thead>
                    <tbody>
                         <?php
                           while($fila= mysqli_fetch_array($resultado)){
                         ?>
                      <tr>
                       <td><?php echo $fila['id_curso'];?></td>
                       <td><?php echo $fila['nombre'];?></td>
                       <td>$<?php echo $fila['costo'];?></td>
                       <td><?php echo $fila['requisitos'];?></td>
                       <td><?php echo $fila['hora_inicio'];?></td>
                       <td><?php echo $fila['hora_fin'];?></td>
                       <td><?php echo $fila['dia'];?></td>
                       <td><?php echo $fila['grupo'];?></td>
                       <td><?php echo $fila['sala'];?></td>
                       <td><?php echo $fila['fecha_inicio'];?></td>
                       <td><?php echo $fila['cupo'];?></td>
                       <td><?php echo $fila['profesor'];?></td>
          
                       <td><button class="btn btn-success btnEditar" 
                       data-id="<?php echo $fila['id_curso'];?>"
                       data-nombre="<?php echo $fila['nombre'];?>"
                       data-costo="<?php echo $fila['costo'];?>"
                       data-requisitos="<?php echo $fila['requisitos'];?>"
                       data-horaini="<?php echo $fila['hora_inicio'];?>"
                       data-horafin="<?php echo $fila['hora_fin'];?>"
                       data-dia="<?php echo $fila['dia'];?>"
                       data-grupo="<?php echo $fila['grupo'];?>"
                       data-sala="<?php echo $fila['sala'];?>"
                       data-fechaini="<?php echo $fila['fecha_inicio'];?>"
                       data-cupo="<?php echo $fila['cupo'];?>"
                       data-profesor="<?php echo $fila['matricula_profesor'];?>"
                       data-toggle="modal" data-target="#modalEditar">
                       <i class="fa fa-edit"></i></button></td>
          
                       <td><button class="btn btn-danger btnEliminar" 
                       data-id="<?php echo $fila['id_curso'];?>"
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
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <form action="./insertarcurso.php" method="POST" enctype="multipart/form-data" > 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Curso</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nombre" >Nombre</label> 
          <input type="text" name="nombre" placeholder="nombre" id="nombre" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="requisitos" >Requisitos</label> 
          <input type="text" name="requisitos" placeholder="requisitos" id="requisitos" class="form-control" required> 
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="horainicio" >Hora inicio</label> 
          <input type="text" name="horainicio" placeholder="hora inicio" id="horainicio" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="horafin" >Hora fin</label> 
          <input type="text" name="horafin" placeholder="horafin" id="horafin" class="form-control" required> 
        </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="costo" >Costo</label> 
          <input type="number" name="costo" placeholder="costo" id="costo" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="dias" >Días</label> 
          <input type="text" name="dias" placeholder="dias" id="dias" class="form-control" required> 
        </div>
        </div>
        <div class="form-group">
          <label for="profesor" >Profesor</label> 
          <select name="profesor" id="profesor" class="form-control" required>
             <?php
             $res= $conexion->query("select * from  profesores");
               while($fila=mysqli_fetch_array($res)){
                 echo '<option value="'.$fila['matricula_profesor'].'">'.$fila['nombre'].'</option>';
               }
             ?>
          </select>
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="grupo" >Grupo</label> 
          <input type="text" name="grupo" placeholder="grupo" id="grupo" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="sala" >Sala</label> 
          <input type="text" name="sala" placeholder="sala" id="sala" class="form-control" required> 
        </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="cupo" >Cupo</label> 
          <input type="text" name="cupo" placeholder="cupo" id="cupo" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="fechainicio" >Fecha inicio</label> 
          <input type="date" name="fechainicio" placeholder="fechainicio" id="fechainicio" class="form-control" required> 
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

  <!-- Modal Eliminar -->
<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar Curso</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar este curso?
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
      <form action="./editarcurso.php" method="POST" enctype="multipart/form-data" > 
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarLabel">Actualizar curso</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idEdit" name="id" class="form-control">
        <div class="form-group">
          <label for="nombre" >Nombre</label> 
          <input type="text" name="nombre" placeholder="nombre" id="nombre1" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="requisitos" >Requisitos</label> 
          <input type="text" name="requisitos" placeholder="requisitos" id="requisitos1" class="form-control" required> 
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="horainicio" >Hora inicio</label> 
          <input type="text" name="horainicio" placeholder="hora inicio" id="horainicio1" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="horafin" >Hora fin</label> 
          <input type="text" name="horafin" placeholder="horafin" id="horafin1" class="form-control" required> 
        </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="costo" >Costo</label> 
          <input type="number" name="costo" placeholder="costo" id="costo1" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="dias" >Días</label> 
          <input type="text" name="dias" placeholder="dias" id="dias1" class="form-control" required> 
        </div>
        </div>
        <div class="form-group">
          <label for="profesor" >Profesor</label> 
          <select name="profesor" id="profesor1" class="form-control" required>
             <?php
             $res= $conexion->query("select * from  profesores");
               while($fila=mysqli_fetch_array($res)){
                 echo '<option value="'.$fila['matricula_profesor'].'">'.$fila['nombre'].'</option>';
               }
             ?>
          </select>
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="grupo" >Grupo</label> 
          <input type="text" name="grupo" placeholder="grupo" id="grupo1" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="sala" >Sala</label> 
          <input type="text" name="sala" placeholder="sala" id="sala1" class="form-control" required> 
        </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="cupo" >Cupo</label> 
          <input type="text" name="cupo" placeholder="cupo" id="cupo1" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="fechainicio" >Fecha inicio</label> 
          <input type="date" name="fechainicio" placeholder="fechainicio" id="fechainicio1" class="form-control" required> 
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
      url: 'eliminarcurso.php',
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
    idEditar=$(this).data('id');
    var nombre=$(this).data('nombre');
    var requisitos=$(this).data('requisitos');
    var horainicio=$(this).data('horaini');
    var horafin=$(this).data('horafin');
    var costo=$(this).data('costo');
    var dias=$(this).data('dia');
    var profesor=$(this).data('profesor');
    var grupo=$(this).data('grupo');
    var sala=$(this).data('sala');
    var cupo=$(this).data('cupo');
    var fechainicio=$(this).data('fechaini');
    $("#nombre1").val(nombre);
    $("#requisitos1").val(requisitos);
    $("#horainicio1").val(horainicio);
    $("#horafin1").val(horafin);
    $("#costo1").val(costo1);
    $("#dias1").val(dias);
    $("#profesor1").val(profesor);
    $("#grupo1").val(grupo);
    $("#sala1").val(sala);
    $("#cupo1").val(cupo);
    $("#fechainicio1").val(fechainicio);
    $("#idEdit").val(idEditar);

});

});
</script>

</body>
</html>
