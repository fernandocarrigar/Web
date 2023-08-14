<?php
require_once("Modelos/model_marcas.php");
require_once("Modelos/model_productos.php");
require_once("Modelos/model_publicaciones.php");
require_once("Modelos/model_herramientas.php");
require_once("Modelos/model_sucursales.php");
?>

<title>Equipos de Protección Personal</title>

<body class="">

    <div class="offcanvas offcanvas-start text-bg-white" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title fs-3">Tipos de Herramientas</h1>
            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body border">
            <span class="text-muted fs-6 mb-4">De clic en una para ver todas las herramientas de ese tipo</span>
            <hr>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <?php
                foreach ($dtherramienta as $rowher) :
                ?>
                    <li class="nav-item">
                        <a class="link btn hv-card navbar-expand-lg navbar-expand-md" href="index.php?TpH=<?php echo $rowher['TipoHerramienta']; ?>#products" type="button">
                            <?php echo $rowher['TipoHerramienta']; ?>
                        </a>
                    </li>
                <?php
                endforeach;
                ?>
            </ul>
        </div>
    </div>

    <div class="container-fluid carousel-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ul class="carousel-indicators" style="list-style: none;">
                <!-- <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active"></li> -->
                <?php
                $cuenta = count($dtpubSeccion);
                for ($i = 0; $i < $cuenta; $i++) {
                ?>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></li>
                <?php
                }
                ?>
            </ul>
            <div class="carousel-inner custom-carousel-inner" style="height:450px;">
                <!-- <div class="carousel-item active">
                    <img src="Img/Pagina MCG imagenes.jpg" class="d-block w-100 custom-carousel-img" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="Img/Pagina MCG imagenes2.jpg" class="d-block w-100 custom-carousel-img" alt="Imagen 1">
                </div> -->
                <?php
                $j = 0;
                foreach ($dtpubSeccion as $imgCar) :
                    if ($imgCar['Seccion'] == "ImagenesCarrusel") {
                ?>
                        <div class="carousel-item <?php echo $j === 0 ? 'active' : ''; ?>">
                            <img src="data:<?php echo $imgCar['MimeType'] ?>;base64,<?php echo (base64_encode($imgCar['Archivo'])) ?>" class="d-block w-100 custom-carousel-img" style="object-fit:fill;" alt="Imagen 1">
                        </div>
                <?php
                        $j++;
                    }
                endforeach;
                ?>
            </div>
            <!--<button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon custom-carousel-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon custom-carousel-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
            -->
        </div>
    </div>

    <header class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto text-center text-lg-right hero-text">
                    <h1>Protección Profesional para Cada Necesidad</h1>
                    <p>Encuentra los mejores equipos de protección personal adaptados a cada necesidad.</p>
                </div>

                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto text-center hero-image">
                    <img src="Img/Distribuidores.PNG" alt="Imagen Descriptiva" class="img-fluid rounded-img">
                    <a href="index.php#products" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>
    </header>

    <section id="marcas" class="marcas">
        <div class="container">
            <div class="container brand-container">
                <?php
                if (isset($dtmarca)) {
                ?>
                    <h2 class="text-center">Marcas</h2>
                    <div class="row row-cols-1 row-cols-md-3 mt-1 g-4">
                        <?php
                        foreach ($dtmarca as $rows) :
                        ?>
                            <div class="col mb-3 pb-0">
                                <div class="card hv-card">
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
            <div class="container product-container">
                <?php
                if ((isset($Marca)) && ($Marca != "")) {
                ?>
                    <h2 class="text-center">Productos</h2>

                    <button class="btn btn-primary btn-lg d-relative" tabindex="-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                        Tipos de herramientas
                    </button>

                    <div class="row row-cols-1 row-cols-md-3 mt-1 g-4">
                        <?php
                        foreach ($dtmarcawhere as $rows) :
                            if ($rows['Nombre'] === $Marca) {
                        ?>
                                <div class="col">
                                    <div class="card h-100 hv-card">
                                        <img src="data:<?php echo $rows['ProductoTp'] ?>;base64,<?php echo (base64_encode($rows['ProductoImg'])) ?>" alt="" class="card-img-top" />
                                        <div class="card-body overflow-auto">
                                            <h5 class="card-title"><?php echo $rows['Descripcion'] ?></h5>
                                            <p class="card-text"><?php echo $rows['Nombre'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } elseif ($rows['TipoHerramienta'] === $Marca) {
                            ?>
                                <div class="col">
                                    <div class="card h-100 hv-card">
                                        <img src="data:<?php echo $rows['ProductoTp'] ?>;base64,<?php echo (base64_encode($rows['ProductoImg'])) ?>" alt="" class="card-img-top" />
                                        <div class="card-body overflow-auto">
                                            <h5 class="card-title"><?php echo $rows['Descripcion'] ?></h5>
                                            <p class="card-text"><?php echo $rows['Nombre'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="col">
                                    <div class="card h-100 hv-card">
                                        <img src="data:<?php echo $rows['ProductoTp'] ?>;base64,<?php echo (base64_encode($rows['ProductoImg'])) ?>" alt="" class="card-img-top" />
                                        <div class="card-body overflow-auto">
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
                    <h2 class="text-center">Productos</h2>
                    <button class="btn btn-primary btn-lg d-relative" tabindex="-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                        Tipos de herramientas
                    </button>
                    <div class="row row-cols-1 row-cols-md-3 mt-1 g-4">
                        <?php
                        foreach ($dtprod as $rows) :
                        ?>
                            <div class="col">
                                <div class="card h-100 hv-card">
                                    <img src="data:<?php echo $rows['ProductoTp'] ?>;base64,<?php echo (base64_encode($rows['ProductoImg'])) ?>" alt="" class="card-img-top" />
                                    <div class="card-body overflow-auto">
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
    <section id="Ubicaciones">

        <div class="container-fluid shadow p-5 justify-content-center bg-dark" data-aos="zoom-in">

            <h3 class="text-light text-center mb-4 me-auto">Ubicaciones de las Sucursales</h3>
            <div class="container-fluid d-inline-flex">
                <div class="justify-content-center d-block bg-white p-2 rounded col-6 shadow-lg">
                    <div id="map" class="rounded"></div>
                </div>
                <div class="container-sm d-lg-flex gap-2 fw-normal col-5 rounded-3 p-0 bg-white rounded shadow-lg p-2 pe-0 me-0" style="max-height:520px;">
                    <div class="overflow-y-auto table-scroll col-12">
                        <ul class="nav flex-column justify-content-start container-fluid">
                            <?php
                            foreach ($dtsucur as $rows) :
                            ?>
                                <li class="nav-item mb-2"><button type="button" onclick="myLocation(<?php echo $rows['Longitud'] ?>,<?php echo $rows['Latitud'] ?>,'<?php echo $rows['Sucursal'] ?>','<?php echo $rows['Direccion'] ?>')" class="btn btn-outline-dark btn-sm m-0 btn-size btn-size-edit overflow-auto table-scroll">
                                        <p class="text-start fs-6 fw-bold m-0"><?php echo $rows['Sucursal'] ?></p>
                                        <p class="text-start"><?php echo $rows['Direccion'] ?></p>
                                    </button></li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>