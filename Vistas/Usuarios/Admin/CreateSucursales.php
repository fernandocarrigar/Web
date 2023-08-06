<div class="container shadow p-5 bg-dark-subtle">
    <form asp-controller="Sesion" asp-action="CreateUbicaciones">
        <h2 class="h1-responsive font-weight-bold text-center mb-5">Sucursales</h2>

        <!-- Espacio simétrico con padding -->
        <div class="container rounded p-4 bg-white">

            <!-- Campos de Longitud y Latitud -->
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input id="Longitud" name="Longitud" placeholder="Longitud" type="text" aria-describedby="LongHelpBlock" required="required" class="form-control">
                        <label for="Longitud">Longitud</label>
                        <span for="Longitud" class="text-danger"></span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input id="Latitud" name="Latitud" placeholder="Latitud" type="text" class="form-control">
                        <label for="Latitud">Latitud</label>
                        <span for="Latitud" class="text-danger"></span>
                    </div>
                </div>
            </div>

            <!-- Campo del nombre de la sucursal -->
            <div class="form-floating mb-3">
                <input id="Sucursal" name="Sucursal" placeholder="Nombre de la localización" type="text" class="form-control" required>
                <label for="Sucursal">Nombre de la localización</label>
                <span for="Sucursal" class="text-danger"></span>
            </div>

            <!-- Campo de la dirección -->
            <div class="form-floating mb-3">
                <textarea asp-for="Direccion" placeholder="Direccion de la sucursal" cols="40" rows="5" class="form-control" type="text" required></textarea>
                <label asp-for="Direccion">Direccion de la sucursal</label>
                <span asp-validation-for="Direccion" class="text-danger"></span>
            </div>

            <!-- Botón para enviar el formulario -->
            <div class="d-flex justify-content-center">
                <button name="submit" type="submit" class="btn btn-primary">Guardar Dirección</button>
            </div>
        </div>
    </form>
</div>