<?php
    require_once('config/funcs.php');

    if (isset($_POST['submit'])) {
        AntiCSRF();
    }

    GenerarAntiCSRF();//Genera un token para evitar ataques CSRF
?>
<div class="card">
    <div class="card-header text-center">
        <h5 class="card-title">Formulario de registro</h5>
    </div>
    <form method="post">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="nombre">Nombre del alumno: </label>
                    <input type="text" name="nombre" id="nombre" required class="form-control" placeholder="Nombre">
                </div>
                <div class="col-md-12 form-group">
                    <label for="nombre">Apellidos: </label>
                    <input type="text" name="apellidos" id="apellidos" required class="form-control" placeholder="Apellidos">
                </div>
                <div class="col-md-12 form-group">
                    <label for="nombre">Número de identificación: </label>
                    <input type="number" name="nif" id="nif" required class="form-control" placeholder="NIF">
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <a class="btn btn-info mr-1" href="?controller=alumnos&action=index" role="button">Cancelar</a>
            <button type="submit" class="btn btn-success" name="submit">Guardar Alumno</button>
            <input type="hidden" name="CSRFToken" value="<?php echo $_SESSION['AntiCSRF'];?>">
        </div>
    </form>
</div>