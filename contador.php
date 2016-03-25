<?php

$archivo = "data/contador.txt";
if(file_exists($archivo) == false){
    //si el fichero no existe (primera vez)
    $visitasAntes=0;
}
else{
    //si el fichero existe (de forma normal)
    $visitasAntes=file_get_contents($archivo);
}
$visitasTotales=$visitasAntes+1;
file_put_contents($archivo, $visitasTotales);
//echo "Esta página ha sido visitada $visitasTotales veces\n";
?>
