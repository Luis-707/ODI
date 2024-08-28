<?php

print_r($dataCliente);

$sql = sprintf("insert into factores(codigo, nombre_factor, porcentaje, status)  values (%d,'%s','%s','%d','%s')",
$dataCliente['_post']['codigo'],
$dataCliente['_post']['nombre_factor'],
$dataCliente['_post']['porcentaje'],
$dataCliente['_post']['status']

);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>