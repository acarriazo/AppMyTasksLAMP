            <!-- Archivo de acceso a la base de datos -->

<?php

//Conexión a la DB mediante PDO con gestión de errores

$host="localhost";
$dbname="tareas";
$usuario="antonio";
$contraseña="1234";


try {
  $conexion = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $contraseña);
//Activo el modo PDO error con excepciones
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<div class='alert alert-info' role='alert'>
  Conexión realizada con éxito
</div>";
} catch(PDOException $error) {
  erroresConexion($error->getMessage());
}



//Función de gestión de errores durante la conexión
function erroresConexion($mensajeError)
{
    echo '<pre>';
    echo 'Error de conexión.';
    echo '</pre>';
    echo $mensajeError;
    die;
}

//Función de gestión de errores durante la consulta
function erroresConsulta($consulta, $mensajeError)
{
    echo '<pre>';
    echo 'Error de consulta.';
    echo $consulta;
    echo '</pre>';
    echo $mensajeError;
    die;
}

?>

