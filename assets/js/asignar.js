$(document).ready(function() {
    $("#btnAsignar").click(function() {
        var idAlumno = $("#idAlumno").val();
        var cursoId = $("#curso").val();
        if (cursoId == '' || cursoId == null) {
            $("#formAsignar").submit(function(event) {
                event.preventDefault();
            });
            Swal.fire("Seleccione un curso", "Debe seleccionar un curso", "error", true);
        } else {

            console.log(idAlumno);
            console.log(cursoId);

            insertCurso(idAlumno, cursoId);
        }
    });
});

function insertCurso(idAlumno, cursoId) {

    var datos = new FormData();
    datos.append('idCurso', cursoId);
    datos.append('id', idAlumno);

    var _urlBase = jQuery(location).attr("href");

    $.ajax({
        type: "POST",
        url: "ajax/asignar.php",
        data: { "idCurso": cursoId, "id": idAlumno, "action": "asignar" },
        dataType: "json"
    }).done(function(response) {
        console.log(response);
        if (response == "success") {
            Swal.fire("Curso registrado", "Operacion realizada con éxito", "success", true);
        } else if (response == "repetido") {
            Swal.fire("Curso ya inscrito", "No se puede registrar de nuevo en el curso", "error", true);
        } else {
            Swal.fire("Ha ocurrido un error", "Error al intentar guardar un curso", "error", true);
        }
    }).fail(function(response) {
        console.log(response);
        Swal.fire("Ha ocurrido un error", "Error al guardar un curso", "error", true);
    });
}