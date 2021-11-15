<?php
include 'head.php';
for($i=0;$i<12;$i++)
{
    $repetidos[]=false;
}
$contador=0;
while($contador<5)
{
    $numero=rand(1,12);
    if($repetidos[$numero-1]==false)
    {
        //no ha salido todavia
        $tragaperras[]=$numero;
        $repetidos[$numero-1]=true;
        $contador++;
    }
}
//var_dump($tragaperras);
foreach($tragaperras as $valor)
{
    switch($valor)
    {
        case 1: echo '<img src="imagenes_tragaperras/bar.png" alt="bar" width="100" height="100">';
                break;
        case 2: echo '<img src="imagenes_tragaperras/campana.png" alt="campana" width="100" height="100">';
                break;
        case 3: echo '<img src="imagenes_tragaperras/cereza.png" alt="cereza" width="100" height="100">';
                break;
        case 4: echo '<img src="imagenes_tragaperras/corona.png" alt="corona" width="100" height="100">';
                break;
        case 5: echo '<img src="imagenes_tragaperras/dado.png" alt="dado" width="100" height="100">';
                break;
        case 6: echo '<img src="imagenes_tragaperras/diamante.png" alt="diamante" width="100" height="100">';
                break;
        case 7: echo '<img src="imagenes_tragaperras/dinero.png" alt="dinero" width="100" height="100">';
                break;
        case 8: echo '<img src="imagenes_tragaperras/fresa.png" alt="fresa" width="100" height="100">';
                break;
        case 9: echo '<img src="imagenes_tragaperras/herradura.png" alt="herradura" width="100" height="100">';
                break;
        case 10: echo '<img src="imagenes_tragaperras/siete.png" alt="siete" width="100" height="100">';
                break;
        case 11: echo '<img src="imagenes_tragaperras/trevol.png" alt="trevol" width="100" height="100">';
                break;
        case 12: echo '<img src="imagenes_tragaperras/uvas.png" alt="uvas" width="100" height="100">';
                break;
        
    }
}

include 'pie.php';

