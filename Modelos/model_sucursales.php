<?php

require_once('Recursos/config/db.php');
require_once('Controladores/controller_sucursales.php');

$sucursales = new Sucursales ();
$sucursales->setTable("sucursales");
$sucursales->setView('');

$sucursales->setKey('IdSucursal');

$sucursales->setColumns('Longitud');
$sucursales->setColumns('Latitud');
$sucursales->setColumns('Sucursal');
$sucursales->setColumns('Direccion');

if ((!empty($_GET['Id'])) && (isset($_GET['Id'])))  {
    $Id = $_GET['Id'];
}else{
    $Id = "";
    $dtsucur = $sucursales->getAll();
}

/* if ((!empty($_POST['Seccion'])) && (isset($_POST['Seccion'])))  {
    $Seccion = $_POST['Seccion'];
    $dtSecpub = $sucursales->getWhereSeccion($Seccion);
}else{
    $Seccion = "";
    $dtpub = $sucursales->getAll();
}

if((!empty($_GET["form"])) && (isset($_GET["form"]))){
    $form = $_GET["form"];
}else{
    $form = "";
} */

// DEFINE LA ACCION A REALIZAR: INSERT, UPDATE Y DELETE
if((!empty($_GET['actionsucur'])) && (isset($_GET['actionsucur']))) {
    $action = $_GET['actionsucur'];
    if($action === 'insert') {
        // INSERTAMOS LOS DATOS EN LA TABLA
            $sucursales->values[] = "'".$_POST['Longitud']."'";
            $sucursales->values[] = "'".$_POST['Latitud']."'";
            $sucursales->values[] = "'".$_POST['Sucursal']."'";
            $sucursales->values[] = "'".$_POST['Direccion']."'";

            $sucursales->insertSuc();

    }elseif($action === 'update'){

        $sucursales->values[] = "'".$_POST['Longitud']."'";
        $sucursales->values[] = "'".$_POST['Latitud']."'";
        $sucursales->values[] = "'".$_POST['Sucursal']."'";
        $sucursales->values[] = "'".$_POST['Direccion']."'";

        $sucursales->updateSuc($Id);

    }elseif($action === 'delete')   {

        $sucursales->deleteSuc($Id);

        header('Location: index.php?page=Sucursales');
    }
}


?>