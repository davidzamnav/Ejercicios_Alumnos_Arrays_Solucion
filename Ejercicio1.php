<?php

include 'head.php';

$alumnos=array("Ana","Pedro","Luis","Esteban",
"Maite","Isabel");
//añado elemento nuevo
$alumnos[]="Oscar";
//visualizo el array entero
print_r($alumnos);
//la otra forma de ver un array
var_dump($alumnos);
echo "<br>El numero de elemntos del arrays es : ".count($alumnos)."<br>";

foreach($alumnos as $valor)
{
    echo $valor." ";
}
//creo un array asociativo
$alumnos_asociativo=array();
$alumnos_asociativo=["Ana"=>5,"Pedro"=>4];
foreach($alumnos_asociativo as $indice=>$valor)
{
    echo $indice." ".$valor." ";
}

echo '<br>Total de aprobados<br>';
//inicializo contador y acumulador
$total_aprobados=0;
$suma_notas=0;
$numero_alumnos=count($alumnos_asociativo);
foreach($alumnos_asociativo as $valor)
{
    $suma_notas+=$valor;

    if($valor>=5)
        $total_aprobados++;

}


include 'pie.php';