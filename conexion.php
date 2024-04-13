<?php

//credenciales de acceso a la base datos

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'web_service';

/*
$DATABASE_HOST = 'd6vscs19jtah8iwb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$DATABASE_USER = 'z46zaznc0rvgtozj';
$DATABASE_PASS = 'cdx8l0o1wfbujjlw';
$DATABASE_NAME = 'ofbg970x6c9kf5mu';
*/

// conexion a la base de datos

$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) 
{

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error($conexion ));
}


?>