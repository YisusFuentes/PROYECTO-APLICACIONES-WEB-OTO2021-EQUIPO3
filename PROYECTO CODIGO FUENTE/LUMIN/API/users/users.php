<?php

    header('Content-Type: application/json');

    $username = "root";
    $password = "";
    $hostname = "localhost";
    $dbname = "lumin";


    $database = new mysqli($hostname, $username, $password, $dbname) or die("No es posible conectarse a MySQL");

    function mostrar_usuarios($detalle)
    {
        
        global $database;
        if($detalle == 'lista'){
            $resultado = $database->query("SELECT USERNAME, NAME_, ISADMIN, ID_USER FROM users");
        }
        else {
            $resultado = $database->query("SELECT USERNAME, NAME_, ISADMIN, ID_USER FROM users WHERE USERNAME = " . $detalle);
        }
            
      
           // $resultado = $database->query("SELECT id FROM usuarios WHERE id=" .$detalle);
        
        while($fila = $resultado->fetch_array()){
            $UserDatos[] = $fila;
        }

        mysqli_free_result($resultado);
        return $UserDatos;
    } 

    

    function borrar_usuario($id) {
        global $database;

       // $id = $_POST['name'];
        $ID_User = $id;

        $database->query("DELETE FROM users WHERE ID_USER = $ID_User");
        
        header("Location:".$_SERVER['HTTP_REFERER']);
        exit;
    }

    function guardar_nuevo_usuario()
    {
        global $database;

        $ID_USER = $_POST['id'];
        $USERNAME = $_POST['nombre'];
        $NAME_ = $_POST['usuario'];
        $ISADMIN = $_POST['admin'];
        $PASSWRD = $_POST['contraseña'];

        if($database->query("INSERT INTO users (ID_USER, USERNAME, NAME_, PASSWRD, ISADMIN) VALUES ('$ID_USER','$USERNAME', '$NAME_', '$PASSWRD', '$ISADMIN');")){
            echo "Nuevo dato creado";
        }else{
            echo "Valio queso :(: " . mysqli_error($database);
        }

        header("Location:".$_SERVER['HTTP_REFERER']);
        exit;
    }

    function editar_usuario()
    {
        global $database;
        
        $ID_User = $_POST['id'];
        $USERNAME = $_POST['nombre'];
        $NAME_ = $_POST['usuario'];
        $ISADMIN = $_POST['admin'];
        $PASSWRD = $_POST['contraseña'];

        if($database->query("UPDATE users set 
        USERNAME = '$USERNAME', NAME_ = '$NAME_', PASSWRD ='$PASSWRD', 
        ISADMIN = '$ISADMIN' WHERE ID_USER = $ID_User ")){
            echo "dato actualizado";
        }else{
            echo "Valio queso :(: " . mysqli_error($database);
        }

        header("Location:".$_SERVER['HTTP_REFERER']);
        exit;
    }


//esta wea dirije la funciones, de acuerdo al url que se le asigne al form o al boton
    if($_GET['peticion'] == 'nombre') {
    	if($_GET['detalle'] == 'nuevo') {
    		guardar_nuevo_usuario();
    	}
        else if($_GET['detalle'] == 'borrar') {
            $id = $_POST['borrar'];
            borrar_usuario($id);
        }
    	else if($_GET['detalle'] == 'lista'){
    		$resultados = mostrar_usuarios($_GET['detalle']);
    	}
        else if($_GET['detalle'] == 'editar'){
            $resultados = editar_usuario();
        }
        else {
            $resultados = mostrar_usuarios($_GET['detalle']);
        }
    }
    else {
    	header('HTTP/1.1 405 Method Not Allowed');

    	exit;
    }

    echo json_encode($resultados);
  	//echo json_encode($resultados1);
      
?>
