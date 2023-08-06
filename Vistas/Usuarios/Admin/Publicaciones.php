<?php
    require_once("Modelos/model_archivos.php");
    require_once("Modelos/model_publicaciones.php");
?>

<!-- Navbar lateral start-->

<div class="offcanvas offcanvas-start text-bg-white" id="demo">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">Filtros</h1>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <form method="post" action="index.php?page=Publicaciones">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="" type="button" data-bs-toggle="collapse" data-bs-target="#seccion" aria-expanded="false" aria-controls="seccion">
                        Seccion
                    </a>
                    <div class="collapse" id="seccion">
                        <select name="Seccion" class="form-select form-select-sm">
                            <option selected disabled hidden>Seleccione una Seccion</option>
                            <option value="BGLOGO">Background & Logo</option>
                            <option value="ImagenesCarrusel">Imagenes de carrusel</option>
                            <option value="Publicidad">Publicidad</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-sm">Filtrar</button>
                </li>
            </ul>
        </form>
    </div>
</div>
<!-- Navbar lateral end-->

<div class="container shadow p-5 justify-content-center bg-dark-subtle">

    <!-- Titulo de la vista -->
    <h1 class="text-center">Publicaciones</h1>
    <!-- Titulo de la vista -->
    <!-- Boton del navbar lateral -->
    <button class="btn btn-primary btn-lg d-relative m-4" tabindex="-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        Publicaciones
    </button>
    <!-- Boton del navbar lateral -->


<!--     <div class="container table-responsive" style="max-height:500px;max-width:700px;">
        <table class="overflow-auto">
            <tr class="sticky-sm-top z-0">
                <td></td>
            </tr>
        </table>
    </div> -->

    <div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:600px;">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                foreach($dtpub as $rows):
                    if($rows['Seccion'] === $Seccion){
            ?>
            <div class="col">
                <div class="card h-100">
                    <img src="" alt="" class="card-img-top" />
                    <div class="card-body overflow-auto shadow">
                        <h5 class="card-title"><?php echo $rows['Principal']?></h5>
                        <p class="card-text"><?php echo $rows['Secundario'] ?></p>
                        <div class="d-inline-flex">
                            <a href="index.php?page=Edicion&Id=<?php echo $rows['IdPublic']?>&action=update" class="btn btn-success btn-sm">
                                Actualizar
                            </a>
                        </div>
                        <div class="d-inline-flex">
                            <a href="index.php?page=Edicion&Id=<?php echo $rows['IdPublic']?>&action=delete" class="btn btn-danger btn-sm">
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
    </div>
</div>