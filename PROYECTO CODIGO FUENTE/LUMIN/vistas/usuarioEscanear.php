<!DOCTYPE html>
<html lang="en">

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
    <title>Escanear</title>
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
                    <a href="usuarioCompraProductos.php">
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
                    <li class="nav-item mb-2 ps-3">
                        <a class="link-light" href="usuarioPago.php">
                            <img class="img-fluid" src="../img/icono-Pagar.svg" alt="Logo Lumin" width="40" height="24">
                            Pagar
                        </a>
                    </li>
                    <li class="nav-item border-start border-warning border-5 ps-3">
                        <a class="link-warning" href="#">
                            <img class="img-fluid mx-auto" src="../img/icono-EscanearLogo.svg" alt="Logo Lumin" width="40"
                                height="24">
                            Escanear
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <main class="container">
                    <h1 class="morado my-3 mb-md-4 mt-md-5 fw-bold">Escanear</h1>
                    <br class="d-none d-md-block">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="card card-body fondoMorado luz rounded rounded-3">
                                <img class="m-auto" width="250" src="../img/icono-EscanearLogo.svg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card luz rounded rounded-3 fondoMorado">
                                <div class="row g-0">
                                    <div class="col-3 col-md-12 d-flex justify-content-center p-2">
                                        <img class="img-fluid" width="150" src="../img/icono-producto.svg" alt="">
                                    </div>
                                    <div class="col-9 col-md-12 bg-white rounded">
                                        <div class="card-body">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div>ID:23343</div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="">
                                                        <img class="img-fluid" src="../img/Visible.svg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="fw-bold morado">Nombre del producto</div>
                                            <div class="row g-0">
                                                <div class="col">
                                                    Existencia: 2
                                                </div>
                                                <div class="col-auto me-1">
                                                    <div class="badge rounded-pill bg-warning morado">Categoría</div>
                                                </div>
                                                <div class="col-auto">
                                                    $123
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row my-3">
                        <div class="col-md-6 my-3 my-md-0">
                            <a href="usuarioCompraProductos.php" class="btn btn-lg fondoMorado text-white fw-bold rounded-pill luz w-100">Agregar</a>
                        </div>
                        <div class="col-md-6">
                            <a href="usuarioCompraProductos.php"
                                class="btn btn-lg btn-danger w-100 fw-bold rounded-pill luz">Cancelar</a>
                        </div>
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
                <img class="img-fluid mx-auto" src="../img/icono-EscanearLogo.svg" alt="Logo Lumin" width="50" height="24">
                <div class="text-center text-warning">
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