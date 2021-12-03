<?php
    session_start();

    header('Content-Type: application/json');

    $username = "root";
    $password = "";
    $hostname = "localhost";
    $dbname = "lumin";


    $database = new mysqli($hostname, $username, $password, $dbname) or die("No es posible conectarse a MySQL");

    function num_sales() {
        global $database;

        $resultado = $database->query("SELECT COUNT(*) FROM sales");
        while($fila = $resultado->fetch_array()){
            $UserDatos[] = $fila;
        }

        mysqli_free_result($resultado);
        return $UserDatos;
    }

    function get_Sales($detalle) {
        global $database;
        if($detalle == 'lista'){
            $resultado = $database->query("SELECT * FROM sales");
        }
        else {
            $resultado = $database->query("SELECT * FROM sales WHERE USERNAME = " .$detalle);    
        }
        while($fila = $resultado->fetch_array()){
            $UserDatos[] = $fila;
        }

        mysqli_free_result($resultado);
        return $UserDatos;
    }

    function add_sale(){
        global $database;

        $numventa = $_POST['numventa'];
        $username = $_POST['user'];
        //echo $username;
        $total = $_POST['totalventa'];
        $paid_method = 0;
        if(isset($_REQUEST['cash'])) //si la venta fue en efectivo, la variable vale 1. Si vale 0, entonces el pago fue con tarjeta.
            $paid_method = 1;

        if(isset($_SESSION['carrito']) && isset($username)) {
        echo "sí hay variables de sesión";
            
            if($database->query("INSERT INTO sales (ID_SALE, USERNAME, PAID_METHOD, TOTAL) VALUES ($numventa, '$username', $paid_method, $total)")){
                echo "dato insertado con exito";
                //ahora, se insertan los datos de la variable de sesion que almacena los productos a comprar.
                
                foreach($_SESSION['carrito'] as $indice => $arreglo) {
                $cantItems = 0;
                    if($database->query("INSERT INTO sales_inventory (ID_SALE, ID_PRODUCT) VALUES ('$numventa', '$indice')")){
                        echo "producto agregado";
                        
                        foreach($arreglo as $key => $value) {
                            
                            if($key == 'CANT_ITEMS') {
                                if($database->query("UPDATE sales_inventory SET CANT_ITEMS = '$value' WHERE ID_SALE = '$numventa'")){
                                    $cantItems = $value;
                                }
                            }
                            else if($key == 'precio') {
                                $amount = $cantItems * $value;
                                if($database->query("UPDATE sales_inventory SET AMOUNT = '$amount' WHERE ID_SALE = '$numventa'")){
                                    echo "datos de venta agregados";
                                }   
                            }
                        
                        }
                    
                    }
                    else {
                        echo "ERROR!";
                    }
            
                }
                //echo "<script>alert("SE HA REALIZADO EXITOSAMENTE LA COMPRA.")</script>"
                unset($_SESSION['carrito']);
                unset($_SESSION['costo_total']);
            }

            else {
                echo "valió queso :(";
            }
        }
        header("Location:".$_SERVER['HTTP_REFERER']);
        exit;
    }
    /*function guardar_nuevo_usuario()
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
    }*/



//esta wea dirije la funciones, de acuerdo al url que se le asigne al form o al boton
    if($_GET['peticion'] == 'paid') {
    	if($_GET['detalle'] == 'neworder') {
            add_sale();
        }
    }
    else if ($_GET['peticion'] == 'consult'){
        if($_GET['detalle'] == 'count') {
            $resultados = num_sales();
        }
    }
    else if($_GET['peticion'] == 'get') {
        $resultados = get_Sales($_GET['detalle']);
    }
    else {
    	header('HTTP/1.1 405 Method Not Allowed');

    	exit;
    }

    echo json_encode($resultados);
  	//echo json_encode($resultados1);
      
?>
