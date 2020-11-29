            <!-- Página para introducir nuevas tareas -->

<?php
 
//Incluyo módulo de acceso a la base de datos 
require('db.php');

$estado = "";
if(isset($_POST['nuevo']) && $_POST['nuevo']==1)
{

$nombreTarea =$_REQUEST['nombreTarea'];
$comentariosTarea = $_REQUEST['comentariosTarea'];
$fechaTopeTarea = $_REQUEST['fechaTopeTarea'];
//$completadaTarea = $_REQUEST['completadaTarea'];
$completadaTarea = 0;

//Consulta con PDO
$consultaInsercion = "insert into listaTareas (`nombreTarea`,`comentariosTarea`,`fechaTopeTarea`,`completadaTarea`) values ('$nombreTarea','$comentariosTarea','$fechaTopeTarea','$completadaTarea')";

//Gestión de errores en la consulta
try
{ 
    $resultadoConsultaInsert = $conexion->prepare($consultaInsercion);
// Especifico el fetch mode antes de llamar a fetch()
    $resultadoConsultaInsert->setFetchMode(PDO::FETCH_ASSOC);
// Ejecuto
    $resultadoConsultaInsert->execute();
}
catch(PDOException $error)
{
    erroresConsulta($consultaInsercion, $error->getMessage());
}


$estado = "Nueva tarea insertada con éxito.</br></br><a href='view.php'>Ver la nueva tarea</a>";
}
?>

<?php

//Encabezado común para todas las páginas
include_once('header.php');

?>

            <!-- Formulario que requiere validación de datos -->
        <div class="form">
              <div class="row centrado">
                <div class="col text-center">
                  <button id="btnVerTareas" type="button" class="btn btn-outline-info btn-lg" href="view.php"><a class="nav-link" href="view.php" >Ver tareas<span class="sr-only">(current)</span></a></button>
                
                </div>
              </div> 


            <div class="divFormulario ">
                <h1 class"centrado" >Insertar nueva tarea</h1>
                <form class="was-validated" name="form" method="post" action="">

                    <input type="hidden" name="nuevo" value="1" />

                    <div class="form-group">
                        <p><input class="form-control" type="text" name="nombreTarea" placeholder="Título" required /></p>
                    </div>

                    <div class="form-group">
                        <p><textarea class="form-control" type="text" name="comentariosTarea" placeholder="Comentarios" required></textarea></p>
                    </div>

                    <div class="form-group">
                        <p><input class="form-control" type="text" name="fechaTopeTarea" placeholder="Fecha Tope" required /></p>
                    </div>

                    <div class="form-group">
                        <p><input class="form-control" type="text" name="completadaTarea" placeholder="Completada" value="Pendiente" required disabled ></p>
                    </div>


                        <p><input class="btn btn-outline-info btn-lg" name="submit" type="submit" value="Enviar" /></p>
                </form>
                <p style="color: #ff0000;"><?php echo $estado; ?></p>

            </div>
        </div>

<?php

//Pie común para todas las páginas
include_once('footer.php');

?>

