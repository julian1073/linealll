<div class="row">
    <div class="col">
        <h3>Listado de alumnos</h3>
    </div>
    <div class="col text-right">
        <a class="btn btn-success" href="?controller=alumnos&action=store" role="button">Agregar</a>
    </div>
</div>
<hr>
<table class="table table-striped table-inverse bordered">
    <thead class="thead-inverse">
        <tr>
            <th>Nif</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Acciones</th>
            <th>Cursos</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($alumnos as $alumno) { ?>
                <tr>
                    <td scope="row"> <?php echo $alumno->nif;?> </td>
                    <td scope="row"> <?php echo $alumno->nombre;?> </td>
                    <td scope="row"> <?php echo $alumno->apellidos;?> </td>
                    <td>
                       <div class="btn-group" role="group" aria-label="">
                           <a class="btn btn-info mr-1" href="?controller=alumnos&action=update&id=<?php echo $alumno->id; ?>" role="button">Edit</a>
                           <a class="btn btn-danger" href="?controller=alumnos&action=delete&id=<?php echo $alumno->id; ?>" role="button">Delete</a>
                       </div> 
                    </td>
                    <td>
                       <div class="btn-group" role="group" aria-label="">
                           <a class="btn btn-success mr-1" href="?controller=alumnos&action=asignar&id=<?php echo $alumno->id; ?>" role="button">Asignar</a>
                           <a class="btn btn-info" href="?controller=alumnos&action=ver&id=<?php echo $alumno->id; ?>" role="button">Ver</a>
                        </div> 
                    </td>
                </tr>
            <?php } ?>
        </tbody>
</table>