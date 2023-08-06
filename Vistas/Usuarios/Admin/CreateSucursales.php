﻿<div class="container shadow p-5 justify-content-center bg-dark-subtle">
    <form asp-controller="Sesion" asp-action="CreateUbicaciones">
        <h2 class="h1-responsive font-weight-bold text-center mb-5">Sucursales</h2>
        <div class="container rounded pt-3 pb-3 bg-white">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><label for="Longitud"></label></div>
                    </div>
                    <input id="Longitud" name="Longitud" placeholder="Longitud" type="text" aria-describedby="LongHelpBlock" required="required" class="form-control me-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><label for="Latitud"></label></div>
                    </div>
                    <input id="Latitud" name="Latitud" placeholder="Latitud" type="text" class="form-control">
                </div>
                <span for="Longitud" class="text-danger"></span>
                <span for="Latitud" class="text-danger"></span>
            </div>
            <div class="form-group form-floating mb-3 mt-2">
                <input id="Sucursal" name="Sucursal" placeholder="Nombre de la localización" type="text" class="form-control" required>
                <label for="Sucursal"></label>
                <span for="Sucursal" class="text-danger"></span>
            </div>

            <div class="form form-group form-floating mb-2 mt-1">
                <textarea asp-for="Direccion" placeholder="Direccion de la sucursal" cols="40" rows="5" class="form-control" type="text" required></textarea>
                <label asp-for="Direccion"></label>
                <span asp-validation-for="Direccion" class="text-danger"></span>
            </div>

            <div class="form-group p-0 mt-2 ms-auto me-auto">
                <button name="submit" type="submit" class="btn btn-primary">Guardar Dirección</button>
            </div>
        </div>
    </form>
</div>