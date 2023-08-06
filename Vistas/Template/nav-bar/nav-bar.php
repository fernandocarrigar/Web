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
    <link rel="stylesheet" href="Recursos/css/aos-master.css" />
    <link rel="stylesheet" href="Recursos/WebApplication1.styles.css" asp-append-version="true" />

    <style>
        /* Navbar styles */
        .nav-link {
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        .nav-link:hover {
            color: #007BFF;
            background-color: #f5f5f5;
        }

        .navbar-brand img {
            height: 120px;
            /* Ajusta el tamaño según tu logo */
            margin-right: 10px;
        }

        /* Main content styles */
        .container {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container bg-dark">
                <a class="navbar-brand" asp-area="" asp-controller="Home" asp-action="Index">
                    <img src="/Img/MGC_Logo_EngraneB.png" alt="Logo"> <!-- Añade la ruta a tu logo aquí -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?page=Edicion">Edición de Página</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?page=Catalogos">Catálogos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?page=Sucursales">Sucursales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?page=CreateSucursales">Agregar Sucursales</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <main role="main" class="pb-3"></main>