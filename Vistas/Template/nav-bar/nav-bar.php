<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MGC Tools - Equipos de protección personal.</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="Recursos/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="Recursos/css/site.css" />
    <link rel="stylesheet" href="Recursos/Css/home.css" />
    <link rel="stylesheet" href="Recursos/css/maps.css" />
    <link rel="stylesheet" href="Recursos/Css/footer.css">
    <link rel="stylesheet" href="Recursos/Css/footer_form.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-expand-lg navbar-expand-xl navbar-light bg-dark border-bottom box-shadow mb-3 sticky-top">
            <div class="container-fluid bg-dark ps-auto pe-auto">
                <a class="navbar-brand" href="index.php">
                    <img src="Img/MGC_Logo_EngraneB.png" alt="Logo"> <!-- Añade la ruta a tu logo aquí -->
                </a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-center" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item me-5">
                            <a class="nav-link text-white" href="index.php">Home</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link text-white" href="index.php?page=Nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link text-white" href="index.php#marcas">Marcas</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link text-white" href="index.php#products">Productos</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link text-white" href="index.php#Ubicaciones">Sucursales</a>
                        </li>
                        <?php
                        if ($_SESSION != null) {
                            if ($_SESSION['loggedin'] == true) {
                        ?>
                                <!-- <li class="nav-item">
                            <a class="nav-link text-light dropdown-item fs-6" href="index.php?page=Edicion&form=ImagenesCarrusel">
                                Editar Imagenes del Carrusel de fotos
                            </a>
                        </li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-light dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        Edición de la página
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link text-dark dropdown-item fs-6" href="index.php?page=Publicaciones">
                                                Publicaciones
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <!-- <li class="nav-item">
                                    <a class="nav-link text-dark dropdown-item fs-6" href="index.php?page=Edicion&form=BGLOGO">
                                        Editar Logo y Colores de la pagina
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link text-dark dropdown-item fs-6" href="index.php?page=Edicion&form=ImagenesCarrusel">
                                                Agregar Imagenes del Carrusel de fotos
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark dropdown-item fs-6" href="index.php?page=Contactos">
                                                Datos de contacto
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark dropdown-item fs-6" href="index.php?page=AddContactos">
                                                Agregar datos de contacto
                                            </a>
                                        </li>
                                        <!-- <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark dropdown-item fs-6" asp-controller="Sesion" asp-action="Publicaciones" asp-route-Seccion="Publicidad">
                                        Publicidad
                                    </a>
                                </li> -->
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-light dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sucursales
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link text-dark dropdown-item fs-6" href="index.php?page=Sucursales">
                                                Ver Sucursales
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark dropdown-item fs-6" href="index.php?page=CreateSucursales">
                                                Agregar Sucursales
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link text-light dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        Catalogos
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link text-dark fs-6" href="index.php?page=Productos">Productos</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark fs-6" href="index.php?page=Marcas">Marcas</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark fs-6" href="index.php?page=Herramienta">Agregar un tipo de herramienta</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="cerrar.php">Cerrar sesion</a>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="mt-5">
        <!-- <div class="row">
            <div class="col d-inline-block m-lg-3 m-md-3 m-sm-3">
                <nav aria-label="breadcrumb" class=" bg-dark rounded-3 p-3" data-bs-theme="dark">
                    <ul class="nav d-flex dropdown-item">
                    </ul>
                </nav>
            </div>
        </div> -->
        <main role="main" class="p-0">