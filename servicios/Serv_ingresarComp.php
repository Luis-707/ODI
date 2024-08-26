<?php

print_r($dataCliente);

$sql = sprintf("insert into Competencias (Comp_ID, Nombre_comp, Peso, 
Rango, Status, PesoxRango)  values (%d,'%s','%d','%d','%s','%d')",
$dataCliente['_post']['Comp_ID'],
$dataCliente['_post']['Nombre_comp'],
$dataCliente['_post']['Peso'],
$dataCliente['_post']['Rango'],
$dataCliente['_post']['Status'],
$dataCliente['_post']['PesoxRango']

);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>