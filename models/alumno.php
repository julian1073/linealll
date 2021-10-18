<?php

    require_once('models/curso.php');

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
            if($sql->execute(array($nombre,$nif,$apellidos))){
                return "Se ha almacenado correctamente";
            }
            else{
                return "Ha ocurrido un error";
            }
        }

        public static function delete($id)
        {
            $conexionBD = BD::createInstance();

            $sqlC = $conexionBD->prepare("DELETE FROM alumnos_cursos WHERE id_alumno=?");
            $sqlC->execute(array($id));
            $sql = $conexionBD->prepare("DELETE FROM alumnos WHERE id=?");
            if($sql->execute(array($id))){
                return "Se ha eliminado correctamente";
            }
            else{
                return "Ha ocurrido un error";
            }
        }

        public static function update($id, $nombre, $apellidos, $nif)
        {
            $conexionBD = BD::createInstance();
            $sql = $conexionBD->prepare("UPDATE alumnos SET nombre=?, apellidos=?, nif=? WHERE id=?");
            if($sql->execute(array($nombre,$apellidos,$nif, $id))){
                return "Se ha actualizado correctamente";
            }
            else{
                return "Ha ocurrido un error";
            }
        }
        
        public static function getAllCursos($id)
        {
            $conexionBD = BD::createInstance();
            $sql = $conexionBD->prepare(
                "SELECT c.*
                FROM alumnos_cursos ac
                JOIN cursos c ON c.id = ac.id_curso
                WHERE ac.id_alumno = ?"
            );
            $sql->execute(array($id));

            $lista = [];

            foreach ($sql->fetchAll() as $fila)
            {
                $lista[] = new Curso($fila['id'], $fila['nombre'], $fila['creditos'], $fila['codigo']);
            }

            return $lista;
        }
    }
?>