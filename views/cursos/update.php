<div class="card">
    <div class="card-header text-center">
        <h5 class="card-title">Formulario de edición</h5>
    </div>
    <form method="post">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="nombre">Nombre del curso: </label>
                    <input type="text" name="nombre" value="<?php echo $curso->nombre; ?>" id="nombre" required class="form-control" placeholder="Nombre">
                </div>
                <div class="col-md-12 form-group">
                    <label for="nombre">Código: </label>
                    <input type="text" name="codigo" value="<?php echo $curso->codigo; ?>" id="codigo" required class="form-control" placeholder="Código">
                </div>
                <div class="col-md-12 form-group">
                    <label for="nombre">Creditos: </label>
                    <input type="number" name="creditos" value="<?php echo $curso->creditos; ?>" id="creditos" required class="form-control" placeholder="Creditos">
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
        <a class="btn btn-danger mr-1" href="?controller=cursos&action=index" role="button">Cancelar</a>
            <button type="submit" class="btn btn-info">Editar Curso</button>
        </div>
    </form>
</div>