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
    case 'Contactos':
        include_once('Vistas/Usuarios/Admin/Contacto.php');
        break;
    case 'AddContactos':
        include_once('Vistas/Usuarios/Admin/FormFooter.php');
        break;
    case 'Herramienta':
        include_once('Vistas/Usuarios/Admin/EdicionHerramientas.php');
        break;
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
        if ((!empty($_SERVER['REQUEST_URI'])) && (isset($_SERVER['REQUEST_URI']))) {
            $ruta = $_SERVER['REQUEST_URI'];
            if (str_contains($ruta, '/Web-main/index.php?Login')) {
                // echo('<script>location.replace("Vistas/Template/login/login.php")</script>');
                include_once("Vistas/Template/login/login.php");
            } elseif (str_contains($ruta, '/Web-main/index.php?Login&error=')) {
                $error = $_GET['error'];
                echo '<script>alert("' . $ruta . '");</script>';
                include_once("Vistas/Template/login/login.php");
            } else {
                include_once('Vistas/Home/Home.php');
            }
        }
        break;
}

require_once("Vistas/Template/footer/footer.php");
