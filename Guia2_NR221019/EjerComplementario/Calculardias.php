<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fecha_nacimiento"])) {
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    if (!empty($fecha_nacimiento) && strtotime($fecha_nacimiento)) {
        $fecha_nac = new DateTime($fecha_nacimiento);
        $hoy = new DateTime();
        $diferencia = $fecha_nac->diff($hoy);
        $dias_vividos = $diferencia->days;
    } else {
        $error = "Fecha no válida. Intente de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="EstiloF.css">
</head>
<body class="bg-light">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <?php if (isset($dias_vividos)): ?>
                            <div class='alert alert-success'>Has vivido <strong><?= $dias_vividos ?></strong> días.</div>
                        <?php else: ?>
                            <div class='alert alert-danger'><?= $error ?></div>
                        <?php endif; ?>
                        <a href="FormPrin.html" class="btn btn-secondary mt-3">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
