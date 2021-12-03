<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Compra de productos</title>
</head>

<body class="fondoGris">

    <div class="d-none">
        <!-- Átomos -->
        <!-- Logo -->
        <img class="img-fluid" src="../img/Logo.svg" alt="Logo Lumin">
        <!-- Inputs -->
        <div class="input my-3">
            <label for="Input" class="form-label my-1">Usuario</label>
            <input type="text" class="form-control luz border-0 rounded-3" id="Input" placeholder="Introduce Usuario">
        </div>
        <!-- Botones -->
        <button type="button" class="btn btn-lg btn-warning fw-bold rounded-pill luz">Entrar</button>
        <a class="link-warning">Olvidé la contraseña.</a>
    </div>

    <nav class="navbar sticky-top navbar-dark fondoMorado container d-md-none">
        <div class="container">
            <a class="navbar-brand" href="usuarioCompraProductos.php">
                <img class="img-fluid" src="../img/Logo.svg" alt="Logo Lumin" width="50" height="24">
            </a>
            <a class="" href="usuarioCompraProductos.php">
                <img class="img-fluid" src="../img/icono-Tienda.svg" alt="Logo Lumin" width="50" height="24">
            </a>
            <a class="" href="usuarioReporteventas.php">
                <img class="img-fluid" src="../img/icono-Ventas.svg" alt="Logo Lumin" width="50" height="24">
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 d-none d-md-block fondoMorado pantalla sidebar py-5 ps-0 sticky-top">
                <div class="text-center mb-5">
                    <a href="usuarioCompraProductos.php">
                        <img class="img-fluid w-50" src="../img/Logo.svg" alt="Logo Lumin">
                    </a>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 border-start border-warning border-5 ps-3">
                        <a class="link-warning" href="/usuarioCompraProductos.php">
                            <img class="img-fluid" src="../img/icono-Tienda.svg" alt="Logo Lumin" width="40" height="24">
                            Compra de productos
                        </a>
                    </li>
                    <li class="nav-item mb-5 ps-3">
                        <a class="link-light" href="usuarioReporteventas.php">
                            <img class="img-fluid" src="../img/icono-Ventas.svg" alt="Logo Lumin" width="40" height="24">
                            Reporte de ventas
                        </a>
                    </li>
                    <li class="nav-item mb-2 ps-3">
                        <a class="link-light" href="usuarioBuscar.php">
                            <img class="img-fluid" src="../img/icono-buscar.svg" alt="Logo Lumin" width="40" height="24">
                            Buscar
                        </a>
                    </li>
                    <li class="nav-item mb-2 ps-3">
                        <a class="link-light" href="usuarioPago.php">
                            <img class="img-fluid" src="../img/icono-Pagar.svg" alt="Logo Lumin" width="40" height="24">
                            Pagar
                        </a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="link-light" href="usuarioEscanear.php">
                            <img class="img-fluid mx-auto" src="../img/icono-Escanear.svg" alt="Logo Lumin" width="40" height="24">
                            Escanear
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <main class="container">
                    <h1 class="morado my-3 my-md-5 fw-bold">Compra de productos</h1>
                    <br class="d-none d-md-block">
                    <?php
                    if(isset($_SESSION['carrito'])) {
                        $total = 0;
                        foreach($_SESSION['carrito'] as $indice => $arreglo) { /*?>*/
                            $inventoryURL = "http://localhost/LUMIN/API/inventory/id/".$indice;
                            $inventoryJSON = file_get_contents($inventoryURL);
                            $inventory = json_decode($inventoryJSON);
                            $cantidad = 0;
                            foreach ($arreglo as $key => $value) {
                                //echo $key . ": " . $value;
                                if($key == 'CANT_ITEMS') {
                                    $cantidad = $value;
                                }
                            }
                            foreach ($inventory as $item):?>
                                <ul class="list-group luz">
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0">
                                        <?php 
                                        echo $item->NAME_PRODUCT . "(". $cantidad . ")"; 
                                        
                                        $importe = $item->PRICE * $cantidad;
                                        $total = $total + $importe;
                                        ?>
                                        <span class="badge fondoMorado rounded-pill"><?php echo $importe ?></span>
                                    </li>
                            <?php endforeach; 
                        } ?>
                            <li
                                class="list-group-item list-group-item-action list-group-item-danger d-flex justify-content-between align-items-center border-0">
                                <strong>TOTAL A PAGAR: </strong>        
                                <span class="badge bg-danger rounded-pill"><?php echo $total ?></span>
                            </li>
                        </ul>
                    <?php }
                    else { ?>
                        <script>
                            alert('¡¡¡No hay productos en la venta actual!!!');
                            window.location.href='usuarioBuscar.php';
                        </script>

                    <?php 
                    } 
                    $_SESSION['costo_total'] = $total;?>        
                </main>
            </div>
        </div>

    </div>



    <nav class="navbar fixed-bottom navbar-dark fondoMorado container d-md-none bottomNav">
        <div class="container">
            <a class="d-flex flex-column link-light" href="usuarioBuscar.php">
                <img class="img-fluid" src="../img/icono-buscar.svg" alt="Logo Lumin" width="50" height="24">
                <div class="text-center">
                    Buscar
                </div>
            </a>
            <a class="d-flex flex-column link-light" href="usuarioPago.php">
                <img class="img-fluid" src="../img/icono-Pagar.svg" alt="Logo Lumin" width="50" height="24">
                <div class="text-center">
                    Pagar
                </div>
            </a>
            <a class="d-flex flex-column link-light" href="usuarioEscanear.php">
                <img class="img-fluid mx-auto" src="../img/icono-Escanear.svg" alt="Logo Lumin" width="50" height="24">
                <div class="text-center">
                    Escanear
                </div>
            </a>
        </div>
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>