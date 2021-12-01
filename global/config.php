<?php

$servidor="localhost";
$usuario="root";
$clave="";
$bd="wowgames";

$enlace = mysqli_connect($servidor,$usuario,$clave,$bd);
if (!$enlace) {
    echo "Error en la conexion";
}

?>