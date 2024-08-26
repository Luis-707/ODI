<?php

print_r($dataCliente);

$sql = sprintf("insert into factores_de_evaluacion (Codigo, Nombre_Factor
Status)  values (%d,'%s','%d','%d','%d','%d', '%d')",

$dataCliente['_post']['Codigo'],
$dataCliente['_post']['Nombre_Factor'],
$dataCliente['_post']['Status'],
$dataCliente['_post']['Porcentaje']
);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>