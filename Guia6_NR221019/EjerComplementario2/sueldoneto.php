<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Datos del empleado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class='container'>
<?php
spl_autoload_register(function($className){
    if (is_file("{$className}.class.php")){
        include_once("{$className}.class.php");
    } else {
        die("{$className}.class.php No existe en el proyecto");
    }
});

if(isset($_POST['enviar'])){
    echo "<h3>Boleta de pago del empleado</h3>";
    $name = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
    $sueldo = isset($_POST['sueldo']) ? doubleval($_POST['sueldo']) : 0.0;
    $numHorasExtras = isset($_POST['horasextras']) ? intval($_POST['horasextras']) : 0;
    $pagohoraextra = isset($_POST['pagohoraextra']) ? floatval($_POST['pagohoraextra']) : 0.0;
    $prestamo = isset($_POST['prestamo']) ? floatval($_POST['prestamo']) : 0.0;

    $empleado1 = new empleado();
    $empleado1->obtenerSalarioNeto($name, $apellido, $sueldo, $numHorasExtras, $pagohoraextra, $prestamo);
} else {
?>
<section class="container">
    <nav class="navbar navbar-dark bg-primary text-white">
        <h1>Formulario empleado - MODIFICADO</h1>
    </nav>
    <article>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <fieldset>
                <div class="form-group">
                    <label for="nombre">Nombre empleado:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido empleado:</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="sueldo">Sueldo empleado ($):</label>
                    <input type="text" name="sueldo" id="sueldo" class="form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="horasextras">Número horas extras:</label>
                    <input type="text" name="horasextras" id="horasextras" class="form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="pagohoraextra">Pago por hora extra:</label>
                    <input type="text" name="pagohoraextra" id="pagohoraextra" class="form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="prestamo">Descuento por préstamo:</label>
                    <input type="text" name="prestamo" id="prestamo" class="form-control" /><br />
                </div>
                <input type="submit" name="enviar" class="btn btn-primary mb-2" value="Enviar" />&nbsp;
                <input type="reset" name="limpiar" class="btn btn-secondary mb-2" value="Restablecer" />
            </fieldset>
        </form>
    </article>
</section>
<?php
}
?>
</body>
</html>
