<?php
function convertirUnidades($cantidad, $unidadOrigen, $unidadDestino) {
    $factores = [
        "metros" => 1,
        "yardas" => 1.09361,
        "pies" => 3.28084,
        "varas" => 1.19631
    ];

    if (!isset($factores[$unidadOrigen]) || !isset($factores[$unidadDestino])) {
        return "Unidad no válida";
    }

    $cantidadEnMetros = $cantidad / $factores[$unidadOrigen];
    $resultado = $cantidadEnMetros * $factores[$unidadDestino];

    return round($resultado, 4);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = floatval($_POST["cantidad"]);
    $unidadOrigen = $_POST["unidadOrigen"];
    $unidadDestino = $_POST["unidadDestino"];

    $resultado = convertirUnidades($cantidad, $unidadOrigen, $unidadDestino);

    echo json_encode(["resultado" => $resultado]);
}
?>
