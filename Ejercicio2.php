<?php

include 'head.php';
echo '<h4>CLASIFICACIÓN LIGA BBVA</h4>';
  $equipo['Atletico']  = 90;  $equipo['Levante']= 48;
  $equipo['Barcelona']  = 87;  $equipo['Malaga']= 45;
  $equipo['R.Madrid'] = 87;  $equipo['Rayo'] = 43;
  $equipo['Atletic'] = 70;  $equipo['Getafe'] = 42;
  $equipo['Sevilla']  = 63;  $equipo['Español']= 42;
  $equipo['Villareal']   = 59;  $equipo['Granada'] = 41;
  $equipo['R.Sociedad'] = 59;  $equipo['Elche']= 40;
  $equipo['Valencia']  = 49;  $equipo['Almeria']= 40;
  $equipo['Celta']  = 19;  $equipo['Osasuna'] = 39;
  $equipo['Valladolid'] = 36;
  $equipo['Betis'] = 25;
  arsort($equipo); 
  //var_dump($equipo);
  echo'
  <table>
  <thead>
    <td>Nombre equipo</td>
    <td>Puntuacion</td>
  </thead>
  <tbody>';

foreach($equipo as $indice=>$valor)
{
    echo'<tr>
     <td>'.$indice.'</td>
     <td>'.$valor.'</td>
   <tr>';
}
echo' </tbody>

</table> ';

$contador=0;
$numero_equipos=count($equipo);

foreach($equipo as $indice=>$valor)
{
    if (($contador>=0) and($contador<4))
    //equipos cahmpions
    {
        if ($contador==0){
        echo '<br> Equipos Champion <br>';
        echo '<br> ---------------- <br>';
        }
        echo $indice.'<br>';
    }
    if (($contador>=4) and($contador<7))
    //equipos Europa League 
    {
        if ($contador==4){
            echo '<br> Europa League <br>';
            echo '<br> ---------------- <br>';
            }
        echo $indice.'<br>';
    }
    if(($contador>=18)&& ($contador<20))
    {
        if ($contador==18){
            echo '<br> Equipos que Descienden <br>';
            echo '<br> ---------------- <br>';
            }
        echo $indice.'<br>';
    }
    $contador++;
    
}


include 'pie.php';

