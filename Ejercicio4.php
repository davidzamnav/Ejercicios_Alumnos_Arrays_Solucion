<?php
session_start();
include 'head.php';
if (isset($_REQUEST['generar']))//he pulsado generar
{
$numeros_mios=array();
$numeros_mios[]=$_REQUEST['numero1'];
$numeros_mios[]=$_REQUEST['numero2'];
$numeros_mios[]=$_REQUEST['numero3'];
$numeros_mios[]=$_REQUEST['numero4'];
$numeros_mios[]=$_REQUEST['numero5'];
$numeros_mios[]=$_REQUEST['numero6'];
//var_dump($numeros_mios);
$numeros_primitiva=array();

//inicializao el array de los aleatorios
for($i=0;$i<49;$i++)
{
    $numeros_primitiva[]=0;
}

$contador=0;
while($contador<6)
{
    $aleatorio=rand(1,49);
    if($numeros_primitiva[$aleatorio-1]==0)
    //el numero NO ha salido
    {
        $numeros_primitiva[$aleatorio-1]=$aleatorio;
        $contador++;
    }
 
}//while
//ya he generado 6 numeros aleatorios distintos
$_SESSION['numeros_primitiva']=$numeros_primitiva;
$_SESSION['numeros_mios']=$numeros_mios;
}//if isset generar

if (isset($_REQUEST['comprobar']))//he pulsado generar
{
    print_r($_SESSION['numeros_mios']);
    print_r($_SESSION['numeros_primitiva']);
    $aciertos=0;
    foreach($_SESSION['numeros_mios'] as $clave=>$valor)
    {
        if (in_array($valor, $_SESSION['numeros_primitiva'])) {
            $aciertos++;
        }
    }
    echo"<br>El numero de aciertos es " . $aciertos;
    

}
echo'<center><img src="images/primitiva.jpg" width="200" height="60" alt="imagen_bucles"/></center><br>';

echo'
<form action="Ejercicio4.php" method="post">
<table>
<thead>
<td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td>

</thead>
<tbody>
<tr>
    <td><input type="text"  name="numero1" value="" size="4" maxlength="4"></td>
    <td><input type="text"  name="numero2" value=""size="4" maxlength="4"></td>
    <td><input type="text"  name="numero3" value=""size="4" maxlength="4"></td>
    <td><input type="text"  name="numero4" value=""size="4" maxlength="4"></td>
    <td><input type="text"  name="numero5" value=""size="4" maxlength="4"></td>
    <td><input type="text"  name="numero6" value=""size="4" maxlength="4"></td>
   
</tbody>
</table>

<br><br>
<input type="submit" name="generar" value="Generar">
<input type="submit" name="comprobar" value="Comprobar">
</form>';
 include 'pie.php';

