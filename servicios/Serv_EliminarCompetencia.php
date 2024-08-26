<?php

print_r($dataCliente);

$sql = sprintf("delete from competencias WHERE Comp_ID = '%d'");
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;


?>