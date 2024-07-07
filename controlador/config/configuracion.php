<?php
/* Archivo de conexion a la base de datos */
    include_once "conexion.php";

    /**
     * @var string SISTEMA: Siglas del sistema que presta el servicio
     */
    define("SISTEMA",'AL_SUCRE');

    /**
     * @var string DESCRIP_SISTEMA: Descripcion del sistema o nombre del sistema 
     */

    define("DESCRIP_SISTEMA",'Alimentos de Sucre');


    /**
     * @var array ARRAY_CONEXION_BDDS: Bases de datos de las cuales se extraera la informacion 
     */
    define("ARRAY_CONEXION_BDDS",$BDDS);


?>
