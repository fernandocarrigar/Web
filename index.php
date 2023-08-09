<?php

include_once("Modelos/model_archivos.php");

require_once("Controladores/controller_login.php");
session_start();

$usuarioController = new UsuarioController();

if ((!empty($_GET['page']))  ||  (isset($_GET['page']))) {
    $page = $_GET['page'];
} else {
    $page = "";
}

require_once("Vistas/Template/nav-bar/nav-bar.php");

switch ($page) {
    case 'EdicionCatalogos':
        include_once("Vistas/Usuarios/Admin/EdicionCatalogos.php");
        break;
    case 'Marcas':
        include_once("Vistas/Usuarios/Admin/Marcas.php");
        break;
    case 'Nosotros':
        include_once("Vistas/Usuarios/Admin/Nosotros.php");
        break;
    case 'Publicaciones':
        include_once("Vistas/Usuarios/Admin/Publicaciones.php");
        break;
    case 'Edicion':
        include_once('Vistas/Usuarios/Admin/Edicion.php');
        break;
    case 'Sucursales';
        include_once("Vistas/Usuarios/Admin/Sucursales.php");
        break;
    case 'Productos':
        include_once("Vistas/Usuarios/Admin/Productos.php");
        break;
    case 'CreateSucursales':
        include_once("Vistas/Usuarios/Admin/CreateSucursales.php");
        break;
    default:
        include_once('Vistas/Home/Home.php');
        break;
}

require_once("Vistas/Template/footer/footer.php");
