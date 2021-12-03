<?php

$usuario=$_POST['InputUser'];
$contraseña=$_POST['InputPassword'];
$Tipo = 1;

session_start();
//variable de sesión 
$_SESSION['User']=$usuario;

$conexion= mysqli_connect("localhost","root","","lumin");

$consulta= "SELECT*FROM users where USERNAME='$usuario' and PASSWRD = '$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    $consulta2= "SELECT ISADMIN FROM users WHERE USERNAME ='$usuario' and PASSWRD = '$contraseña' ";
    $resultado2 = mysqli_query($conexion, $consulta2);
    $row = mysqli_fetch_array($resultado2); 
    
    if($row["ISADMIN"] == 1){
        include("adminReporteVentas.php");
    
    }else{
        include("usuarioCompraProductos.php");
    }
}else{
    ?>
    <?php
    include("../login.php");
    ?> 
    <h1 >ERROR EN LA AUTENTICACIÓN</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

//for test: admin, root (en tabla: ID_USER:1; USERNAME: admin; NAME: admin; PASSWRD: root; ISADMIN: 1)
//for test: user, root  (en tabla: ID_USER:2; USERNAME: user; NAME: user; PASSWRD: root; ISADMIN: 0)
