<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tools</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="Recursos/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="Recursos/css/site.css" asp-append-version="true" />
    <link rel="stylesheet" href="Recursos/css/maps.css" asp-append-version="true" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom box-shadow mb-3">
            <div class="container-fluid bg-dark">
                <a class="navbar-brand" href="index.php">
                    <img src="Img/MGC_Logo_EngraneB.png" alt="Logo" class="navbar-logo"> <!-- Añade la clase 'navbar-logo' a tu CSS -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-center" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <img src="~/img/icons/design_services_white_24dp.svg" /> Edición de Página
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?page=Edicion&form=BGLOGO"><img src="~/img/icons/image_white_24dp.svg" /> Logo y Colores de la pagina</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index.php?page=Edicion&form=ImagenesCarrusel"><img src="~/img/icons/quiz_white_24dp.svg" /> Imagenes del Carrusel de fotos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" asp-controller="Sesion" asp-action="Publicaciones" asp-route-Seccion="Publicidad"><img src="~/img/icons/auto_awesome_mosaic_white_24dp.svg" /> Publicidad</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <img src="~/img/icons/design_services_white_24dp.svg" /> Edicion de Sucursales
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?page=Sucursales"><img src="~/img/icons/image_white_24dp.svg" /> Sucursales</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index.php?page=CreateSucursales"><img src="~/img/icons/quiz_white_24dp.svg" /> Agregar Sucursales</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?page=Publicaciones">Publicaciones</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="p-0">
        <!-- Main content will go here -->
    </main>
</body>

</html>