<?php
    class Curso {

        public $id;
        public $nombre;
        public $creditos;
        public $codigo;

        public function __construct($id, $nombre, $creditos, $codigo)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->creditos = $creditos;
            $this->codigo = $codigo;
        }

        public static function getAll() 
        {
            $listaAlumnos = [];
            $conexionBD = BD::createInstance();
            $sql = $conexionBD->query("SELECT * FROM cursos");
            
            foreach ($sql->fetchAll() as $curso) {
                $listaAlumnos[] = new Curso($curso['id'], $curso['nombre'], $curso['creditos'], $curso['codigo']);
            }
            return $listaAlumnos;
        }
        
        public static function get($id) 
        {
            $conexionBD = BD::createInstance();
            $sql = $conexionBD->prepare("SELECT * FROM cursos WHERE id = ?");
            $sql->execute(array($id));
            $curso = $sql->fetch();
            return new Curso($curso['id'], $curso['nombre'], $curso['creditos'], $curso['codigo']);
        }

        public static function create($nombre, $codigo, $creditos)
        {
            $conexionBD = BD::createInstance();

            $sql = $conexionBD->prepare("INSERT INTO cursos(nombre, creditos, codigo) VALUES(?,?,?)");
            $sql->execute(array($nombre,$creditos,$codigo));
        }

        public static function delete($id)
        {
            $conexionBD = BD::createInstance();

            $sql = $conexionBD->prepare("DELETE FROM cursos WHERE id=?");
            $sql->execute(array($id));
        }

        public static function update($id, $nombre, $codigo, $creditos)
        {
            $conexionBD = BD::createInstance();
            $sql = $conexionBD->prepare("UPDATE cursos SET nombre=?, codigo=?, creditos=? WHERE id=?");
            $sql->execute(array($nombre,$codigo,$creditos, $id));
        }
    }
?>