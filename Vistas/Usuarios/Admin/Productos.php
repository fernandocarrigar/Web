<?php

    require_once("Modelos/model_marcas.php");
    require_once("Modelos/model_productos.php");

?>

<!-- Navbar lateral start-->

<div class="offcanvas offcanvas-start text-bg-white" id="demo">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">Filtros</h1>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <span class="text-muted fs-6 mb-4">De clic en Marca para ver los filtros</span>
        <form method="post" action="index.php?page=Productos">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="" type="button" data-bs-toggle="collapse" data-bs-target="#marca" aria-expanded="false" aria-controls="marca">
                        Marca
                    </a>
                    <div class="collapse mb-4" id="marca">
                        <select name="Marca" class="form-select form-select-sm">
                            <option selected disabled hidden>Seleccione una Marca</option>
                            <?php
                                foreach($dtmarca as $rowmarca):
                            ?>
                                <option value="<?php echo $rowmarca['IdMarca'] ?>"><?php echo $rowmarca['Nombre'] ?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-sm">Filtrar</button>
                </li>
            </ul>
        </form>
    </div>
</div>

<!-- Navbar lateral end-->

<div class="container shadow p-5 justify-content-center bg-dark-subtle" data-aos="zoom-out">

    <!-- Titulo de la vista -->
    <h1 class="text-center">Productos</h1>
    <!-- Titulo de la vista -->

    <!-- Boton del navbar lateral -->
    <button class="btn btn-primary btn-lg d-relative m-4" tabindex="-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        Filtrar productos
    </button>
    <!-- Boton del navbar lateral -->

    <a href="index.php?page=EdicionCatalogos&form=Productos" class="btn btn-success btn-lg ms-5">
        Agregar un nuevo producto
    </a>

    <div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:600px;">
    <?php
        if(isset($Marca)){
    ?>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                foreach($dtprod as $rows):
                    if($rows['IdMarca'] === $Marca){
            ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="data:<?php echo $rows['ProductoTp'] ?>;base64,<?php echo(base64_encode($rows['ProductoImg'])) ?>" alt="" class="card-img-top" />
                            <div class="card-body overflow-auto shadow">
                                <h5 class="card-title"><?php echo $rows['Nombre']?></h5>
                                <p class="card-text"><?php echo $rows['Descripcion'] ?></p>
                                <div class="d-inline-flex">
                                    <a href="index.php?page=Edicion&Id=<?php echo $rows['IdProductos']?>&form=<?php echo $form?>" class="btn btn-success btn-sm">
                                    Actualizar
                                </a>
                            </div>
                            <div class="d-inline-flex">
                                <a href="index.php?page=Publicaciones&Id=<?php echo $rows['IdProductos']?>&actionpub=delete" class="btn btn-danger btn-sm">
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
        }else if(!isset($Marca)){
    ?>
        <div class="row justify-content-center">
            <p>En esta seccion, se podran ver los diferentes productos que existen en la pagina. <br />
                De igual manera hay un boton en la parte superior que permite el 
                <a class="underline" tabindex="-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">filtrado</a>
                 de los productos, de esta manera podra diferenciar sin importar cuantas tenga en el sitio web.
            </p>
        </div>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                foreach($dtprod as $rows):
            ?>
            <div class="col">
                <div class="card h-100">
                    <img src="data:<?php echo $rows['ProductoTp'] ?>;base64,<?php echo(base64_encode($rows['ProductoImg'])) ?>" alt="" class="card-img-top" />
                    <div class="card-body overflow-auto shadow">
                        <h5 class="card-title"><?php echo $rows['Nombre']?></h5>
                        <p class="card-text"><?php echo $rows['Descripcion'] ?></p>
                        <div class="d-inline-flex">
                            <a href="index.php?page=Edicion&Id=<?php echo $rows['IdProductos']?>&form=<?php echo $form?>" class="btn btn-success btn-sm">
                                Actualizar
                            </a>
                        </div>
                        <div class="d-inline-flex">
                            <a href="index.php?page=Publicaciones&Id=<?php echo $rows['IdProductos']?>&actionpub=delete" class="btn btn-danger btn-sm">
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