<!-- Navbar lateral start-->

<?php
require_once("Modelos/model_herramientas.php");
?>

<div class="container p-5 justify-content-center bg-dark-subtle">

<!-- Titulo de la vista -->
    <h1 class="text-center">Agregue un tipo de Herramienta</h1>
    <!-- Titulo de la vista -->


    <?php 
    if((!empty($dtherramientawhere)) && (isset($dtherramientawhere))){
            ?>
                <form method="post" action="index.php?page=Herramienta&actionher=update&IdH=<?php echo $IdH ?>" enctype="multipart/form-data">
            <?php
    }elseif((empty($dtherramientawhere)) && (!isset($dtherramientawhere))){
        ?>
            <form method="post" action="index.php?page=Herramienta&actionher=insert" enctype="multipart/form-data">
        <?php
    }
    
    if((isset($dtherramientawhere))){
        foreach($dtherramientawhere as $rows):
        ?>
                <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                    <div class="form-floating m-3">
                        <input id="Herramienta" name="Herramienta" class="form-control" value="<?php echo $rows['TipoHerramienta'] ?>" type="text" placeholder="Tipo de herramienta" />
                        <label for="Herramienta">Tipo de herramienta</label>
                    </div>
                </div>
                <div class="container ms-auto me-auto mt-4">
                    <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                </div>
        <?php
        endforeach;
    }else if(!isset($dtherramientawhere)){
        ?>
            <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                <div class="form-floating m-3">
                    <input id="Herramienta" name="Herramienta" class="form-control" type="text" placeholder="Tipo de herramienta" />
                    <label for="Herramienta">Tipo de herramienta</label>
                </div>
            </div>
            <div class="container ms-auto me-auto mt-4">
                <button type="submit" class="btn btn-success btn-lg">Guardar</button>
            </div>
        <?php
    }
        ?>
    </form>
</div>

