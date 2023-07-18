<!doctype html>
<html lang="es">

<head>
  <title>Lista de tareas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <header>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="?controlador=tareas&accion=inicio" aria-current="page">Lista de Tareas de Yolanda <span class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" href="?controlador=paginas&accion=inicio">Inicio</a>
                <a class="nav-item nav-link" href="?controlador=tareas&accion=inicio">Tareas</a>
            </div>
        </nav>
    </header>
  
  <main>

  <div class="container">
    <div class="row">
        <div class="col-12">
            <?php include_once("ruteador.php"); ?> <!-- Se pasan las rutas según la vista (tareas) -->
        </div>
        
        
    </div>
  </div>

  </main>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  
</body>

</html>