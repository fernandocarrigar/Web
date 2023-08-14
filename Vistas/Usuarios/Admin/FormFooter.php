<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" href="/Recursos/Css/footer_form.css">

<div class="container mt-5">
    <h2 class="text-center mb-5">Configuración del Footer</h2>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Formulario de Configuración</h4>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- 1. Espacio para subir un logo -->
                <div class="mb-4">
                    <label for="logo" class="form-label"><i class="fas fa-image me-2"></i>Subir Logo:</label>
                    <div class="image-upload-container">
                        <input type="file" class="form-control" id="imageUpload" onchange="previewImage();" name="logo">
                        <img id="imagePreview" src="#" alt="Vista previa del logo" style="display: none; width: 100%; max-width: 300px;" class="mt-3">
                    </div>
                </div>

                <!-- 2. Campo(s) para agregar correos electrónicos -->
                <div class="mb-4">
                    <label for="" class="form-label"><i class="fas fa-envelope me-2"></i>Correos Electrónicos:</label>
                    <input type="email" class="form-control mb-3" id="email1" placeholder="Correo 1">
                    <input type="email" class="form-control" id="email2" placeholder="Correo 2 (opcional)">
                </div>

                <!-- 3. Campos para agregar dirección, código postal, ciudad y estado -->
                <div class="mb-4">
                    <label class="form-label"><i class="fas fa-map-marker-alt me-2"></i>Dirección:</label>
                    <input type="text" class="form-control mb-3" id="direccion" placeholder="Dirección" name="direccion">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" class="form-control" id="codigoPostal" placeholder="Código Postal" name="codigoPostal">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" name="ciudad">
                        </div>
                    </div>
                    <input type="text" class="form-control" id="estado" placeholder="Estado" name="estado">
                </div>

                <!-- 4. Campo(s) para agregar números de teléfono -->
                <div class="mb-4">
                    <label for="" class="form-label"><i class="fas fa-phone me-2"></i>Teléfonos:</label>
                    <input type="tel" class="form-control mb-3" id="telefono1" placeholder="Teléfono 1">
                    <input type="tel" class="form-control" id="telefono2" placeholder="Teléfono 2 (opcional)">
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Información</button>
            </form>
        </div>
    </div>
</div>

<script>
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