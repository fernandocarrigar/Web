<?php

    require_once("Modelos/model_sucursales.php");

?>

<div class="container shadow p-5 justify-content-center bg-dark-subtle">
    <?php
        if($Id === ""){
    ?>
        <form method="post" action="index.php?page=CreateSucursales&actionsucur=insert">
    <?php
        }else{
    ?>
        <form method="post" action="index.php?page=Sucursales&actionsucur=update&Id=<?php echo $Id ?>">
    <?php
        }
    ?>
        <h2 class="h1-responsive font-weight-bold text-center mb-5">Sucursales</h2>
        <div class="container rounded pt-3 pb-3 bg-white">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend form-floating">
                    <input id="Longitud" name="Longitud" placeholder="Longitud" type="text" class="form-control me-2" required>
                    <label for="Longitud">Longitud</label>
                    </div>
                    <div class="input-group-prepend form-floating">
                        <input id="Latitud" name="Latitud" placeholder="Latitud" type="text" class="form-control" required>
                        <label for="Latitud">Latitud</label>
                    </div>
                </div>
                <span for="Longitud" class="text-danger"></span>
                <span for="Latitud" class="text-danger"></span>
            </div>
            <div class="form-group form-floating mb-3 mt-2">
                <input id="Sucursal" name="Sucursal" placeholder="Nombre de la localización" type="text" class="form-control" required>
                <label for="Sucursal">Sucursal</label>
                <span for="Sucursal" class="text-danger"></span>
            </div>

            <div class="form form-group form-floating mb-2 mt-1">
                <textarea id="Direccion" name="Direccion" placeholder="Direccion de la sucursal" cols="40" rows="5" class="form-control" type="text" required></textarea>
                <label for="Direccion">Direccion</label>
                <span for="Direccion" class="text-danger"></span>
            </div>

            <div class="form-group p-0 mt-3 ms-auto me-auto">
                <button name="submit" type="submit" class="btn btn-primary">Guardar Dirección</button>
            </div>
        </div>
    </form>
</div>