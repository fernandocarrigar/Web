<link rel="stylesheet" href="../../Recursos/Css/home.css" asp-append-version="true" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css" rel="stylesheet">

<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center">
            <h2 style="color: #007BFF">¿Quienes Somos?</h2>
            <div class="col-lg-6 justify-text">
                <p style="font-size: 26px;">
                    <span class="fw-bold" style="color: red;">MGC Tools</span> es una empresa fundada en el año 2013, ofrecemos suministros y servicios para la industria petrolera en el ámbito de equipos de protección personal.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Puedes añadir una imagen relacionada con tu negocio aquí -->
                <img src="/Img/Home.png" alt="Imagen Descriptiva" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<section class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <h3>Objetivo</h3>
            <div class="col-lg-6">
                <!-- Imagen relacionada con tu negocio -->
                <img style="border-radius: 10px" src="/Img/Home.png" alt="Imagen Descriptiva" class="img-fluid">
            </div>
            <div class="col-lg-6 justify-text">
                <p style="font-size: 26px;">
                    Distribuir nuestros productos y servicios a todos los clientes para la satisfacción de sus necesidades a través de una comunicación continua que permita proporcionárselas en el momento requerido.
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <h3 class="mt-5">Misión</h3>
            <div class="col-lg-6 justify-text">
                <p style="font-size: 26px;">
                    <span style="color: red">MGC Tools</span>
                    es una empresa debidamente establecida y constituida que abastece de materiales, equipos y servicios a través de negociaciones responsables y comprometidas
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Imagen relacionada con tu negocio -->
                <img style="border-radius: 10px" src="/Img/Home.png" alt="Imagen Descriptiva" class="img-fluid">
            </div>
        </div>

        <div class="row align-items-center">
            <h3 class="mt-5">Visión</h3>
            <div class="col-lg-6">
                <!-- Imagen relacionada con tu negocio -->
                <img style="border-radius: 10px" src="/Img/Home.png" alt="Imagen Descriptiva" class="img-fluid">
            </div>
            <div class="col-lg-6 justify-text">
                <p style="font-size: 26px;">
                    Ser la mayor empresa de herramientas y servicios de seguridad del país altamente reconocida a nivel internacional, comprometida con la sociedad a través de productos de calidad que permitan satisfacer sus requerimientos en base a las necesidades existentes.
                </p>
            </div>
        </div>


        <div class="row align-items-center">
            <h3 class="mt-5">Valores</h3>
            <div class="col-lg-6 justify-text">
                <ul style="font-size: 24px;">
                    <li>Actitud de servicio</li>
                    <li>Compromiso</li>
                    <li>Innovación</li>
                    <li>Honestidad</li>
                    <li>Lealtad</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <!-- Imagen relacionada con tu negocio -->
                <img style="border-radius: 10px" src="/Img/Home.png" alt="Imagen Descriptiva" class="img-fluid">
            </div>
        </div>
    </div>

</section>

<section class="services">
    <div class="container">
        <h2 class="text-center">Nuestros Servicios</h2>
        <div class="row">
            <!-- Servicio: Suministro de equipo -->
            <div class="col-lg-4">
                <!-- Imagen que activará el modal -->
                <img src="/Img/Suministro.png" alt="Servicio" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal1">
                <h3 class="mt-3">Suministro de equipo.</h3>
            </div>

            <!-- Servicio: Comercialización de equipos -->
            <div class="col-lg-4">
                <!-- Imagen que activará otro modal (puedes cambiar la ruta de la imagen) -->
                <img src="/Img/Comercializacion.png" alt="Servicio" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal2">
                <h3 class="mt-3">Comercialización de equipos</h3>
            </div>

            <div class="col-lg-4">
                <!-- Imagen que activará otro modal (puedes cambiar la ruta de la imagen) -->
                <img src="/Img/Areas.png" alt="Servicio" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal3">
                <h3 class="mt-3">Areas y productos</h3>
            </div>

            <!-- Fin del bloque de servicio -->
        </div>
    </div>

    <!-- Modal para Suministro de equipo -->
    <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="/Img/Suministro.png" alt="Servicio Ampliado" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Comercialización de equipos -->
    <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="/Img/Comercializacion.png" alt="Servicio Ampliado" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="imageModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="/Img/Areas.png" alt="Servicio Ampliado" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</section>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>