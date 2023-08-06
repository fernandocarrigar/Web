﻿<div class="container shadow p-5 justify-content-center bg-dark-subtle">
    <h3 class="text-black text-center mb-4">Ubicaciones de las Sucursales</h3>

    <div class="container-fluid d-inline-flex">
        <div class="justify-content-center d-block bg-white p-2 rounded col-6 shadow-lg">
            <div id="map" class="rounded"></div>
        </div>
        <div class="container d-flex col-5 rounded-3 p-0 bg-white rounded shadow-lg" style="max-height:520px;">
            <div class="overflow-y-auto table-scroll">
                <ul class="nav flex-column justify-content-start">
                    @* @foreach (var ubicacion in Model)
                    {
                    <li class="nav-item"><button onclick="myLocation(@Html.DisplayFor(Longitud),Latitud)" class="btn btn-primary">@Html.DisplayFor(Sucursal)</button></li>
                    }*@
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.972212364834565,-92.94093984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0 btn-size overflow-auto">
                            <p class="text-start fs-6 fw-bold m-0">PRUEBA</p>
                            <p class="text-start">Direccion calle belisario dominguez </p>
                        </button></li>
                    <li class="nav-item mb-2"><button type="button" onclick="myLocation(17.902312464834565,-92.95070984050025,'Intelisof','Direccion')" class="btn btn-outline-dark btn-sm m-0">
                            <p class="text-start fs-6 fw-bold m-0">Intelisof</p>
                            <p class="text-start">Direccion calle belisario dominguez 120AiWEFIWEUBFIEAWUBFAWEUBFIWEB FIWEBFIUABWEIFUBWEAIwefwef</p>
                        </button></li>
                </ul>
            </div>
        </div>
    </div>
</div>