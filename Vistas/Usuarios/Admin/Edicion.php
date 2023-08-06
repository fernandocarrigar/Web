﻿<!-- Navbar lateral start-->

<div class="offcanvas offcanvas-start text-bg-white" id="demo">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">Secciones a editar</h1>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link text-black active" aria-current="page" href="index.php?page=Edicion&form=BGLOGO">Colores de la pagina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="index.php?page=Edicion&form=ImagenesCarrusel">Imagenes del Carrusel de fotos</a>
            </li>
            <!--        <li class="nav-item dropdown">
                <a class="nav-link text-black dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li> -->
        </ul>

    </div>
</div>
<!-- Navbar lateral end-->

<div class="container shadow p-5 justify-content-center bg-dark-subtle">

    <!-- Titulo de la vista -->
    <h1 class="text-center">Edicion de pagina</h1>
    <!-- Titulo de la vista -->

    <!-- Boton del navbar lateral -->
    <button class="btn btn-primary btn-lg d-relative m-4" tabindex="-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        Editar pagina
    </button>
    <!-- Boton del navbar lateral -->


    <form asp-controller="Home" asp-action="Edicion" enctype="multipart/form-data">

        <?php if ((!empty($_GET['form']))  ||  (isset($_GET['form']))) {
            $form = $_GET['form'];

            if ($form == 'BGLOGO') {
                echo '
                <div class="container table-responsive d-inline-flex rounded ms-auto me-auto bg-white">
                    <div class=" justify-content-center m-4 ms-5 d-block">
                        <h3 class="ms-5">Colores de la pagina</h3>
                        <div class="card-body d-inline-flex justify-content-center rounded bg-white">
                            <div class="card form form-group m-3">
                                <div class="card-body ms-auto me-auto">
                                    <label asp-for="Principal">Principal:</label>
                                    <span asp-validation-for="Principal"></span>
                                </div>
                                <input asp-for="Principal" class="form-control stretched input-color" type="color" required />
                            </div>
                            <div class="card form form-group m-3">
                                <div class="card-body ms-auto me-auto">
                                    <label asp-for="Secundario">Secundario:</label>
                                    <span asp-validation-for="Secundario"></span>
                                </div>
                                <input asp-for="Secundario" class="form-control stretched input-color" type="color" required />
                            </div>
                        </div>
                    </div>
                    <div class="container rounded-1 ms-auto me-auto bg-white">
                        <div class="container m-4 d-block">
                            <h3 class="text-center">Imagen del carrusel</h3>
                            <div class="container justify-content-center">
                                <div class="form form-group m-3 p-3">
                                    <input asp-for="Archivo" class="form-control form-control-lg" type="file" placeholder="Inserte una imagen de logo" onchange="myimg()" required />
                                    <span asp-validation-for="Archivo"></span>
                                </div>
                                <input asp-for="Seccion" value="BGLOGO" hidden />
                            </div>
                            <div class="card border-0 justify-content-center m-4 d-block rounded-1 bg-white">
                                <div class="card-body img-thumbnail rounded mt-auto mb-auto">
                                    <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada" style="max-width:300px;max-height:200px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            } else if ($form == 'ImagenesCarrusel') {
                echo '
                    <div class="container-sm d-inline-flex rounded-1 ms-auto me-auto bg-white">
                        <div class="container-sm m-4 d-block">
                            <h3 class="text-center">Imagen del carrusel</h3>
                            <div class="container justify-content-center">
                                <div class="form form-group m-3 p-3">
                                    <input asp-for="Archivo" class="form-control form-control-lg" type="file" placeholder="Inserte una imagen de logo" onchange="myimg()" required />
                                    <span asp-validation-for="Archivo"></span>
                                </div>
                                <input asp-for="Seccion" value="Carrusel" hidden />
                            </div>
                        </div>
                        <div class="card border-0 justify-content-center m-5 d-block rounded-1 ms-auto me-4 bg-white">
                            <div class="card-body img-thumbnail rounded ms-auto me-auto mt-auto mb-auto">
                                <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada" style="max-width:300px;max-height:200px;" />
                            </div>
                        </div>
                    </div>

                    <div class="container ms-auto me-auto">

                    </div>
                ';
            }
        } ?>
    </form>
</div>