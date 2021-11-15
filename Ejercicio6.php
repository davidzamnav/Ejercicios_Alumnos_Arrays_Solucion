<?php

include 'head.php';
//parte 1
$capitales= ['Austria'=>'Viena', 'Italia'=>'Roma', 'Francia'=>'París',
 'España'=>'Madrid','Portugal'=>'Lisboa', 'Irlanda'=>'Dublin', 'Alemania'=>'Berlin',
 'Grecia'=>'Atenas'];
 //parte 2
 foreach($capitales as $clave=>$valor)
 {
     if ($clave=="Italia")
        "La capital de Italia es : ".$valor;
 }
 //cambiaria dinamicamente o se introduciria por teclado y recogeriamos el dato
 $capital_buscar="Irlanda";
 $encontrado=false;
 foreach($capitales as $clave=>$valor)
 {
     if ($clave==$capital_buscar)
     {
        "La capital de Italia es : ".$valor;
        $encontrado=true;
    }
 }//foreach
 if($encontrado==false)
    echo "No se ha encontrado el pais";

//parte 3
//cambiaria dinamicamente o se introduciria por teclado y recogeriamos el dato
$pais_buscar="Madriles";//no estaria
$encontrado=false;
foreach($capitales as $clave=>$valor)
{
    if ($clave==$pais_buscar)
    {
       "E pais  de XXXX es : ".$clave;
       $encontrado=true;
   }
}//foreach
if($encontrado==false)
   echo "No se ha encontrado el esa capital";

   //parte 4

$capitales[]=array("Suecia"=>"Estocolmo");

//parte 5
$encontrado=false;
foreach($capitales as $clave=>$valor)
{
    if ($clave=="Irlanda")
    {
       unset($capitales[$clave]);
       $encontrado=true;
   }
}//foreach
if($encontrado==false)
   echo "No se ha podido borra ese regitro";

//
echo '<br>Array al final del ejercicio <br>';

var_dump($capitales);
 
 include 'pie.php';

