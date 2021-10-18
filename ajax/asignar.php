<?php

require_once('../conexion.php');

if ( isset($_POST['action']) == "asignar") {
    if ($_POST) {
        $idAlumno = $_POST['id'];
        $idCurso = $_POST['idCurso'];
        $respuesta = asignar($idAlumno, $idCurso);
        echo json_encode($respuesta);
        exit(); 
    }
}

function asignar($id, $idCurso) 
{
    $conexionBD = BD::createInstance();

    $sql = $conexionBD->prepare("SELECT COUNT(*) FROM alumnos_cursos WHERE id_alumno=? AND id_curso=?");
    $sql->execute(array($id, $idCurso));
    $valor = intval($sql->fetchColumn());

    if($valor == 0){
        $sql = $conexionBD->prepare("INSERT INTO alumnos_cursos(id_alumno, id_curso) VALUES(?,?)");
        if($sql->execute(array($id,$idCurso))){
            return "success";
        }
        else{
            return "Ha ocurrido un error";
        }
    }
    else{
        return "repetido";
    }
}
?>