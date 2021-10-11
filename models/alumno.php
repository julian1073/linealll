<?php
    class Alumno {

        public $id;
        public $nombre;
        public $nif;
        public $apellidos;

        public function __construct($id, $nombre, $nif, $apellidos)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->nif = $nif;
            $this->apellidos = $apellidos;
        }

        public static function getAll() 
        {
            $listaAlumnos = [];
            $conexionBD = BD::createInstance();
            $sql = $conexionBD->query("SELECT * FROM alumnos");
            
            foreach ($sql->fetchAll() as $alumno) {
                $listaAlumnos[] = new Alumno($alumno['id'], $alumno['nombre'], $alumno['nif'], $alumno['apellidos']);
            }
            return $listaAlumnos;
        }
        
        public static function get($id) 
        {
            $conexionBD = BD::createInstance();
            $sql = $conexionBD->prepare("SELECT * FROM alumnos WHERE id = ?");
            $sql->execute(array($id));
            $alumno = $sql->fetch();
            return new Alumno($alumno['id'], $alumno['nombre'], $alumno['nif'], $alumno['apellidos']);
        }

        public static function create($nombre, $nif, $apellidos)
        {
            $conexionBD = BD::createInstance();

            $sql = $conexionBD->prepare("INSERT INTO alumnos(nombre, nif, apellidos) VALUES(?,?,?)");
            $sql->execute(array($nombre,$nif,$apellidos));
        }

        public static function delete($id)
        {
            $conexionBD = BD::createInstance();

            $sql = $conexionBD->prepare("DELETE FROM alumnos WHERE id=?");
            $sql->execute(array($id));
        }

        public static function update($id, $nombre, $apellidos, $nif)
        {
            $conexionBD = BD::createInstance();
            $sql = $conexionBD->prepare("UPDATE alumnos SET nombre=?, apellidos=?, nif=? WHERE id=?");
            $sql->execute(array($nombre,$apellidos,$nif, $id));
        }
    }
?>