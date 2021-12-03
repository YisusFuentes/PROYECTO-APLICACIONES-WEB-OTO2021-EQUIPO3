<?php
    header('Content-Type: application/json');

    $username = "root";
    $password = "";
    $hostname = "localhost";
    $dbname = "lumin";


    $database = new mysqli($hostname, $username, $password, $dbname) or die("No es posible conectarse a MySQL");

    function get_Inventary($detalle) {
        global $database;
        if($detalle == 'lista'){
            $resultado = $database->query("SELECT * FROM inventory");
        }
        else {
            $resultado = $database->query("SELECT * FROM inventory WHERE ID_PRODUCT = " .$detalle);    
        }
        while($fila = $resultado->fetch_array()){
            $UserDatos[] = $fila;
        }

        mysqli_free_result($resultado);
        return $UserDatos;
    }

    function save_product()
    {
        global $database;
        $idProduct = $_POST['id_product']; 
        $nameProduct = $_POST['name_product'];
        $isAvailable = 0; 
        $price = $_POST['price'];
        $stock = $_POST['cant_stock'];
        $description = $_POST['description'];
        $category = "categoryA";
        if(isset($_REQUEST['isAvailable']))
            $isAvailable = 1;

        if($database->query("INSERT INTO inventory (ID_PRODUCT, NAME_PRODUCT, PRICE, CANT_STOCK, IMG_SOURCE, CATEGORY, DESCRPTION, ISAVAILABLE) VALUES ('$idProduct', '$nameProduct', '$price', '$stock', '../img/icono-producto.svg', '$category', '$description', '$isAvailable');")){
            echo "Nuevo dato creado";
        }else{
            echo "Valio queso :(: " . mysqli_error($database);
        }

        header("Location:".$_SERVER['HTTP_REFERER']);
        exit;
    }

    function edit_product()
    {
        global $database;
        $idProduct = $_POST['id_product']; 
        $nameProduct = $_POST['name_product'];
        $isAvailable = 0; 
        $price = $_POST['price'];
        $stock = $_POST['cant_stock'];
        $description = $_POST['description'];
        $category = "categoryA";
        if(isset($_REQUEST['isAvailable']))
            $isAvailable = 1;
        $img = '../img/icono-producto.svg';
        
        if($database->query("UPDATE inventory set NAME_PRODUCT = '$nameProduct', PRICE ='$price', CANT_STOCK = '$stock', IMG_SOURCE = '$img', CATEGORY = '$category', DESCRPTION = '$description', ISAVAILABLE = '$isAvailable' WHERE ID_PRODUCT = $idProduct")){
            echo "dato actualizado";
        }else{
            echo "Valio queso :(: " . mysqli_error($database);
        }

        header("Location:".$_SERVER['HTTP_REFERER']);
        exit;
    }

    function delete_product($id) {
        global $database;
        $database->query("DELETE FROM inventory WHERE ID_PRODUCT = $id");
        header("Location:".$_SERVER['HTTP_REFERER']);
        exit;
    }

    
    
    
    if($_GET['peticion'] == 'id') {
        //en el módulo se define si se debe imprimir todo el array o solo una parte de la consulta.
        $resultado = get_Inventary($_GET['detalle']);
    }
    else if($_GET['peticion'] == 'nombre') {

    	if($_GET['detalle'] == 'nuevo') { /*/nombre/NUEVO*/
    		$resultado = save_product();
    	}
        else if($_GET['detalle'] == 'editar') { /*/nombre/NUEVO*/
            $resultado = edit_product();
        }
        else if($_GET['detalle'] == 'eliminar') { /*/nombre/NUEVO*/
            $id = $_POST['eliminar'];
            delete_product($id);
        }
    }
    else {
    	header('HTTP/1.1 405 Method Not Allowed');
    	exit;
    }

    echo json_encode($resultado);
?>
