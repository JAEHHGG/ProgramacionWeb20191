<?php

$host = 'localhost';
$user = 'server';
$password = 'server';


$conexion = new mysqli($host, $user, $password, $password);

if ($conexion -> connect_errno){
    echo 'no hay conexion con la bd';
}else{
    echo 'Nos conectamos';
}

?>
