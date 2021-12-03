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
    <title>Pago</title>
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
                <img class="img-fluid" src="../img/icono-Tiendan.svg" alt="Logo Lumin" width="50" height="24">
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
                    <a href="/usuarioCompraProductos.php">
                        <img class="img-fluid w-50" src="../img/Logo.svg" alt="Logo Lumin">
                    </a>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 ps-3">
                        <a class="link-light" href="usuarioCompraProductos.php">
                            <img class="img-fluid" src="../img/icono-Tiendan.svg" alt="Logo Lumin" width="40" height="24">
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
                    <li class="nav-item mb-2 border-start border-warning border-5 ps-3">
                        <a class="link-warning" href="#">
                            <img class="img-fluid" src="../img/icono-Pagarn.svg" alt="Logo Lumin" width="40" height="24">
                            Pagar
                        </a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="link-light" href="usuarioEscanear.php">
                            <img class="img-fluid mx-auto" src="../img/icono-Escanear.svg" alt="Logo Lumin" width="40"
                                height="24">
                            Escanear
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <main class="container">
                    <form method="post" action="http://localhost/lumin/api/sales/paid/neworder">
                        <h1 class="morado my-3 mb-md-4 mt-md-5 fw-bold">Pago</h1>
                        <?php
                        $numsalesURL = "http://localhost/lumin/api/sales/consult/count";
                        $numsalesJSON = file_get_contents($numsalesURL);
                        $numsales = json_decode($numsalesJSON);
                        $numVenta = 0;
                        foreach ($numsales as $key => $value):
                            ?>
                        
                            <h5 class="morado my-3 mb-md-4 mt-md-5 fw-bold">Orden: 
                            <?php
                            foreach ($value as $key => $value) {
                                // code...
                                if($key == 'COUNT(*)')
                                    $numVenta = $value + 1;
                                    echo $numVenta;
                            }
                            
                        endforeach;
                        ?></h5>
                        <input type="hidden" name="numventa" value = "<?php echo $numVenta;  ?>">
                        <br class="d-none d-md-block">
                        <ul class="list-group luz">
                            <li
                                class="list-group-item list-group-item-action list-group-item-danger d-flex justify-content-between align-items-center border-0">
                                Total de la compra
                                <span class="badge bg-danger rounded-pill">
                                    <?php 
                                    if(isset($_SESSION['costo_total'])) {
                                        echo $_SESSION['costo_total'];
                                    }
                                    else {
                                        echo 0;
                                    }
                                    ?>
                                </span>
                            </li>
                        </ul>
                        <br>
                        <h4 class="morado my-3">Método de pago</h4>
                        <div class="btn-group w-100 luz" role="group" aria-label="Metodo de pago">
                            <input type="hidden" name="user" value="<?php echo $_SESSION['User']; ?>">
                            <input type="hidden" name="totalventa" value="<?php echo $_SESSION['costo_total']; ?>">
                            <input type="radio" class="btn-check" name="card" id="btnradio1Tarjeta" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio1Tarjeta">Tarjeta</label>
                            <input type="radio" class="btn-check" name="cash" id="btnradio2Efectivo" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio2Efectivo">Efectivo</label>
                        </div>
                        <br>
                        <br>
                        <!--
                        <div class="my-3">
                        <label for="Input" class="form-label my-1 morado">Efectivo</label>
                        <div class="input-group">
                            <span class="input-group-text bg-warning fw-bold morado">$</span>
                            <input type="number" class="form-control" aria-label="Cantidad"
                                placeholder="Ingresa Cantidad" autofocus>
                        </div>
                        </div>
                        <br>
                        <ul class="list-group luz">
                        <li
                            class="list-group-item list-group-item-action list-group-item-success d-flex justify-content-between align-items-center border-0">
                            Cambio
                            <span class="badge bg-success rounded-pill">$33</span>
                        </li>
                        </ul>
                        <br>
                        -->
                        <div class="row my-3">
                            <div class="col-md-6 my-3 my-md-0">
                                <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-lg fondoMorado text-white fw-bold rounded-pill luz w-100" name = "pagar">Pagar</button>
                            </div>
                            <div class="col-md-6">
                                <a href="http://localhost/lumin/vistas/usuarioBuscar.php"
                                class="btn btn-lg btn-danger w-100 fw-bold rounded-pill luz">Cancelar</a>
                            </div>
                        </div>
                    </form>
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
            <a class="d-flex flex-column link-light" href="#">
                <img class="img-fluid" src="../img/icono-Pagarn.svg" alt="Logo Lumin" width="50" height="24">
                <div class="text-center text-warning">
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1>Compra finalizada</h1>
                    <img src="../img/modalCompra.svg" alt="">
                    <h1>Gracias</h1>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>