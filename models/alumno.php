<?php
    class Alumno {
        public static function create($nombre, $nif, $apellidos){
            $conexionBD = BD::createInstance();

            $sql = $conexionBD->prepare("INSERT INTO alumnos(nombre, nif, apellidos) VALUES(?,?,?)");
            $sql->execute(array($nombre,$nif,$apellidos));
        }
    }
?>