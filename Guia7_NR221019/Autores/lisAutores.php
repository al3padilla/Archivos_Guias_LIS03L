<?php 
require_once 'Models/Autoresmodel.php';

$model = new AutoresModel();

$autor = [
    'codigo_autor' => "AUT013",
    'nombre_autor' => "Alexandra Padilla",
    'nacionalidad' => "Salvadoreña",
];

echo $model->insert($autor);
//echo $model->delete('AUT013');
//echo $model->update($autor);

var_dump($model->get(''));
