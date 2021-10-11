<?php

    require_once('models/alumno.php');
    require_once('conexion.php');
    BD::createInstance();

    class AlumnosController {
        public function index(){
            include_once('views/alumnos/index.php');
        }
        public function store(){
            
            if ($_POST) {
                $nombre = $_POST['nombre'];
                $nif = $_POST['nif'];
                $apellidos = $_POST['apellidos'];
                Alumno::create($nombre, $nif, $apellidos);
            }
            include_once('views/alumnos/store.php');
        }
        public function update(){
            include_once('views/alumnos/update.php');
        }
    }
?>