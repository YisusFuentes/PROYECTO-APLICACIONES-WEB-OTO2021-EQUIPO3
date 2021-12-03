<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Login</title>
</head>
<body style="background-color: #4F4293; color: white;">

    <main class="pantalla container d-flex align-items-center justify-content-center">
        <div class="px-3 px-md-5">
            <div class="text-center">
                <img class="img-fluid" style="width: 8rem;" src="img/Logo.svg" alt="Logo Lumin">
            </div>
            <div class="text-center">
                <h1 class="mt-5 h1">Iniciar Sesión</h1>
            </div>

            <!-- formulario, dirije a un validar para despues dejarlo redirijir las paginas -->
            <form action="vistas/validarUsuario.php" method= "post">
                <div class="input my-3">
                    <label for="InputUsuario" class="form-label my-1">Usuario</label>
                    <input type="text" class="form-control luz border-0 rounded-3" id="InputUsuario" name="InputUser" placeholder="Introduzca su Usuario">
                </div>
                <div class="input my-3">
                    <label for="InputContraseña" class="form-label my-1">Contraseña</label>
                    <input type="text" class="form-control luz border-0 rounded-3" id="InputContraseña" name ="InputPassword" placeholder="Introduzca su Contraseña">
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 text-center">
                        <button type="submit" class="btn btn-lg btn-warning fw-bold rounded-pill luz  my-3 px-5">Entrar</button>
                    </div>
                    <div class="col-12 order-md-0 col-md-6 text-center my-2">
                        <a href="" class="link-warning fs-5">Olvidé la contraseña.</a>
                    </div>
                </div>
            </form>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>