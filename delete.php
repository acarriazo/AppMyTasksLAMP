            <!-- Archivo para eliminar tareas -->

<?php

//Incluyo módulo de acceso a la base de datos 
require('db.php');

//Consulta con PDO
$idTarea = $_REQUEST['id'];
$consultaEliminacion = "DELETE FROM listaTareas WHERE idTarea=$idTarea";

//Gestión de errores en la consult
try
{ 
    $resultadoConsultaEliminacion = $conexion->prepare($consultaEliminacion);
// Especifico el fetch mode antes de llamar a fetch()
    $resultadoConsultaEliminacion->setFetchMode(PDO::FETCH_ASSOC);
// Ejecuto
    $resultadoConsultaEliminacion->execute();
}
catch(PDOException $error)
{
    erroresConsulta($consultaEliminacion, $error->getMessage());
}

header("Location: view.php");



?>



