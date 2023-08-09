<?php

require_once("Modelos/model_marcas.php");
require_once("Modelos/model_productos.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos de Protección Personal</title>
    <link rel="stylesheet" href="Recursos/Css/home.css">
</head>

<body>
    <div class="container pb-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ul class="carousel-indicators" style="list-style: none;">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            </ul>

            <div class="carousel-inner custom-carousel-inner">
                <div class="carousel-item active">
                    <img src="/Img/Pagina MCG imagenes.jpg" class="d-block w-100 custom-carousel-img" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="/Img/Pagina MCG imagenes2.jpg" class="d-block w-100 custom-carousel-img" alt="Imagen 1">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

    <header class="hero">
        <div class="container">
            <div class="row">
                <!-- Columna para el texto -->
                <div class="col-lg-6 text-right"> <!-- text-right para alinear el texto a la derecha -->
                    <h1>Protección Profesional para Cada Necesidad</h1>
                    <p>Encuentra los mejores equipos de protección personal adaptados a cada necesidad.</p>
                    <a href="index.php?page=Productos" class="btn btn-primary">Ver productos</a>
                </div>

                <!-- Columna para la imagen -->
                <div class="col-lg-6">
                    <img src="Img/Distribuidores.PNG" alt="Imagen Descriptiva" class="img-fluid rounded-img">
                </div>
            </div>
        </div>
    </header>


    <section class="marcas">
        <div class="container">
            <!-- Aquí puedes agregar un listado o tarjetas de productos con descripciones, imágenes, etc. -->
            <div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:600px;">
                <?php
                if (isset($dtmarca)) {
                ?>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        foreach ($dtmarca as $rows) :
                        ?>
                            <div class="col">
                                <div class="card h-100">
                                    <a href="index.php?Marca=<?php echo $rows['Nombre'] ?>#products">
                                        <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top" />
                                    </a>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </section>
    <section class="products" id="products">
        <div class="container">
            <!-- Aquí puedes agregar un listado o tarjetas de productos con descripciones, imágenes, etc. -->
            <div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:600px;">
                <?php
                if (isset($Marca)) {
                ?>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        foreach ($dtmarcawhere as $rows) :
                            if ($rows['Nombre'] === $Marca) {
                        ?>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="data:<?php echo $rows['ProductoTp'] ?>;base64,<?php echo (base64_encode($rows['ProductoImg'])) ?>" alt="" class="card-img-top" />
                                        <div class="card-body overflow-auto shadow">
                                            <h5 class="card-title"><?php echo $rows['Descripcion'] ?></h5>
                                            <p class="card-text"><?php echo $rows['Nombre'] ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        endforeach;
                        ?>
                    </div>
                <?php
                } else {
                ?>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        foreach ($dtprod as $rows) :
                        ?>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="data:<?php echo $rows['ProductoTp'] ?>;base64,<?php echo (base64_encode($rows['ProductoImg'])) ?>" alt="" class="card-img-top" />
                                    <div class="card-body overflow-auto shadow">
                                        <h5 class="card-title"><?php echo $rows['Nombre'] ?></h5>
                                        <p class="card-text"><?php echo $rows['Descripcion'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </section>

</body>

</html>