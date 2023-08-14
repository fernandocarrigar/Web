<!-- Bootstrap CSS -->
<?php
include_once("Modelos/model_contactos.php");
?>


<div class="container mt-5">
    <h2 class="text-center mb-5">Configuración del Footer</h2>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Formulario de Configuración</h4>
        </div>
        <div class="card-body">
            <?php
            if (isset($dtcontactowhere)) {
            ?>
                <form action="index.php?page=AddContactos&actioncon=update" method="post" enctype="multipart/form-data">
                <?php
            } else {
                ?>
                    <form action="index.php?page=AddContactos&actioncon=insert" method="post" enctype="multipart/form-data">
                        <?php
                    }

                    if (isset($dtcontactowhere)) {
                        foreach ($dtcontactowhere as $contact) :
                            $correo = $contact['Correo'];
                            $direccion = $contact['Direccion'];
                            $postal = $contact['CodigoP'];
                            $ciudad = $contact['Ciudad'];
                            $estado = $contact['Estado'];
                            $tel = $contact['Telefono'];
                        ?>
                            <!-- 1. Espacio para subir un logo -->
                            <!-- <div class="mb-4">
                    <label for="logo" class="form-label"><i class="fas fa-image me-2"></i>Subir Logo:</label>
                    <div class="image-upload-container">
                        <input type="file" class="form-control" id="imageUpload" onchange="previewImage();" name="logo">
                        <img id="imagePreview" src="#" alt="Vista previa del logo" style="display: none; width: 100%; max-width: 300px;" class="mt-3">
                    </div>
                </div> -->

                            <!-- 2. Campo(s) para agregar correos electrónicos -->
                            <div class="mb-4">
                                <label for="" class="form-label"><i class="fas fa-envelope me-2"></i>Correos Electrónicos:</label>
                                <input type="email" class="form-control mb-3" id="Correo" placeholder="Correo" value="<?php echo $correo ?>" name="Correo">
                                <!-- <input type="email" class="form-control" id="email2" placeholder="Correo 2 (opcional)"> -->
                            </div>

                            <!-- 3. Campos para agregar dirección, código postal, ciudad y estado -->
                            <div class="mb-4">
                                <label class="form-label"><i class="fas fa-map-marker-alt me-2"></i>Dirección:</label>
                                <input type="text" class="form-control mb-3" id="Direccion" placeholder="Dirección" value="<?php echo $direccion ?>" name="Direccion">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="text" class="form-control" id="CodigoP" placeholder="Código Postal" value="<?php echo $postal ?>" name="CodigoP">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="text" class="form-control" id="Ciudad" placeholder="Ciudad" value="<?php echo $ciudad ?>" name="Ciudad">
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="Estado" placeholder="Estado" value="<?php echo $estado ?>" name="Estado">
                            </div>

                            <!-- 4. Campo(s) para agregar números de teléfono -->
                            <div class="mb-4">
                                <label for="" class="form-label"><i class="fas fa-phone me-2"></i>Teléfonos:</label>
                                <input type="tel" class="form-control mb-3" id="Telefono" placeholder="Teléfono" value="<?php echo $tel ?>" name="Telefono">
                                <!-- <input type="tel" class="form-control" id="telefono2" placeholder="Teléfono 2 (opcional)"> -->
                            </div>

                    <?php
                        endforeach;
                    }
                    ?>



                    <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Información</button>
                    </form>
        </div>
    </div>
</div>

<!--<script>
    function previewImage() {
        const file = document.getElementById("imageUpload").files[0];
        const reader = new FileReader();

        reader.onloadend = function() {
            document.getElementById("imagePreview").src = reader.result;
            document.getElementById("imagePreview").style.display = "block"; // Mostrar la vista previa de la imagen
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            document.getElementById("imagePreview").src = "";
        }
    }
</script>
-->