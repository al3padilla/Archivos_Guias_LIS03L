<?php
 //Definición de la clase empleado
 class empleado {
 //Estableciendo las propiedades de la clase
 private static $idEmpleado = 0;
 private $nombre;
 private $apellido;
 private $isss;
 private $renta;
 private $afp;
 private $sueldoNominal;
 private $sueldoLiquido;
 private $pagoxhoraextra;
 private $prestamo; // Nueva propiedad para el préstamo
 
 //Declaración de constantes para los descuentos del empleado
 const descISSS = 0.03;
 const descRENTA = 0.075;
 const descAFP = 0.0625;
 
 //Constructor de la clase
 function __construct(){
 self::$idEmpleado++;
 $this->nombre = "";
 $this->apellido = "";
 $this->sueldoLiquido = 0.0;
 $this->pagoxhoraextra = 0.0;
 $this->prestamo = 0.0; // Inicializar el préstamo en 0
 }
 
 //Destructor de la clase
 function __destruct(){
 echo "<p class=\"msg\">El salario y descuentos del empleado han sido calculados.</p>";
 echo "<a class='a-btn' href='sueldoneto.php'><span class='a-btn-text'>Calcular salario</span> <span class='a-btn-slide-text'>a otro empleado</span></a>";
 }

 //Métodos de la clase empleado
 function obtenerSalarioNeto($nombre, $apellido, $salario, $horasextras, $pagoxhoraextra=0.0, $prestamo=0.0){
 $this->nombre = $nombre;
 $this->apellido = $apellido;
 $this->pagoxhoraextra = $horasextras * $pagoxhoraextra;
 $this->sueldoNominal = $salario;
 $this->prestamo = $prestamo; // Asignar el préstamo recibido
 
 if($this->pagoxhoraextra > 0) {
 $this->isss = ($salario + $this->pagoxhoraextra) * self::descISSS;
 $this->afp = ($salario + $this->pagoxhoraextra) * self::descAFP;
 } else {
 $this->isss = $salario * self::descISSS;
 $this->afp = $salario * self::descAFP;
 }

 $salariocondescuento = $this->sueldoNominal - ($this->isss + $this->afp);
 
 if($salariocondescuento > 2038.10){
 $this->renta = $salariocondescuento * 0.3;
 } elseif($salariocondescuento > 895.24){
 $this->renta = $salariocondescuento * 0.2;
 } elseif($salariocondescuento > 472.00){
 $this->renta = $salariocondescuento * 0.1;
 } else {
 $this->renta = 0.0;
 }
 
 $this->sueldoLiquido = $this->sueldoNominal + $this->pagoxhoraextra - ($this->isss + $this->afp + $this->renta + $this->prestamo);
 $this->imprimirBoletaPago();
 }
 
 function imprimirBoletaPago(){
 echo "<table class='table'><tr><td>Id empleado:</td><td>" . self::$idEmpleado . "</td></tr>";
 echo "<tr><td>Nombre empleado:</td><td>" . $this->nombre . " " . $this->apellido . "</td></tr>";
 echo "<tr><td>Salario nominal:</td><td>$ " . number_format($this->sueldoNominal, 2, '.', ',') . "</td></tr>";
 echo "<tr><td>Salario por horas extras:</td><td>$ " . number_format($this->pagoxhoraextra, 2, '.', ',') . "</td></tr>";
 echo "<tr class='success'><td colspan='2'><h4>Descuentos</h4></td></tr>";
 echo "<tr><td>Descuento seguro social:</td><td>$ " . number_format($this->isss, 2, '.', ',') . "</td></tr>";
 echo "<tr><td>Descuento AFP:</td><td>$ " . number_format($this->afp, 2, '.', ',') . "</td></tr>";
 echo "<tr><td>Descuento renta:</td><td>$ " . number_format($this->renta, 2, '.', ',') . "</td></tr>";
 if ($this->prestamo > 0) {
 echo "<tr><td>Descuento por préstamo:</td><td>$ " . number_format($this->prestamo, 2, '.', ',') . "</td></tr>";
 }
 echo "<tr><td>Total descuentos:</td><td>$ " . number_format($this->isss + $this->afp + $this->renta + $this->prestamo, 2, '.', ',') . "</td></tr>";
 echo "<tr><td>Sueldo líquido a pagar:</td><td>$ " . number_format($this->sueldoLiquido, 2, '.', ',') . "</td></tr>";
 echo "</table>";
 }
 }
?>
