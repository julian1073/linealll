<div class="row">
    <div class="col">
        <h3>Listado de cursos del alumno</h3>
    </div>
</div>
<hr>
<table class="table table-striped table-inverse bordered">
    <thead class="thead-inverse">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Creditos</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($cursos as $curso) { ?>
                <tr>
                    <td scope="row"> <?php echo $curso->codigo;?> </td>
                    <td scope="row"> <?php echo $curso->nombre;?> </td>
                    <td scope="row"> <?php echo $curso->creditos;?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-info mr-1 mt-3" href="?controller=alumnos&action=index" role="button">Regresar</a>