<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Linea 3</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="?controller=paginas&action=inicio">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=alumnos&action=index">Alumnos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=cursos&action=index">Cursos</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <?php
            include_once('router.php');                
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/asignar.js"></script>
</body>
</html>