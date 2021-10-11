<?php

    require_once('models/alumno.php');
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
                Alumno::create($nombre, $nif, $apellidos);
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
                Alumno::update($id, $nombre, $apellidos, $nif);
                header("Location:./?controller=alumnos&action=index");
            }

            include_once('views/alumnos/update.php');
        }
        public function delete()
        {
            $id = $_GET['id'];
            Alumno::delete($id);
            header("Location:./?controller=alumnos&action=index");
        }
    }
?>