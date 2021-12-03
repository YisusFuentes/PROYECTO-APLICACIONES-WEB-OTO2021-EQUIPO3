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
    <title>Crear producto</title>
</head>

<body class="fondoGris">

    <div class="d-none">
        <!-- Átomos -->
        <div class="atomos">
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
        <!-- Moleculas -->
        <div class="moleculas">
            <!-- CARD VENTAS -->
            <div class="card luz" style="border-radius: 16px; width: 340px;">
                <div class="card-body">
                    <h1 class="card-title font-weight-bold morado">Poducto</h1>
                    <h5 class="card-subtitle mb-2 text-muted font-weight-normal morado">ID:XXXX</h5>
                    <div class="card-info d-flex justify-content-around align-items-center">
                        <div class="card-info-date m-2 align-middle">
                            <svg class="morado" style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,4H18V2H16V4H8V2H6V4H5C3.89,4 3,4.9 3,6V20A2,2 0 0,0 5,22H19A2,2 0 0,0 21,20V6A2,2 0 0,0 19,4M19,20H5V10H19V20M19,8H5V6H19V8Z" />
                            </svg>
                            <span style="vertical-align: middle;">dd/mm/yy</span>
                        </div>
                        <div class="card-info-user m-2 align-middle">
                            <svg class="morado" style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z" />
                            </svg>
                            <span style="vertical-align: middle;">Usuario</span>
                        </div>
                    </div>
                    <div class="card-info d-flex justify-content-around align-items-center">
                        <span><span class="font-weight-bold morado">Cantidad: </span>X</span>
                        <span><span class="font-weight-bold morado">Folio: </span>xxx</span>
                        <span><span class="font-weight-bold morado">$</span>XXX.xx</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar sticky-top navbar-dark fondoMorado container d-md-none">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="../img/Logo.svg" alt="Logo Lumin" width="50" height="24">
            </a>
            <a class="icon-link" href="adminReporteVentas.php">
                <svg style="width:2.5rem;height:2.5rem" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M18.36 9L18.96 12H5.04L5.64 9H18.36M20 4H4V6H20V4M20 7H4L3 12V14H4V20H14V14H18V20H20V14H21V12L20 7M6 18V14H12V18H6Z" />
                </svg>
            </a>
            <a class="icon-link" href="adminInventario.php">
                <svg style="width:2.5rem;height:2.5rem" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19,3H14.82C14.25,1.44 12.53,0.64 11,1.2C10.14,1.5 9.5,2.16 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M7,7H17V5H19V19H5V5H7V7M17,11H7V9H17V11M15,15H7V13H15V15Z" />
                </svg>
            </a>
            <a href="adminCrearProducto.php" class="icon-link">
                <svg style="width:2.5rem;height:2.5rem" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M13 15.6C13.3 15.8 13.7 15.8 14 15.6L19 12.7V13C19.7 13 20.4 13.1 21 13.4V11.6L22 11C22.5 10.7 22.6 10.1 22.4 9.6L20.9 7.1C20.8 6.9 20.7 6.7 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2S11.6 2.1 11.4 2.2L3.6 6.6C3.4 6.7 3.2 6.8 3.1 7L1.6 9.6C1.3 10.1 1.5 10.7 2 11C2.3 11.2 2.7 11.2 3 11V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3M11 19.3L5 15.9V9.2L11 12.6V19.3M20.1 9.7L13.8 13.3L13.2 12.3L19.5 8.7L20.1 9.7M12 10.8V4.2L18 7.5L12 10.8M20 15V18H23V20H20V23H18V20H15V18H18V15H20Z" />
                </svg>
            </a>
            <a href="#" class="icon-link active">
                <svg style="width:2.5rem;height:2.5rem" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z" />
                </svg>
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- LATERAL NAVBAR -->
            <div class="col-3 d-none d-md-block fondoMorado pantalla sidebar py-5 ps-0">
                <div class="text-center mb-5">
                    <a href="#">
                        <img class="img-fluid w-50" src="../img/Logo.svg" alt="Logo Lumin">
                    </a>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 ps-3">
                        <a class="link-light" href="adminReporteVentas.php">
                            <!-- <img class="img-fluid" src="img/icono-Tienda.svg" alt="Logo Lumin" width="40" height="24"> -->
                            <svg class="m-1" style="width:2.5rem;height:2.5rem" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18.36 9L18.96 12H5.04L5.64 9H18.36M20 4H4V6H20V4M20 7H4L3 12V14H4V20H14V14H18V20H20V14H21V12L20 7M6 18V14H12V18H6Z" />
                            </svg>
                            Ventas
                        </a>
                    </li>
                    <li class="nav-item mb-2 ps-3">
                        <a class="link-light" href="adminInventario.php">
                            <!-- <img class="img-fluid" src="img/icono-Ventas.svg" alt="Logo Lumin" width="40" height="24"> -->
                            <svg class="m-1" style="width:2.5rem;height:2.5rem" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,3H14.82C14.25,1.44 12.53,0.64 11,1.2C10.14,1.5 9.5,2.16 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M7,7H17V5H19V19H5V5H7V7M17,11H7V9H17V11M15,15H7V13H15V15Z" />
                            </svg>
                            Inventario
                        </a>
                    </li>
                    <li class="nav-item mb-2  ps-3">
                        <a class="link-light" href="adminCrearProducto.php">
                            <!-- <img class="img-fluid" src="img/icono-Ventas.svg" alt="Logo Lumin" width="40" height="24"> -->
                            <svg class="m-1" style="width:2.5rem;height:2.5rem" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13 15.6C13.3 15.8 13.7 15.8 14 15.6L19 12.7V13C19.7 13 20.4 13.1 21 13.4V11.6L22 11C22.5 10.7 22.6 10.1 22.4 9.6L20.9 7.1C20.8 6.9 20.7 6.7 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2S11.6 2.1 11.4 2.2L3.6 6.6C3.4 6.7 3.2 6.8 3.1 7L1.6 9.6C1.3 10.1 1.5 10.7 2 11C2.3 11.2 2.7 11.2 3 11V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3M11 19.3L5 15.9V9.2L11 12.6V19.3M20.1 9.7L13.8 13.3L13.2 12.3L19.5 8.7L20.1 9.7M12 10.8V4.2L18 7.5L12 10.8M20 15V18H23V20H20V23H18V20H15V18H18V15H20Z" />
                            </svg>
                            Productos
                        </a>
                    </li>
                    <li class="nav-item mb-2 border-start border-warning border-5 ps-3">
                        <a class="link-warning" href="#">
                            <!-- <img class="img-fluid" src="img/icono-Ventas.svg" alt="Logo Lumin" width="40" height="24"> -->
                             <svg class="m-1" style="width:2.5rem;height:2.5rem" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z" />
                            </svg>
                            Configuraciones
                        </a>
                    </li>
                </ul>
            </div>
            <!-- CONTETN -->
            <div class="col p-0">
                <main class="container mt-2">
                    <div class="d-flex justify mt-4 mx-2">
                <!-- para conectar con el API -->
                    <form action ="../API/users/nombre/editar" method= "POST" >
                        <div class="col-12 d-flex flex-column justify-content-start align-items-center">
                            <h1 class="col-12 fw-bold morado">Editar Usuario</h1>
                            <div class="row col-12 col-md-8 justify-content-center align-items-center">

                                <div class="col-12 input my-3">
                                    <label for="Input" class="form-label my-1">ID User</label>
                                    <input type="text" class="form-control luz border-0 rounded-3" id="Input" name="id" placeholder="<?php echo $id = $_GET['id']; ?>">
                                </div>
                                <div class="col-12 input my-3">
                                    <label for="Input" class="form-label my-1">Nombre completo</label>
                                    <input type="text" class="form-control luz border-0 rounded-3" id="Input" name="nombre" placeholder="Introduce Usuario">
                                </div>
                                <div class="col-12 row px-0 align-items-center justify-content-start justify-content-md-between ">
                                    <div class="col-12 col-md-8 input my-3">
                                        <label for="Input" class="form-label my-1">Usuario</label>
                                        <input type="text" class="form-control luz border-0 rounded-3" id="Input" name="usuario" placeholder="Introduce Usuario">
                                    </div>
                                    <div class="col-12 col-md-4 form-check d-flex justify-content-center align-items-center">
                                        <input class="form-check-input btn-morado" style="width: 1.5em; height: 1.5em;" type="checkbox" value="1" name="admin" id="flexCheckChecked" checked>
                                        <label class="form-check-label mx-2 fs-4" for="flexCheckChecked">
                                            Administrador
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 input my-3">
                                    <label for="Input" class="form-label my-1">Contraseña</label>
                                    <input type="text" class="form-control luz border-0 rounded-3" id="Input" placeholder="Introduce password">
                                </div>
                                <div class="col-12 col-md-6 input my-3">
                                    <label for="Input" class="form-label my-1">Confirmar contraseña</label>
                                    <input type="text" class="form-control luz border-0 rounded-3" id="Input" name="contraseña" placeholder="Introduce password">
                                </div>
                                <div class="mt-4 col-8 d-flex flex-column flex-md-row justify-content-evenly align-items-center">
                                <input type="submit" value="Editar" class="btn btn-lg btn-warning fw-bold rounded-pill luz  my-3 px-5"> 
                                    <!-- <button type="button" class="my-2 btn btn-outline-primary">Cancelar</button> -->
                                </div>
                            </div>
                        </div>
                    </form>

                    </div>
                </main>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>

    <script>
    </script>
</body>

</html>