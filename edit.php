            <!-- Página para editar tareas existentes -->

<?php

//Incluyo módulo de acceso a la base de datos 
require('db.php');

//Consulta con PDO
$idTarea = $_REQUEST['id'];
$consulta = "SELECT * from listaTareas where idTarea='" . $idTarea . "'";

//Gestión de errores en la consulta
try
{ 
    $resultadoConsultaSelect = $conexion->prepare($consulta);
// Especifico el fetch mode antes de llamar a fetch()
    $resultadoConsultaSelect->setFetchMode(PDO::FETCH_ASSOC);
// Ejecuto
    $resultadoConsultaSelect->execute();
}
catch(PDOException $error)
{
    erroresConsulta($consulta, $error->getMessage());
}

$fila = $resultadoConsultaSelect->fetch();


?>

<?php

//Encabezado común para todas las páginas
include_once('header.php');

?>


        <div class="form">
           
            <h1>Actualizar tarea</h1>

            <?php
            $estado = "";
            if (isset($_POST['nuevo']) && $_POST['nuevo'] == 1) {
                $idTarea = $_REQUEST['idTarea'];
                $nombreTarea = $_REQUEST['nombreTarea'];
                $comentariosTarea = $_REQUEST['comentariosTarea'];
                $fechaTopeTarea = $_REQUEST['fechaTopeTarea'];
               // $completadaTarea = $_REQUEST['completadaTarea'];
                if ($_REQUEST['completadaTarea']=="Pendiente") {
                    $completadaTarea=0;
                    }else {
                        $completadaTarea=1;
                        } 

                $consultaActualizacion = "update listaTareas set nombreTarea='" . $nombreTarea . "', comentariosTarea='" . $comentariosTarea . "', fechaTopeTarea='" . $fechaTopeTarea . "', completadaTarea='" . $completadaTarea . "' where idTarea='" . $idTarea . "'";
               

                //Gestión de errores en la consulta
                try
                { 
                    $resultadoConsultaUpdate = $conexion->prepare($consultaActualizacion);
                // Especifico el fetch mode antes de llamar a fetch()
                    $resultadoConsultaUpdate->setFetchMode(PDO::FETCH_ASSOC);
                // Ejecuto
                    $resultadoConsultaUpdate->execute();
                }
                catch(PDOException $error)
                {
                    erroresConsulta($consultaActualizacion, $error->getMessage());
                }

                $estado = "Tarea actualizada correctamente."; 
                  echo  "<p class='alerta'>". $estado ."</p>";
                    ?>


                
                  <div class='row centrado'>
                    <div class='col text-center'>
                      <button type='button' class='btn btn-outline-info btn-lg' href='view.php'><a class='nav-link' href='view.php' >Ver tareas<span class='sr-only'>(current)</span></a></button>                   
                    </div>
                  </div>
                    <p></p>

                <?php

           
            } else {
                 ?>
             <!-- Formulario que requieres validación -->      
                <div class="divFormulario ">
                    <form class="was-validated" name="form" method="post" action="">

                        <input type="hidden" name="nuevo" value="1" />
                        <input name="idTarea" type="hidden" value="<?php echo $fila['idTarea']; ?>" />
     
                        <div class="form-group">
                            <p><input class="form-control" type="text" name="nombreTarea" placeholder="Título" required value="<?php echo $fila['nombreTarea']; ?>" /></p>
                        </div>

                        <div class="form-group">
                            <p><textarea class="form-control" type="text" name="comentariosTarea" placeholder="Comentarios" required ><?php echo $fila['comentariosTarea']; ?></textarea></p>
                        </div>

                        <div class="form-group">
                            <p><input class="form-control" type="text" name="fechaTopeTarea" placeholder="Fecha Tope" required value="<?php echo $fila['fechaTopeTarea']; ?>" /></p>
                        </div>

                        <div class="form-group">
                            <p><select class="form-control" type="text" name="completadaTarea" placeholder="Completada" required>
                                    <option selected="selected"><?php 
                                            if ($fila["completadaTarea"]==0) {
                                              echo "Pendiente";
                                            }else {
                                              echo "Completada";
                                            } 
                                 ?></option>
                                    <option>Pendiente</option>
                                    <option>Completada</option>
                                </select>
                            </p>
                        </div>
                    </div>


                        <p><input class="btn btn-outline-info btn-lg" name="submit" type="submit" value="Actualizar" /></p>
                </form>       

            <?php
            }
            ?>


<?php

//Pie común para todas las páginas
include_once('footer.php');

?>
