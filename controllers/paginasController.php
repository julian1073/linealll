<?php
    class PaginasController {
        public function inicio() {
            include_once('views/paginas/inicio.php');
        }

        public function error() {
            include_once('views/paginas/error.php');
        }
    }
?>