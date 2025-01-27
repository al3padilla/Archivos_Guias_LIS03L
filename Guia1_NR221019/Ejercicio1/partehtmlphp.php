<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximumscale=1.0, minimum-scale=1.0" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
rel="stylesheet" />
</head>
<body>
<div class="container my-5">
<header class="text-center mb-4">
<h1 class="display-4">Demostración de HTML y PHP</h1>
<p class="lead">Compara las diferencias en el uso de HTML y PHP con ejemplos visuales</p>
</header>

</div>
<section class="row d-flex justify-content-between">
    <!-- Sección HTML del lado izquierdo-->
<div class="col-md-5">
<div class="section-title">HTML</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Código HTML</h5>
        <div class="code-block">
            <p>&lt;!DOCTYPE html&gt;</p>
            <p>&lt;html&gt;</p>
            <p class="highlight">&lt;!-- Parte de HTML normal --&gt;</p>
            <p>&lt;/html&gt;</p>
        </div>
        <p>Este es un fragmento de código HTML básico que estructura la página.</p>
    </div>
    <div clas="card-footer text-center">
    <img src="img/html5.png" alt="Logo de HTML5" class="img-fluid" />
    </div>
</div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<?php
 echo ' 
 <div class="col-md-5">
 <div class="section-title">PHP</div>
 <div class="card">
 <div class="card-body">
 <h5 class="card-title">Código PHP</h5>
 <div class="code-block">
 <p>&lt;?php</p>
 <p class="highlight">echo "&lt;h1&gt;Hola desde PHP&lt;/h1&gt;";</p>
 <p>&lt;?&gt;</p>
 </div>
 <p>Este es un ejemplo de cómo PHP se intefra en una página web para generar contenido dinámico.</p>
 </div>
 </div>
 </div>
  <img src="img/php.png" alt="Logo de PHP" class="img-fluid" />

 ';

 ?>

</section>
</div>

</body>
</html>