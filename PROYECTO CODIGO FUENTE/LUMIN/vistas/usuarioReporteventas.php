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
    <title>Buscar</title>
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
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="../img/Logo.svg" alt="Logo Lumin" width="50" height="24">
            </a>
            <a class="" href="/usuarioCompraProductos.php">
                <img class="img-fluid" src="../img/icono-Tiendan.svg" alt="Logo Lumin" width="50" height="24">
            </a>
            <a class="" href="#">
                <img class="img-fluid" src="../img/icono-Ventasn.svg" alt="Logo Lumin" width="50" height="24">
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 d-none d-md-block fondoMorado pantalla sidebar py-5 ps-0 sticky-top">
                <div class="text-center mb-5">
                    <a href="#">
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
                    <li class="nav-item mb-5 border-start border-warning border-5 ps-3">
                        <a class="link-warning" href="#">
                            <img class="img-fluid" src="../img/icono-Ventasn.svg" alt="Logo Lumin" width="40" height="24">
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
                            <img class="img-fluid mx-auto" src="../img/icono-Escanear.svg" alt="Logo Lumin" width="40"
                                height="24">
                            Escanear
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <main class="container">
                    <h1 class="morado my-3 mb-md-4 mt-md-5 fw-bold">Reporte de ventas</h1>
                    <br class="d-none d-md-block">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="form-floating">
                                <input type="text" class="form-control luz border-0 rounded-3" id="floatingInput"
                                    placeholder="Introduce tu busqueda">
                                <label for="floatingInput">Búsqueda</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select luz border-0 rounded-3 h-100" aria-label="Default select example">
                                <option selected class="text-black-50">Filtros</option>
                                <optgroup label="PRECIO">
                                    <option value="MasAlto">Más alto</option>
                                    <option value="MasBajo">Más bajo</option>
                                </optgroup>
                                <optgroup label="FECHA">
                                    <option value="MasActual">Más actual</option>
                                    <option value="MasViejo">Más viejo</option>
                                </optgroup>
                                <optgroup label="CATEGORIA">
                                    <option value="ListaCatego">Lista de categorías</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <?php
                        $salesURL = "http://localhost/lumin/api/sales/get/lista";
                        $salesJSON = file_get_contents($salesURL);
                        $sales = json_decode($salesJSON);
                        foreach ($sales as $venta):
                        ?>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="card luz rounded rounded-3 border-0">
                                <div class="card-body">
                                    <div class="fw-bold morado fs-5"><?php echo $venta->ID_SALE; ?></div>
                                    <div class="row g-0">
                                        <div class="col">
                                            <?php echo $venta->USERNAME; ?>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col">
                                            <?php 
                                                if($venta->PAID_METHOD == 0) {
                                                    echo "PAGADO CON TARJETA.";
                                                }
                                                else {
                                                    echo "PAGADO CON EFECTIVO.";   
                                                }
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <?php echo $venta->TOTAL; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </main>
            </div>
        </div>

    </div>



    <nav class="navbar navbar-dark fondoMorado container d-md-none bottomNav fixed-bottom">
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
            <a class="d-flex flex-column link-light" href="#">
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