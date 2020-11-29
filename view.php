            <!-- Archivo de listado de tareas -->

<?php

//Incluyo módulo de acceso a la base de datos 
require('db.php');

?>

<?php

//Encabezado común para todas las páginas
include_once('header.php');

?>

            <!-- Lista de tareas, en formato tabla para dispositivos grandes -->
        <div class="form formularioDatos tareasTabla">
                <div class="tablaDatos table-responsive">
                    <h2 class="centrado">Lista de tareas</h2>
                    <table class="table table-striped table-bordered table-hover bg-muted rounded">
                        <thead>
                            <tr class="bg-info cabeceraGeneral ">
                                <th scope="col">Nº</th>
                                <th scope="col">Ref.</th>
                                <th scope="col">Título</th>
                                <th scope="col">Comentarios</th>
                                <th scope="col">Fecha Tope</th>
                                <th scope="col">Completada</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $contador=1;
                            //Consulta con PDO
                            $consulta="Select * from listaTareas ORDER BY idTarea asc;";

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


                            // Muestro los resultados con un bucle
                            while ($fila = $resultadoConsultaSelect->fetch()){
                            ?>
                            <!-- Tabla de resultados -->
                            <tr>
                                <td ><?php echo $contador; ?></td>
                                <td ><?php echo $fila["idTarea"]; ?></td>
                                <td ><?php echo $fila["nombreTarea"]; ?></td>
                                <td ><?php echo $fila["comentariosTarea"]; ?></td>
                                <td ><?php echo $fila["fechaTopeTarea"]; ?></td>
                                <td ><?php 
                                        if ($fila["completadaTarea"]==0) {
                                          echo "Pendiente";
                                        }else {
                                          echo "Completada";
                                        } 
                             ?></td>
                                <td ><a href="edit.php?id=<?php echo $fila["idTarea"]; ?>">Editar</a></td>
                                <td ><a href="delete.php?id=<?php echo $fila["idTarea"]; ?>">Borrar</a></td>

                            </tr>
                            <?php $contador++; } ?>
                        </tbody>
                    </table>
                </div>
        </div>



                            <?php
                            $contador=1;
                            //Consulta con PDO
                            $consulta="Select * from listaTareas ORDER BY idTarea asc;";

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


                            // Muestro los resultados con un bucle
                            while ($fila = $resultadoConsultaSelect->fetch()){
                            ?>
            <!-- Lista de tareas, en formato tarjeta (card) para móviles -->

                            <div class="card tareasTarjeta">
                              <div class="card-body">
                                <h5 class="card-header"><?php echo $fila["idTarea"]; ?>. <?php echo $fila["nombreTarea"]; ?></h5>
                                <p class="card-text"><?php echo $fila["comentariosTarea"]; ?></p>
                                <p class="card-text"><?php echo "Fecha tope: <b>" .$fila["fechaTopeTarea"]."</b>"; ?></p>
                                <p class="card-text"><?php 
                                        if ($fila["completadaTarea"]==0) {
                                          echo "Pendiente";
                                        }else {
                                          echo "Completada";
                                        } 
                             ?></p>
                                <p class="card-footer">
                                    <button type="button" class="btn btn-outline-info btn-sm" href="view.php"><a href="edit.php?id=<?php echo $fila["idTarea"]; ?>">Editar</a></button>
                                    <button type="button" class="btn btn-outline-info btn-sm" href="view.php"><a href="delete.php?id=<?php echo $fila["idTarea"]; ?>">Borrar</a></button>
                                </p>

                              </div>
                            </div

                            <?php $contador++; } ?>
                        
        </div>


<?php

//Pie común para todas las páginas
include_once('footer.php');

?>
