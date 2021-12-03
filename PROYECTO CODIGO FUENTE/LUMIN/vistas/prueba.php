<?php
	header('Content-Type: application/json');

    $username = "root";
    $password = "";
    $hostname = "localhost";
    $dbname = "lumin";

    $database = new mysqli($hostname, $username, $password, $dbname) or die("No es posible conectarse a MySQL");
    function prueba() {
    	global $database;
    	$resultado = $database->query("SELECT * FROM USERS WHERE ID_USER = 1234");
    	while($fila = $resultado->fetch_array()){
            $UserDatos[] = $fila;
        }
        echo $UserDatos->ID_USER;
        return $UserDatos;
    }
?>