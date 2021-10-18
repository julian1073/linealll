<?php
    require_once('config/funcs.php');

    if (isset($_POST['submit'])) {
        AntiCSRF();
    }
    GenerarAntiCSRF();//Genera un token para evitar ataques CSRF
?>
<div class="row">
    <div class="col">
        <h3>Listado de cursos</h3>
    </div>
</div>
<hr>
<form method="post" id="formAsignar" name="formAsignar">
    <div class="form-group">
        <input type="hidden" name="idAlumno" id="idAlumno" value="<?php echo $id; ?>">
        <select name="curso" id="curso" class="form-control" placeholder="Seleccione un curso" required>
            <option disabled selected>Seleccione un curso</option> 
            <?php foreach ($cursos as $curso) {?>
                <option value="<?php echo $curso->id; ?>"><?php echo $curso->nombre; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <a class="btn btn-info mr-1" href="?controller=alumnos&action=index" role="button">Regresar</a>
        <button type="button" id="btnAsignar" name="btnAsignar" class="btn btn-success">Asignar</button>
        <input type="hidden" name="CSRFToken" value="<?php echo $_SESSION['AntiCSRF'];?>">
    </div>
</form>