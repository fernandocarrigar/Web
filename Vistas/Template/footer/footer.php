</main>
</div>

<?php
require_once("Modelos/model_contactos.php");
?>

<footer class="border-top footer text-muted mt-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <?php
            foreach ($dtcontactos as $fot) :
            ?>
                <!-- Correos -->
                <div class="col-md-4">
                    <h5 class="footer-h5"><i class="fas fa-envelope"></i> Correos:</h5>
                    <ul class="list-unstyled footer-content">
                        <li><?php echo $fot['Correo'] ?></li>
                        <li>correo2@example.com</li>
                    </ul>
                </div>

                <!-- Dirección -->
                <div class="col-md-4">
                    <h5 class="footer-h5"><i class="fas fa-map-marker-alt"></i> Dirección:</h5>
                    <p class="footer-content"><?php echo $fot['Direccion'] ?>, <?php echo $fot['Ciudad'] ?>, <?php echo $fot['Estado'] ?> <?php echo $fot['CodigoP'] ?></p>
                </div>

                <!-- Teléfono -->
                <div class="col-md-4">
                    <h5 class="footer-h5"><i class="fas fa-phone-alt"></i> Teléfono:</h5>
                    <p class="footer-content">+<?php echo $fot['Telefono'] ?></p>
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <hr class="full-width-line">
        &copy; 2023 - WebApplication1 - <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>
    </div>
</footer>

<script src="Recursos/lib/jquery/dist/jquery.js"></script>
<script src="Recursos/lib/jquery/dist/jquery.min.js"></script>
<script src="Recursos/lib/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="Recursos/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>

<script src="Recursos/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="Recursos/js/site.js" asp-append-version="true"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script type="module" src="Recursos/js/maps.js"></script>
<script src="Recursos/js/maps.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</body>

</html>