<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tools</title>
    <link rel="stylesheet" href="Recursos/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Recursos/css/site.css" asp-append-version="true" />
    <link rel="stylesheet" href="Recursos/css/maps.css" asp-append-version="true" />
    <link rel="stylesheet" href="Recursos/css/aos-master.css" />
    <link rel="stylesheet" href="Recursos/WebApplication1.styles.css" asp-append-version="true" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin="" />

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" asp-area="" asp-controller="Home" asp-action="Index">WebApplication1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?page=Edicion">Edicion de pagina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?page=Catalogos">Catalogos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?page=Sucursales">Sucursales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?page=CreateSucursales">Agregar Sucursales</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main" class="pb-3">