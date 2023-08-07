<?php

require_once("Modelos/model_marcas.php");
require_once("Modelos/model_catalogos.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos de Protección Personal</title>
    <link rel="stylesheet" href="/Recursos/Css/home.css">
</head>

<body>
    <header class="hero">
        <div class="container">
            <div class="row">
                <!-- Columna para el texto -->
                <div class="col-lg-6 text-right"> <!-- text-right para alinear el texto a la derecha -->
                    <h1>Protección Profesional para Cada Necesidad</h1>
                    <p>Encuentra los mejores equipos de protección personal adaptados a cada necesidad.</p>
                    <a href="index.php?page=Catalogos" class="btn btn-primary">Ver productos</a>
                </div>

                <!-- Columna para la imagen -->
                <div class="col-lg-6">
                    <img src="/Img/Distribuidores.PNG" alt="Imagen Descriptiva" class="img-fluid rounded-img">
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
                                    <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top" />
                                    <div class="card-body overflow-auto shadow">
                                        <h5 class="card-title"><?php echo $rows['Nombre'] ?></h5>
                                        <div class="d-inline-flex">
                                            <a href="index.php?page=Marcas&Id=<?php echo $rows['IdMarca'] ?>&form=<?php echo $Marca ?>" class="btn btn-success btn-sm">
                                                Actualizar
                                            </a>
                                        </div>
                                        <div class="d-inline-flex">
                                            <a href="index.php?page=Marcas&Id=<?php echo $rows['IdMarca'] ?>&actionpub=delete&Seccion=<?php echo $Marca ?>" class="btn btn-danger btn-sm">
                                                Eliminar
                                            </a>
                                        </div>
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
    <section class="products">
        <div class="container">
            <!-- Aquí puedes agregar un listado o tarjetas de productos con descripciones, imágenes, etc. -->
            <div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:600px;">
                <?php
                if (isset($Marca)) {
                ?>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        foreach ($dtmarca as $rows) :
                            if ($rows['IdMarca'] === $Marca) {
                        ?>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top" />
                                        <div class="card-body overflow-auto shadow">
                                            <h5 class="card-title"><?php echo $rows['Principal'] ?></h5>
                                            <p class="card-text"><?php echo $rows['Secundario'] ?></p>
                                            <div class="d-inline-flex">
                                                <a href="index.php?page=Edicion&Id=<?php echo $rows['IdPublic'] ?>&form=<?php echo $Seccion ?>" class="btn btn-success btn-sm">
                                                    Actualizar
                                                </a>
                                            </div>
                                            <div class="d-inline-flex">
                                                <a href="index.php?page=Publicaciones&Id=<?php echo $rows['IdPublic'] ?>&actionpub=delete&Seccion=<?php echo $Seccion ?>" class="btn btn-danger btn-sm">
                                                    Eliminar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
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