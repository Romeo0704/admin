<?php
session_start();
require_once "../conexion.php";

/*$resultado = $conexion->query("select pqs.*, pqs.num_pq as pregunta
from altas inner join pqs on altas.num_pq = pqs.num_pq")or die ($conexion->error);*/
$resultado = $conexion->query("SELECT * from pqs")or die ($conexion->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manager</title>
  <link rel="shortcut icon" href="../images/afac_logo.png">

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
            <h1 class="m-2">Altas PQ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-plus mr-2"></i>Dar de alta nueva PQ</button>
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
          Se ha dado de alta correctamente
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php  } ?>

        
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">PQ's actualizadas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>N??mero de PQ</td>
                        <td>??rea de auditor??a</td>
                        <td>Elemento critico</td>
                        <td>Pregunta de prot??colo (PQ)</td>
                        <td>Orientaci??n para el examen de pruebas</td>
                        <td>Incisos</td>
                        <td>Documentos de referencia</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                      </tr>
                    </thead>
                    <tbody>
                          <?php
                            while($fila= mysqli_fetch_array($resultado)){
                          ?>
                      <tr>
                        <td><?php echo $fila['num_pq'];?></td>
                        <td><?php echo $fila['area'];?></td>
                        <td><?php echo $fila['elemento'];?></td>
                        <td><?php echo $fila['pregunta'];?></td>
                        <td><?php echo $fila['orientacion'];?></td>
                        <td><?php echo $fila['inciso'];?></td>
                        <td><?php echo $fila['documentos'];?></td>

                        <td><button class="btn btn-success btnEditar" 
                        data-id="<?php echo $fila['id_pq'];?>"
                        data-num_pq="<?php echo $fila['num_pq'];?>"
                        data-area="<?php echo $fila['area'];?>"
                        data-elemento="<?php echo $fila['elemento'];?>"
                        data-pregunta="<?php echo $fila['pregunta'];?>"
                        data-orientacion="<?php echo $fila['orientacion'];?>"
                        data-inciso="<?php echo $fila['inciso'];?>"
                        data-documentos="<?php echo $fila['documentos'];?>"
                        data-toggle="modal" data-target="#modalEditar">
                        <i class="fa fa-edit"></i></button></td>
          
                        <td><button class="btn btn-danger btnEliminar" 
                        data-id="<?php echo $fila['id_pq'];?>"
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
  <!-- Modal Agregar-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <form action="./insertarpq.php" method="POST" enctype="multipart/form-data" > 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dar de alta PQ</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
        <div class="form-group">
          <label for="num_pq" >N??mero de PQ</label>
          <select name="num_pq" onchange="pqsllenado()" id="num_pq" class="form-control" required>
          <option>N??mero de PQ</option>
          <?php
              $res= $conexion->query("select * from  pregunta");
              while($fila=mysqli_fetch_array($res)){
                echo '<option value="'.$fila['id_pregunta'].'">'.$fila['id_pregunta'].'</option>';
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="area" >??rea de auditor??a</label> 
          <select name="area" id="area" class="form-control" required>
          <option>??rea de auditor??a</option>
            <?php
              $res= $conexion->query("select * from  areas");
              while($fila=mysqli_fetch_array($res)){
                echo '<option value="'.$fila['areas'].'">'.$fila['areas'].'</option>';
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="elemento" >Elemento critico</label> 
          <select name="elemento" id="elemento" class="form-control" required>
          <option>Elemento critico</option>
            <?php
              $res= $conexion->query("select * from  elemento");
              while($fila=mysqli_fetch_array($res)){
                echo '<option value="'.$fila['elemento'].'">'.$fila['elemento'].'</option>';
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="pregunta" >Pregunta de prot??colo (PQ)</label>
          <textarea class="form-control" id="pregunta" rows="3" name="pregunta"></textarea>
        </div>
        <div class="form-group">
          <label for="orientacion" >Orientaci??n para el examen de pruebas</label>
          <textarea class="form-control" id="orientacion" rows="3" name="orientacion"></textarea>
        </div>
        <div class="form-group">
          <label for="inciso" >Inciso</label>
          <textarea class="form-control" id="inciso" rows="3" name="inciso"></textarea>
        </div>
        <div class="form-group">
          <label for="documentos" >Documentos de referencia</label>
          <textarea class="form-control" id="documentos" rows="3" name="documentos"></textarea>
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
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar PQ</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ??Desea eliminar esta PQ?
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
      <form action="./editarpq.php" method="POST" enctype="multipart/form-data" > 
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarLabel">Actualizar PQ</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idEdit" name="id" class="form-control">
        <div class="form-group">
          <label for="num_pq" >N??mero de PQ</label> 
          <input type="text" name="num_pq" placeholder="N??mero de PQ" id="num_pq1" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="area" >??rea</label> 
          <select name="area" id="area1" class="form-control" required>
              <?php
                $res= $conexion->query("select * from  areas");
                while($fila=mysqli_fetch_array($res)){
                  echo '<option value="'.$fila['areas'].'">'.$fila['areas'].'</option>';
                }
              ?>
          </select>
        </div>
        <div class="form-group">
          <label for="elemento" >Elemento critico</label> 
          <select name="elemento" id="elemento1" class="form-control" required>
              <?php
                $res= $conexion->query("select * from  elemento");
                while($fila=mysqli_fetch_array($res)){
                  echo '<option value="'.$fila['elemento'].'">'.$fila['elemento'].'</option>';
                }
              ?>
          </select>
        </div>
        <div class="form-group">
          <label for="pregunta" >Pregunta de prot??colo (PQ)</label>
          <textarea class="form-control" id="pregunta1" rows="3" name="pregunta"></textarea> 
        </div>
        <div class="form-group">
          <label for="orientacion" >Orientaci??n para el examen de pruebas</label>
          <textarea class="form-control" id="orientacion1" rows="3" name="orientacion"></textarea> 
        </div>
        <div class="form-group">
          <label for="inciso" >Inciso</label>
          <textarea class="form-control" id="inciso1" rows="3" name="inciso"></textarea> 
        </div>
        <div class="form-group">
          <label for="documentos" >Documentos de referencia</label>
          <textarea class="form-control" id="documentos1" rows="3" name="documentos"></textarea> 
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
<!-- Extrar los datos de la BD -->
<script src="../js/pqsextraer.js"></script>
<!-- Editar y Eliminar -->
<script src="../js/pqseditar.js"></script>
</body>
</html>
