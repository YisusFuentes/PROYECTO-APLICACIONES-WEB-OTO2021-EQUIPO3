<?php include("conexion.php");

global $database;


$buscardor = $database->query("SELECT * FROM inventory WHERE NAME_PRODUCT LIKE LOWER('%".$_POST["buscar"]."%') OR DESCRPTION LIKE LOWER ('%".$_POST["buscar"]."%') "); 
$numero = $database-> affected_rows; 

$consulta = "SELECT * FROM inventory WHERE NAME_PRODUCT LIKE LOWER('%".$_POST["buscar"]."%') OR DESCRPTION LIKE LOWER ('%".$_POST["buscar"]."%') ";
?>

<body class="fondoGris" >
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Inventario</title>
</head>

<h5 class="col p-0">Resultados encontrados (<?php echo $numero; ?>):</h5>

<?php while($resultado = $buscardor -> fetch_assoc() ){ ?>

    
    <div class="row m-0 justify-content-center">
                            <div class="card-cont col-md-4 my-3 mb-md-0">
                                <div class="card luz rounded rounded-3 fondoMorado">
                                    <div class="row g-0">
                                    <div class="col-3 col-md-12 d-flex justify-content-center p-2 mx-0 px-0">
                                            <img class="img-fluid" width="150" src="<?php $resultado["IMG_SOURCE"] ?>" alt="">
                                        </div>
                                        <div class="col-9 col-md-12 bg-white rounded">
                                            <div class="card-body">
                                                <div class="row g-0">
                                                    <div class="col d-flex justify-content-between">
                                                        <div><?php echo $resultado["ID_PRODUCT"]; ?></div>
                                                        
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="">
                                                            <img class="img-fluid" src="../img/Visible.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="fw-bold morado"><?php echo $resultado["NAME_PRODUCT"] ?></div>
                                                <div class="row g-0">
                                                    <div class="col">
                                                        Existencia: <?php echo $resultado["CANT_STOCK"];?>
                                                    </div>
                                                    <div class="col-auto me-1">
                                                        <div class="badge rounded-pill bg-warning morado"><?php echo $resultado["CATEGORY"]; ?></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        $<?php echo $resultado["PRICE"]; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-0 desc fondoMorado">
                                        <div class="description text-white p-2">
                                            <?php echo $resultado["DESCRPTION"]; ?>
                                        </div>
                                        <div class="btns d-flex justify-content-around align-items-center">
                                            <a href="adminEditarProducto.php?id=<?php echo $resultado["ID_PRODUCT"];?>" class="btn btn-warning text-white">
                                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                                </svg>
                                                <span class="d-none d-md-inline">Editar</span> 
                                            </a>
                                            
                                            <form action="../API/inventory/nombre/eliminar" method= "POST" >
                                            <?php $id = $resultado["ID_PRODUCT"]; ?>
                                            <button type="submit" value = "<?php echo $id ?>" name= "eliminar" class="btn btn-danger text-white my-2">
                                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8,9H16V19H8V9M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5Z" />
                                                </svg>
                                                <span class="d-none d-md-inline">Eliminar</span> 
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


<?php } ?>

</body>

                      