<div class="card">
    <div class="card-header text-center">
        <h5 class="card-title">Formulario de edición</h5>
    </div>
    <form method="post">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="nombre">Nombre del alumno: </label>
                    <input type="text" required value="<?php echo $alumno->nombre; ?>" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                </div>
                <div class="col-md-12 form-group">
                    <label for="apellidos">Apellidos: </label>
                    <input type="text" required value="<?php echo $alumno->apellidos; ?>" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos">
                </div>
                <div class="col-md-12 form-group">
                    <label for="nif">Número de identificación: </label>
                    <input type="number" required value="<?php echo $alumno->nif; ?>" name="nif" id="nif" class="form-control" placeholder="NIF">
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <a class="btn btn-danger mr-1" href="?controller=alumnos&action=index" role="button">Cancelar</a>
            <button type="submit" class="btn btn-info">Editar Alumno</button>
        </div>
    </form>
</div>