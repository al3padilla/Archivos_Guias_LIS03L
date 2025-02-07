<?php

// estudiantes y sus notas
$estudiantes = [
    ["nombre" => "Alexandra Padilla", "tarea" => 85, "investigacion" => 90, "examen" => 80],
    ["nombre" => "Luis Medina", "tarea" => 78, "investigacion" => 88, "examen" => 92],
    ["nombre" => "Julio Villalobos", "tarea" => 90, "investigacion" => 75, "examen" => 85],
    ["nombre" => "Karen Guardado", "tarea" => 80, "investigacion" => 70, "examen" => 83],
];

// Ponderaciones
$ponde_notas = ["tarea" => 0.50, "investigacion" => 0.30, "examen" => 0.20];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de Estudiantes</title>
    <link rel="stylesheet" href="promedio.css">
</head>
<body>
    <div class="container">
        <h2>Listado de Promedios udb</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tarea (50%)</th>
                    <th>Investigación (30%)</th>
                    <th>Examen (20%)</th>
                    <th colspan="2">Promedio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante): ?>
                    <?php
                        $promedio = ($estudiante["tarea"] * $ponde_notas["tarea"]) + 
                                    ($estudiante["investigacion"] * $ponde_notas["investigacion"]) + 
                                    ($estudiante["examen"] * $ponde_notas["examen"]);
                    ?>
                    <tr>
                        <td><?= $estudiante["nombre"] ?></td>
                        <td><?= $estudiante["tarea"] ?></td>
                        <td><?= $estudiante["investigacion"] ?></td>
                        <td><?= $estudiante["examen"] ?></td>
                        <td colspan="2" class="promedio"><?= number_format($promedio, 2) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
