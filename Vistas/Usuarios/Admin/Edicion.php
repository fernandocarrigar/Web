<!-- Navbar lateral start-->

<?php
require_once("Modelos/model_archivos.php");
require_once("Modelos/model_publicaciones.php");


if((!empty($_GET['form']))  ||  (isset($_GET['form']))) {
        $form = $_GET['form'];
    }
?>

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

<div class="container p-5 justify-content-center bg-dark-subtle">

<!-- Titulo de la vista -->
    <h1 class="text-center">Edicion de pagina</h1>
    <!-- Titulo de la vista -->

    <!-- Boton del navbar lateral -->
    <button class="btn btn-primary btn-lg d-relative m-4" tabindex="-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        Editar pagina
    </button>
    <!-- Boton del navbar lateral -->

    <?php 
    if((!empty($dtpubwhere)) && (isset($dtpubwhere))){
        ?>
            <form method="post" action="index.php?page=Edicion&action=update" enctype="multipart/form-data">
        <?php
    }else{
        ?>
            <form method="post" action="index.php?page=Edicion&action=insert" enctype="multipart/form-data" onsubmit="alert('Funciona')">
        <?php
    }
            if($form == 'BGLOGO'){
                ?>
                <div class="container table-responsive d-inline-flex rounded ms-auto me-auto bg-white">
                    <div class=" justify-content-center m-4 ms-5 d-block">
                        <h3 class="ms-5">Colores de la pagina</h3>
                        <div class="card-body d-inline-flex justify-content-center rounded bg-white">
                            <div class="card form form-group m-3">
                                <div class="card-body ms-auto me-auto">
                                    <label for="Principal">Principal:</label>
                                </div>
                                <input id="Principal" name="Principal" class="form-control stretched input-color" type="color" required />
                            </div>
                            <div class="card form form-group m-3">
                                <div class="card-body ms-auto me-auto">
                                    <label for="Secundario">Secundario:</label>
                                </div>
                                <input id="Secundario" name="Secundario" class="form-control stretched input-color" type="color" required />
                            </div>
                        </div>
                    </div>
                    <div class="container rounded-1 ms-auto me-auto bg-white">
                            <h3 class="text-center">Logo</h3>
                            <div class="justify-content-center">
                                <div class="form form-group m-3 p-3">
                                    <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file" placeholder="Inserte una imagen de logo" onchange="myimg()" required />
                                </div>
                                <input id="Seccion" name="Seccion" value="BGLOGO" hidden />
                            </div>
                            <div class="card border-0 justify-content-center m-4 d-block rounded-1 bg-white">
                                <div class="card-body img-thumbnail rounded mt-auto mb-auto">
                                    <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada" style="max-width:300px;max-height:200px;" />
                                </div>
                            </div>
                    </div>
                </div>
                <div class="container mt-4 ms-auto me-auto">
                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                    </div>
                <?php
                }else if($form == 'ImagenesCarrusel'){
                ?>
                    <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                        <h3 class="text-center">Imagen del carrusel</h3>
                        <div class="form form-group m-3 p-3">
                            <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file" placeholder="Inserte una imagen de logo" onchange="myimg()" required />
                        </div>
                        <input id="Seccion" name="Seccion" value="ImagenesCarrusel" hidden />
                    </div>
                    <div class="card border-0 justify-content-center m-5 rounded-1 ms-1 me-4 bg-white">
                        <div class=" img-thumbnail rounded me-auto mt-auto mb-auto">
                            <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada" style="max-width:400px;max-height:300px;" />
                            </div>
                    </div>

                    <div class="container ms-auto me-auto mt-4">
                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                    </div>
                <?php
            }
        ?>
    </form>
</div>

