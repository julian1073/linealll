<div class="row">
    <div class="col">
        <h3>Listado de cursos</h3>
    </div>
    <div class="col text-right">
        <a class="btn btn-success" href="?controller=cursos&action=store" role="button">Agregar</a>
    </div>
</div>
<hr>
<table class="table table-striped table-inverse bordered">
    <thead class="thead-inverse">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Creditos</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($cursos as $curso) { ?>
                <tr>
                    <td scope="row"> <?php echo $curso->codigo;?> </td>
                    <td scope="row"> <?php echo $curso->nombre;?> </td>
                    <td scope="row"> <?php echo $curso->creditos;?> </td>
                    <td>
                       <div class="btn-group" role="group" aria-label="">
                           <a class="btn btn-info mr-1" href="?controller=cursos&action=update&id=<?php echo $curso->id; ?>" role="button">Edit</a>
                           <a class="btn btn-danger" href="?controller=cursos&action=delete&id=<?php echo $curso->id; ?>" role="button">Delete</a>
                       </div> 
                    </td>
                </tr>
            <?php } ?>
        </tbody>
</table>