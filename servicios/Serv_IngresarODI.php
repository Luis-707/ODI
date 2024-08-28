<?php

print_r($dataCliente);

$sql = sprintf("insert into odi(nombre_ODI, Peso, Rango, Status)  values (%d,'%s','%d','%d','%s','%d')",
$dataCliente['_post']['nombre_ODI'],
$dataCliente['_post']['Peso'],
$dataCliente['_post']['Rango'],
$dataCliente['_post']['Status']

);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>