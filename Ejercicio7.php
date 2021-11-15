<?php

include 'head.php';
$carrito = ['0'=>['id'=>1, 'Descripcion'=>'Diccionario Australiano', 'Precio'=>24.95,'Unidades'=>2],
 '1'=>['id'=>2, 'Descripcion'=>'Building your own database', 'Precio'=>100,'Unidades'=>4],
 '2'=>['id'=>3, 'Descripcion'=>'Simply JavaScript', 'Precio'=>19.99,'Unidades'=>3],
 '3'=>['id'=>4, 'Descripcion'=>'Android programing', 'Precio'=>39.95,'Unidades'=>1]];
//var_dump($array);
//punto1
foreach($carrito as $clave=>$vector)
{
    if ($vector['id']==3)
    {
         echo "Encontrado el libro ".$vector['Descripcion'].'<br>';
    }
}
//punto2
echo "Articulos con el precio >25 <br>";
echo "---------------------------<br>";
foreach($carrito as $clave=>$vector)
{
    if ($vector['Precio']>25)
    {
         
         echo $vector['Descripcion'].'<br>';
    }
}
//punto3
$precio_total=0;
foreach($carrito as $clave=>$vector)
{
    $precio_total+=($vector['Precio']*$vector['Unidades']);
}
echo '<br><br>Precio Total del Carrito de la compra : '.$precio_total.'<br>';
//insertar
$carrito[]=array('id'=>5, 'Descripcion'=>'Cobol para Dummies', 'Precio'=>30.95,'Unidades'=>1);
//elinminamos
//unset($array[3]);
foreach($carrito as $clave=>$vector)
{
    if($vector['Descripcion']=="Simply JavaScript")
    {
        unset($carrito[$clave]);
    }

}

 
 include 'pie.php';

