<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP - Operadores de Comparación y Lógicos</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Arial Black";
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center mb-4">Operadores de Comparación y Lógicos en PHP</h1>
    <p class="lead text-center">Ejemplo de cómo operan los operadores de comparación y lógicos en PHP:</p>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Operadores de Comparación</h5>
            <p class="card-text">
                <?php
                $a = 8;
                $b = 3;
                $c = "8";
                ?>
                <strong>$a == $c:</strong> <?php echo var_export($a == $c, true); ?> (Igual a) <br>
                <strong>$a === $c:</strong> <?php echo var_export($a === $c, true); ?> (Idéntico) <br>
                <strong>$a != $b:</strong> <?php echo var_export($a != $b, true); ?> (Diferente) <br>
                <strong>$a !== $c:</strong> <?php echo var_export($a !== $c, true); ?> (No Idéntico) <br>
                <strong>$a > $b:</strong> <?php echo var_export($a > $b, true); ?> (Mayor que) <br>
                <strong>$a < $b:</strong> <?php echo var_export($a < $b, true); ?> (Menor que) <br>
                <strong>$a >= $b:</strong> <?php echo var_export($a >= $b, true); ?> (Mayor o igual que) <br>
                <strong>$a <= $b:</strong> <?php echo var_export($a <= $b, true); ?> (Menor o igual que) <br>
            </p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title text-center">Operadores Lógicos</h5>
            <p class="card-text">
                <?php
                $x = true;
                $y = false;
                ?>
                <strong>$x && $y:</strong> <?php echo var_export($x && $y, true); ?> (AND) <br>
                <strong>$x || $y:</strong> <?php echo var_export($x || $y, true); ?> (OR) <br>
                <strong>!$x:</strong> <?php echo var_export(!$x, true); ?> (NOT) <br>
                <strong>($a > $b) && ($b < $c):</strong> <?php echo var_export(($a > $b) && ($b < $c), true); ?> (Ejemplo de AND con números) <br>
                <strong>($a == $c) || ($b == 10):</strong> <?php echo var_export(($a == $c) || ($b == 10), true); ?> (Ejemplo de OR con números) <br>
            </p>
        </div>
    </div>
</div>

<!-- Incluir jQuery y Bootstrap JS desde sus CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
