<?php

require_once("Recursos/config/db.php");
require_once("Controladores/controller_herramientas.php");

$herramienta = new Herramientas();
$herramienta->setTable("TipoHerramientas");
$herramienta->setView('');

$herramienta->setKey('IdHerramienta');

$herramienta->setColumns('TipoHerramienta');

if ((!empty($_GET['IdH'])) && (isset($_GET['IdH']))) {
    $IdH = $_GET['IdH'];
    $dtherramientawhere = $herramienta->getWhere($IdH);
} else {
    $IdH = null;
    $dtherramientawhere = null;
}
$dtherramienta = $herramienta->getAll();

// DEFINE LA ACCION A REALIZAR: INSERT, UPDATE Y DELETE
if ((!empty($_GET['actionher'])) && (isset($_GET['actionher']))) {
    $action = $_GET['actionher'];

    if ($action === 'insert') {

        // INSERTAMOS LA MARCA EN LA BASE DE DATOS 

        $herr = "" . $_POST['Herramienta'] . "";

        $herramienta->insertHerramienta($herr);

        echo '<script>location.replace("index.php?paga=Herramientas&ins=Ok");</script>';
    } elseif ($action === 'update') {

        // INSERTAMOS LA MARCA EN LA BASE DE DATOS 

        $herr = "" . $_POST['Herramienta'] . "";

        $herramienta->updateHerramienta($IdH, $herr);

        echo '<script>location.replace("index.php?page=Herramientas&upd=Ok");</script>';
    } elseif ($action === 'delete') {
        $herramienta->deleteHerramienta($IdH);
        echo '<script>location.replace("index.php?page=Herramientas&del=Ok");</script>';
    }
}
