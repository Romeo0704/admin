<?php
session_start();
require_once "../conexion.php";

$resultado = $conexion->query("SELECT * from profesores")or die ($conexion->error);

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
            <h1 class="m-2">Registro de Profesores</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-plus mr-2"></i>Registrar Profesor</button>
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
                        <td>Matricula Profesor</td>
                        <td>Nombre</td>
                        <td>Correo eléctornico</td>
                        <td>Teléfono</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                      </tr>
                    </thead>
                    <tbody>
                         <?php
                           while($fila= mysqli_fetch_array($resultado)){
                         ?>
                      <tr>
                       <td><?php echo $fila['matricula_profesor'];?></td>
                       <td><?php echo $fila['nombre'];?></td>
                       <td><?php echo $fila['correo'];?></td>
                       <td><?php echo $fila['telefono'];?></td>
                  
          
                       <td><button class="btn btn-success btnEditar" 
                       data-id="<?php echo $fila['matricula_profesor'];?>"
                       data-matricula="<?php echo $fila['matricula_profesor'];?>"
                       data-nombre="<?php echo $fila['nombre'];?>"
                       data-correo="<?php echo $fila['correo'];?>"
                       data-telefono="<?php echo $fila['telefono'];?>"
                       data-toggle="modal" data-target="#modalEditar">
                       <i class="fa fa-edit"></i></button></td>
          
                       <td><button class="btn btn-danger btnEliminar" 
                       data-id="<?php echo $fila['matricula_profesor'];?>"
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
      <form action="./insertarprofesor.php" method="POST" enctype="multipart/form-data" > 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Profesor</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="matricula" >Matricula Profesor</label> 
          <input type="text" name="matricula" placeholder="matricula" id="matricula" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="nombre" >Nombre</label> 
          <input type="text" name="nombre" placeholder="nombre" id="nombre" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="correo" >Correo eléctornico</label> 
          <input type="text" name="correo" placeholder="correo eléctronico" id="correo" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="telefono" >Teléfono</label> 
          <input type="text" name="telefono" placeholder="telefono" id="telefono" class="form-control" required> 
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
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar Profesor</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar a este profesor?
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
      <form action="./editarprofesor.php" method="POST" enctype="multipart/form-data" > 
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarLabel">Actualizar datos Profesor</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idEdit" name="id" class="form-control">
        <div class="form-group">
          <label for="matricula" >Matricula Profesor</label> 
          <input type="text" name="matricula" placeholder="matricula" id="matricula1" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="nombre" >Nombre</label> 
          <input type="text" name="nombre" placeholder="nombre" id="nombre1" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="correo" >Correo eléctornico</label> 
          <input type="text" name="correo" placeholder="correo eléctronico" id="correo1" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="telefono" >Teléfono</label> 
          <input type="text" name="telefono" placeholder="telefono" id="telefono1" class="form-control" required> 
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
      url: 'eliminarprofesor.php',
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
    var matricula=$(this).data('matricula');
    var nombre=$(this).data('nombre');
    var correo=$(this).data('correo');
    var telefono=$(this).data('telefono');
    $("#matricula1").val(matricula);
    $("#nombre1").val(nombre);
    $("#correo1").val(correo);
    $("#telefono1").val(telefono);
  
});

});
</script>

</body>
</html>
