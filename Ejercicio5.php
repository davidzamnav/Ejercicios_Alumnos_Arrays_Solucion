<?php

include 'head.php';
//he pulsado el boton traducir
if(isset($_REQUEST['traducir']))
{
   
    $diccionario = ["coche" => "car", "pescado" => "fish", "cama" => "bed", "mesa" => "table", "silla" => "chair",
    "cerveza" => "beer", "casa" => "house", "gato" => "cat", "perro" => "dog", "bailar" => "dance"];
    $palabra=$_REQUEST['palabra'];
    //utilizamos una bandera
    $encontrar=false;
    foreach($diccionario as $indice=>$valor)
    {
        if($indice==$palabra)
        {
            echo '<script language="javascript">';
            echo 'alert(" '.$valor.'")';  //not showing an alert box.
            echo '</script>';
            $encontrar=true;
        }
        
    }
    //cuando me salgo del bucle pregunto
    //por el estado de la bandera
    if($encontrar==false)
    {
        
        echo '<script language="javascript">';
        echo 'alert("No se encuentra la palabra en el dicionario")';  //not showing an alert box.
        echo '</script>';
    
     
    }


}

echo'<form action="Ejercicio5.php" method="post">
 <p>Introduce la palabra a traducir: 
 <input type="text" value="" name="palabra" /></p>
 
 <p><input type="submit" value="Traducir" name="traducir"/></p>
</form>';

 
 include 'pie.php';

