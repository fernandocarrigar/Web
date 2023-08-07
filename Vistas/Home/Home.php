<link rel="stylesheet" href="../../Recursos/Css/home.css" asp-append-version="true" />

<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>Bienvenidos a MGC Tools & Safety De México</h1>
                <p>"Seguridad para todos".</p>
            </div>
            <div class="col-lg-6">
                <!-- Puedes añadir una imagen relacionada con tu negocio aquí -->
                <img src="/Img/Descripcion.png" alt="Imagen Descriptiva" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="container">
        <!-- Introducción -->
        <div class="intro">
            <img src="/Img/quienes_somos.png" alt="Imagen descriptiva de la empresa">
        </div>

        <!-- Sección de Objetivo, Misión, Visión, Valores -->
        <div class="row mission-values">

            <!-- Objetivo -->
            <div class="col-lg-3">
                <h3>Objetivo</h3>
                <p>Resumen del objetivo de tu empresa. <a href="#" data-bs-toggle="modal" data-bs-target="#objetivoModal">Leer más</a></p>
            </div>

            <!-- Misión -->
            <div class="col-lg-3">
                <h3>Misión</h3>
                <p>Resumen de la misión de tu empresa. <a href="#" data-bs-toggle="modal" data-bs-target="#misionModal">Leer más</a></p>
            </div>

            <!-- Visión -->
            <div class="col-lg-3">
                <h3>Visión</h3>
                <p>Resumen de la visión de tu empresa. <a href="#" data-bs-toggle="modal" data-bs-target="#visionModal">Leer más</a></p>
            </div>

            <!-- Valores -->
            <div class="col-lg-3">
                <h3>Valores</h3>
                <ul>
                    <li>Valor 1</li>
                    <li>Valor 2</li>
                    <li>Valor 3</li>
                    <!-- Más valores si los hay -->
                </ul>
            </div>
        </div>


        <!-- Historia y Cronograma -->
        <div class="history-section">
            <h3>Historia</h3>
            <p>Un resumen o introducción sobre la historia de la empresa. Considera integrar un cronograma o una infografía para visualizar la evolución de tu empresa.</p>
        </div>

        <!-- Equipo -->
        <div class="team-section">
            <h3>Nuestro Equipo</h3>
            <!-- Aquí puedes incluir tarjetas o "cards" con imágenes, nombres y roles de los miembros clave del equipo -->
        </div>

        <!-- Testimonios -->
        <div class="testimonials-section">
            <h3>Testimonios</h3>
            <!-- Considera incorporar sliders o carruseles con testimonios de clientes o colaboradores -->
        </div>

        <!-- Preguntas Frecuentes (FAQ) -->
        <div class="faq-section">
            <h3>Preguntas Frecuentes</h3>
            <!-- Implementa un sistema de acordeón o una lista simple con las preguntas y respuestas más comunes -->
        </div>

        <!-- Enlace al Blog o Noticias -->
        <div class="news-section">
            <h3>Noticias Recientes</h3>
            <p>Para más detalles sobre lo que está sucediendo en nuestra empresa, revisa nuestro <a href="path-to-your-blog-or-news-section">blog o sección de noticias</a>.</p>
        </div>

    </div>
</section>

<!-- Modal Objetivo -->
<div class="modal fade" id="objetivoModal" tabindex="-1" aria-labelledby="objetivoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <img src="/Img/Objetivo.png" alt="Imagen del Objetivo" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- Modal Misión -->
<div class="modal fade" id="misionModal" tabindex="-1" aria-labelledby="misionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <img src="/Img/Mision.jpeg" alt="Imagen de la Misión" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- Modal Visión -->
<div class="modal fade" id="visionModal" tabindex="-1" aria-labelledby="visionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <img src="/Img/Visión.jpeg" alt="Imagen de la visión" class="img-fluid">
            </div>
        </div>
    </div>
</div>


<section class="services">
    <div class="container">
        <h2>Nuestros Servicios</h2>
        <div class="row">
            <!-- Repite este bloque por cada servicio -->
            <div class="col-lg-4">
                <img src="path_to_service_image.jpg" alt="Servicio" class="img-fluid">
                <h3>Nombre del Servicio</h3>
                <p>Descripción breve del servicio.</p>
            </div>
            <!-- Fin del bloque de servicio -->
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <h2>Lo que nuestros clientes dicen</h2>
        <!-- Repite este bloque por cada testimonio -->
        <blockquote>
            <p>Este es un testimonio de un cliente satisfecho.</p>
            <footer>- Nombre del Cliente</footer>
        </blockquote>
        <!-- Fin del bloque de testimonio -->
    </div>
</section>