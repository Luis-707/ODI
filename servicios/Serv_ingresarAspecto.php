<?php

print_r($dataCliente);

$sql = sprintf("insert into aspectos(codigo, nombre_aspecto, status, puntaje)  values (%d,%d,'%s','%s','%s','%d')",
$dataCliente['_post']['codigo'],
$dataCliente['_post']['nombre_aspecto'],
$dataCliente['_post']['status'],
$dataCliente['_post']['puntaje']

);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>