<?php

    require_once('models/alumno.php');
    require_once('models/curso.php');
    require_once('conexion.php');
    BD::createInstance();

    class AlumnosController {
        public function index()
        {
            $alumnos = Alumno::getAll();
            include_once('views/alumnos/index.php');
        }
        public function store()
        {
            if ($_POST) {
                $nombre = $_POST['nombre'];
                $nif = $_POST['nif'];
                $apellidos = $_POST['apellidos'];
                $respuesta = Alumno::create($nombre, $nif, $apellidos);
                header("Location:./?controller=alumnos&action=index");
            }
            else{
                include_once('views/alumnos/store.php');
            }
        }
        public function update()
        {
            $id = $_GET['id'];
            $alumno = Alumno::get($id);

            if ($_POST) {
                $id = $alumno->id;
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $nif = $_POST['nif'];
                $respuesta = Alumno::update($id, $nombre, $apellidos, $nif);
                header("Location:./?controller=alumnos&action=index");
            }

            include_once('views/alumnos/update.php');
        }
        public function delete()
        {
            $id = $_GET['id'];
            $respuesta = json_encode(Alumno::delete($id));
            header("Location:./?controller=alumnos&action=index");
        }
        public function asignar()
        {
            $id = $_GET['id'];
            $cursos = Curso::getAll();

            include_once('views/alumnos/asignar.php');
        }
        public function ver()
        {
            $id = $_GET['id'];
            $cursos = Alumno::getAllCursos($id);

            include_once('views/alumnos/ver.php');
        }
    }
?>