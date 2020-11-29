            <!-- Archivo de encabezado de todas las páginas -->

<!DOCTYPE html>
<html lang="es">
    <head>

          <title>APP-myTasks</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap -->        
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- Hoja de estilos personalizada -->
          <link rel="stylesheet" type="text/css" href="css/styles.css"> 

    </head>

    <body>

            <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"></span>
                <a class="navbar-brand d-none d-lg-inline-block" href="#">
                      
            APP-myTasks 
                </a>

                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                                        
                        <li class="nav-item">
                            <a class="nav-link" href="insert.php" >Insertar nueva tarea <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="view.php" >Lista de tareas<span class="sr-only">(current)</span></a>
                        </li>                               

                </ul>
            
            </div>
                    
        </nav>

        <div class="jumbotron text-center jumbotron-fluid">
          <div class="container">
            <h3 class="display-4">APP-myTasks Apache + MySql + PHP</h3>
            <p class="lead">Modifica el tamaño de esta página "responsive" que se adapta a los diferentes dispositivos para ver el efecto.</p>
          </div>
        </div>
