<?php

    require_once("Modelos/model_sucursales.php");

?>

<div class="container shadow p-5 justify-content-center bg-dark-subtle" data-aos="zoom-in">
    <h3 class="text-black text-center mb-4">Ubicaciones de las Sucursales</h3>

    <div class="container-fluid d-inline-flex">
        <div class="justify-content-center d-block bg-white p-2 rounded col-6 shadow-lg">
            <div id="map" class="rounded"></div>
        </div>
        <div class="container-sm d-lg-flex gap-2 fw-normal col-5 rounded-3 p-0 bg-white rounded shadow-lg p-2 pe-0 me-0" style="max-height:520px;">
            <div class="overflow-y-auto table-scroll col-12">
                <ul class="nav flex-column justify-content-start container-fluid">
                <?php
                foreach($dtsucur as $rows):
                ?>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(<?php echo $rows['Longitud']?>,<?php echo $rows['Latitud']?>,'<?php echo $rows['Sucursal']?>','<?php echo $rows['Direccion']?>')" class="btn btn-outline-dark btn-sm m-0 btn-size btn-size-edit overflow-auto table-scroll"><p class="text-start fs-6 fw-bold m-0"><?php echo $rows['Sucursal'] ?></p><p class="text-start"><?php echo $rows['Direccion'] ?></p></button></li>
                <?php
                endforeach;
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>