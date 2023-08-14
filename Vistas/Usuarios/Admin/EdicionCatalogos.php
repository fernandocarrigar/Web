<!-- Navbar lateral start-->

<?php
require_once("Modelos/model_productos.php");
require_once("Modelos/model_marcas.php");
require_once("Modelos/model_herramientas.php");

if((!empty($_GET["form"])) && (isset($_GET["form"]))){
    $form = $_GET["form"];
}else{
    $form = null;
}
?>

<div class="offcanvas offcanvas-start text-bg-white" id="demo">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title mt-3">Catalogos <br/> "Marcas" & "Productos"</h2>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"></button>
    </div>
    <hr/>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link text-black active" aria-current="page" href="index.php?page=Edicioncatalogos&form=Marcas">Marcas de productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="index.php?page=EdicionCatalogos&form=Productos">Productos general</a>
            </li>
        </ul>
    </div>
</div>
<!-- Navbar lateral end-->

<div class="container p-5 justify-content-center bg-dark-subtle">

<!-- Titulo de la vista -->
    <h1 class="text-center">Edicion <?php echo $form ?></h1>
    <!-- Titulo de la vista -->


    <?php 
    if(((!empty($dtprodwhere)) && (isset($dtprodwhere))) || ((!empty($dtmarcawhere)) && (isset($dtmarcawhere)))){
        if($form == 'Productos'){
        ?>
            <form method="post" action="index.php?page=EdicionCatalogos&actionprod=update&Id=<?php echo $Id ?>&form=<?php echo $form ?>" enctype="multipart/form-data">
        <?php
        }elseif($form == 'Marcas'){
            ?>
                <form method="post" action="index.php?page=EdicionCatalogos&actionmarc=update&IdM=<?php echo $IdM ?>&form=<?php echo $form ?>" enctype="multipart/form-data">
            <?php
        }
    }elseif((empty($dtmarcawhere)) && (!isset($dtmarcawhere))){
        if($form == 'Productos'){
        ?>
            <form method="post" action="index.php?page=EdicionCatalogos&actionprod=insert&form=<?php echo $form ?>" enctype="multipart/form-data">
        <?php
        }else if($form == 'Marcas'){
        ?>
            <form method="post" action="index.php?page=EdicionCatalogos&actionmarc=insert&form=<?php echo $form ?>" enctype="multipart/form-data">
        <?php
        }
    }
    
    if((isset($dtprodwhere))){
        if($form == 'Productos'){
            foreach($dtprodwhere as $rows):
            ?>
                <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                    <h3 class="text-center"><?php echo $form ?></h3>
                    <div class="form form-group m-3">
                        <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file" placeholder="Inserte una imagen de producto" onchange="myimg()" />
                    </div>
                    <div class="form-floating m-3">
                        <input id="Descripcion" name="Descripcion" class="form-control" value="<?php echo $rows['Descripcion'] ?>" type="text" placeholder="Descripcion del producto" />
                        <label for="Descripcion">Descripcion del producto</label>
                    </div>
                    <div class="form-floating m-3">
                        <select id="IdMarca" name="IdMarca" class="form-select" value="<?php echo $rows['IdMarca'] ?>" type="text" placeholder="Marca del producto" >
                            <option selected disabled hidden>Seleccione una marca</option>
                            <?php
                                foreach($dtmarca as $rowmarca):
                            ?>
                                <option value="<?php echo $rowmarca['IdMarca'] ?>"><?php echo $rowmarca['Nombre'] ?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                        <label for="IdMarca">Marca del producto</label>
                    </div>
                    <div class="form-floating m-3">
                        <select id="IdHerramienta" name="IdHerramienta" class="form-select" value="<?php echo $rows['IdHerramienta'] ?>" type="text" placeholder="Tipo de herramienta" >
                            <option selected disabled hidden>Seleccione un tipo de herramienta</option>
                            <?php
                                foreach($dtherramienta as $rowher):
                            ?>
                                <option value="<?php echo $rowher['IdHerramienta'] ?>"><?php echo $rowher['TipoHerramienta'] ?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                        <label for="IdMarca">tipo de herramienta</label>
                    </div>
                </div>
                <div class="card border-0 justify-content-center m-5 rounded-1 ms-1 me-4 bg-white">
                    <div class=" img-thumbnail rounded ms-auto me-auto mt-auto mb-auto">
                        <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada" style="max-width:400px;max-height:300px;" />
                    </div>
                </div>

                <div class="container ms-auto me-auto mt-4">
                    <button type="submit" class="btn btn-success btn-lg">Enviar <?php echo $form ?></button>
                </div>
            <?php
            endforeach;
        }
    }else if((isset($dtmarcawhere))){
        if($form == 'Marcas'){
            foreach($dtmarcawhere as $rows):
                ?>
                    <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                        <h3 class="text-center"><?php echo $form ?></h3>
                        <div class="form form-group m-3">
                            <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file" placeholder="Inserte el logo una marca" onchange="myimg()" />
                        </div>
                        <div class="form-floating m-3">
                            <input id="Nombre" name="Nombre" class="form-control" value="<?php echo $rows['Nombre'] ?>" type="text" placeholder="Nombre de la marca"/>
                            <label for="Nombre">Marca</label>
                        </div>
                    </div>
                    <div class="card border-0 justify-content-center m-5 rounded-1 ms-1 me-4 bg-white">
                        <div class=" img-thumbnail rounded ms-auto me-auto mt-auto mb-auto">
                            <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada" style="max-width:400px;max-height:300px;" />
                        </div>
                    </div>
    
                    <div class="container ms-auto me-auto mt-4">
                        <button type="submit" class="btn btn-success btn-lg">Enviar <?php echo $form ?></button>
                    </div>
                <?php
            endforeach;
        }
    }else if(!isset($dtprodwhere)){
        
        if($form == 'Productos'){
        ?>
            <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                <h3 class="text-center"><?php echo $form ?></h3>
                <div class="form form-group m-3">
                    <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file" placeholder="Inserte una imagen de producto" onchange="myimg()" required />
                </div>
                <div class="form-floating m-3">
                    <input id="Descripcion" name="Descripcion" class="form-control" type="text" placeholder="Descripcion del producto" />
                    <label for="Descripcion">Descripcion del producto</label>
                </div>
                <div class="form-floating m-3">
                    <select id="IdMarca" name="IdMarca" class="form-select" type="text" placeholder="Marca del producto" required>
                        <option selected disabled hidden>Seleccione una marca</option>
                        <?php
                            foreach($dtmarca as $rowmarca):
                        ?>
                            <option value="<?php echo $rowmarca['IdMarca'] ?>"><?php echo $rowmarca['Nombre'] ?></option>
                        <?php
                            endforeach;
                        ?>
                    </select>
                    <label for="IdMarca">Marca del producto</label>
                </div>
                <div class="form-floating m-3">
                    <select id="IdHerramienta" name="IdHerramienta" class="form-select" type="text" placeholder="Tipo de herramienta" >
                        <option selected disabled hidden>Seleccione un tipo de herramienta</option>
                        <?php
                            foreach($dtherramienta as $rowher):
                        ?>
                            <option value="<?php echo $rowher['IdHerramienta'] ?>"><?php echo $rowher['TipoHerramienta'] ?></option>
                        <?php
                            endforeach;
                        ?>
                    </select>
                    <label for="IdMarca">tipo de herramienta</label>
                </div>
            </div>
            <div class="card border-0 justify-content-center m-5 rounded-1 ms-1 me-4 bg-white">
                <div class=" img-thumbnail rounded ms-auto me-auto mt-auto mb-auto">
                    <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada" style="max-width:400px;max-height:300px;" />
                </div>
            </div>
            <div class="container ms-auto me-auto mt-4">
                <button type="submit" class="btn btn-success btn-lg">Enviar <?php echo $form ?></button>
            </div>
        <?php
        }
        if($form == 'Marcas'){        
        ?>
            <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                <h3 class="text-center"><?php echo $form ?></h3>
                <div class="form form-group m-3">
                    <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file" placeholder="Inserte el logo una marca" onchange="myimg()" required />
                </div>
                <div class="form-floating m-3">
                    <input id="Nombre" name="Nombre" class="form-control" type="text" placeholder="Nombre de la marca" />
                    <label for="Nombre">Nombre de la marca</label>
                </div>
            </div>
            <div class="card border-0 justify-content-center m-5 rounded-1 ms-1 me-4 bg-white">
                <div class=" img-thumbnail rounded ms-auto me-auto mt-auto mb-auto">
                    <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada" style="max-width:400px;max-height:300px;" />
                </div>
            </div>

            <div class="container ms-auto me-auto mt-4">
                <button type="submit" class="btn btn-success btn-lg">Enviar <?php echo $form ?></button>
            </div>
        <?php
        }
    }
        ?>
    </form>
</div>

