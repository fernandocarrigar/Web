<?php
if((!empty($_GET['page']))  ||  (isset($_GET['page']))) {
    $page = $_GET['page'];
}else{
    $page = "";
}

require_once("Vistas/Template/nav-bar/nav-bar.php");

switch ($page) {
    case 'Edicion':
        include_once('Vistas/Usuarios/Admin/Edicion.php');
        break;
    case 'Sucursales';
        include_once("Vistas/Usuarios/Admin/Sucursales.php");
        break;
    case 'Catalogos':
        include_once("Vistas/Usuarios/Admin/Catalogos.php");
        break;
    default:
        include_once('Vistas/Usuarios/Admin/Edicion.php');
        break;

}

require_once("Vistas/Template/footer/footer.php");

?>