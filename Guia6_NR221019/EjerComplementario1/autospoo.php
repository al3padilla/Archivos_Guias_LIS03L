<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <title>Venta de autos modificado</title>
</head>
<body>
<div class="container">
    <header>
        <H1>Ejemplo 1 modificado</H1>

        <h3>Selecciona un Auto</h3>
    </header>
    
    <form method="POST" class="mb-3">
        <label for="marca">Elige una marca:</label>
        <select name="marca" id="marca" class="form-control">
            <option value="">-- Seleccionar una marca --</option>
            <option value="Peugeot">Peugeot</option>
            <option value="Renault">Renault</option>
            <option value="BMW">BMW</option>
            <option value="Toyota">Toyota</option>
            <option value="Honda">Honda</option>
        </select>
        <button type="submit" class="btn btn-primary mt-2">Ver Auto</button>
    </form>
    
    <div class="row">
        <?php
        spl_autoload_register(function($class){
            if (is_file("{$class}.class.php")){
                include_once("{$class}.class.php");
            } else {
                die("class/{$class}.class.php No existe en el proyecto");
            }
        });

        // se creara los objetos de cada tipo de auto
        $movil = [
            new auto("Peugeot", "307", "Gris", "img/peugeot.jpg"),
            new auto("Renault", "Clio", "Rojo", "img/renaultclio.jpg"),
            new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg"),
            new auto("Toyota", "Avalon", "Blanco", "img/toyota.jpg"),
            new auto() 
        ];

        // Con POST  va a capturar la marca que se ha selecionado
        $marcaSeleccionada = $_POST['marca'] ?? '';
        
        // Aca se muestra solo el auto seleccionado
        foreach ($movil as $auto) {
            if ($auto->getMarca() == $marcaSeleccionada) {
                $auto->mostrar();
            }
        }
        ?>
    </div>
</div>
</body>
</html>
