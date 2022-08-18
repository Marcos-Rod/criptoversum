<?
$configuracion = $admin->configuracion_detalle();

if (isset($_GET['g']) && $_GET['g'] == 'g') {
    if ($admin->configuracion_edita($_POST)) {
        $message = '<div class="alert alert-success" role="alert">
            Datos actualizados correctamente. Espere un momento...
        </div>
        <script>setTimeout( function() { window.location.href = "index.php?q=configuracion"; }, 2000 );</script>';
    } else {
        $message = '<div class="alert alert-danger" role="alert">
                Hubo un error al editar los datos.
            </div>';
    }
}
?>
<h2 class="mb-4">Configuraci&oacute;n general del sitio</h2>
<hr>
<?= $message ?>
<form action="index.php?q=configuracion&g=g" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-4">
                <label for="nombre_proyecto">Nombre del proyecto</label>
                <input type="text" name="nombre_proyecto" id="nombre_proyecto" placeholder="Mi empresa" class="form-control" value="<?= $configuracion['proyecto'] ?>" />
            </div>
            <div class="mb-4">
                <label for="dominio">URL del sitio</label>
                <input type="text" name="dominio" id="dominio" placeholder="http://www.dominio.com" class="form-control" value="<?= $configuracion['url'] ?>" />
            </div>
            <div class="mb-4">
                <label for="Keywords">Palabras clave</label>
                <textarea name="keywords" id="keywords" rows="4" class="form-control" placeholder="Separadas por ,"><?= $configuracion['keywords'] ?></textarea>
            </div>
            <div class="mb-4">
                <label for="description">Meta descripci&oacute;n</label>
                <textarea name="description" id="description" rows="4" class="form-control" placeholder="Descripci&oacute;n del sitio"><?= $configuracion['descripcion'] ?></textarea>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</form>