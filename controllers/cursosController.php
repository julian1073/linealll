<?php

    require_once('models/curso.php');
    require_once('conexion.php');
    BD::createInstance();

    class CursosController {
        public function index()
        {
            $cursos = Curso::getAll();
            include_once('views/cursos/index.php');
        }
        public function store()
        {
            if ($_POST) {
                $nombre = $_POST['nombre'];
                $codigo = $_POST['codigo'];
                $creditos = $_POST['creditos'];
                Curso::create($nombre, $codigo, $creditos);
                header("Location:./?controller=cursos&action=index");
            }
            else{
                include_once('views/cursos/store.php');
            }
        }
        public function update()
        {
            $id = $_GET['id'];
            $curso = Curso::get($id);

            if ($_POST) {
                $id = $curso->id;
                $nombre = $_POST['nombre'];
                $codigo = $_POST['codigo'];
                $creditos = $_POST['creditos'];
                Curso::update($id, $nombre, $codigo, $creditos);
                header("Location:./?controller=cursos&action=index");
            }

            include_once('views/cursos/update.php');
        }
        public function delete()
        {
            $id = $_GET['id'];
            Curso::delete($id);
            header("Location:./?controller=cursos&action=index");
        }
    }
?>