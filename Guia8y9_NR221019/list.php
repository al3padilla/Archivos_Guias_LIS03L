<?php
include_once 'Models/EditorialesModel.php';
include_once 'Models/AutoresModel.php';
$model = new AutoresModel();

/*$autor=[

    'codigo_autor'=> "AUT789",
    'nombre_autor'=> "Alexandra",
    'nacionalidad'=> "salvadoreña"
];*/
//echo $model->insert($autor);
//echo $model->update($autor);
//echo $model->delete('AUT789');
var_dump($model->get());





//PRUEBA PARA EDITORIALES
//$model = new EditorialesModel();
/*$editorial=[

    'codigo_editorial'=> "EDI789",
    'nombre_editorial'=> "Prueba UPDATE",
    'contacto'=> "Alexandra",
    'telefono'=> "22001199"
];*/
//echo $model->insert($editorial);
//echo $model->delete('EDI789');

//echo $model->update($editorial);
//var_dump($model->get());