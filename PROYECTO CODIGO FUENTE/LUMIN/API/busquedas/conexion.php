<?php
$username = "root";
    $password = "";
    $hostname = "localhost";
    $dbname = "lumin";


    $database = new mysqli($hostname, $username, $password, $dbname) or die("No es posible conectarse a MySQL");

?>