<?php

require_once('Recursos/config/db.php');
require_once('Controladores/controller_sucursales.php');

$sucursales = new Sucursales ();
$sucursales->setTable("publicaciones");
$sucursales->setView('');

$sucursales->setKey('IdPublic');

$sucursales->setColumns('Seccion');
$sucursales->setColumns('Principal');
$sucursales->setColumns('Secundario');
$sucursales->setColumns('IdArchivo');

if ((!empty($_GET['id'])) && (isset($_GET['Id'])))  {
    $Id = $_GET['id'];
}else{
    $id = "";
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
if((!empty($_GET['action'])) && (isset($_GET['action']))) {
    $action = $_GET['action'];
    if($action === 'insert') {
        // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
        if($arch == 0)  {
            header('Location: index.php?page=Edicion&insertado=no');
        }else{
            $sucursales->values[] = "'".$_POST['Seccion']."'";
            $sucursales->values[] = "'".$_POST['Principal']."'";
            $sucursales->values[] = "'".$_POST['Secundario']."'";
            $sucursales->values[] = $idfile;

            $sucursales->insertPub();

        }
    }elseif($action === 'update'){
        if(($curp == 0) || ($foto == 0) || ($compbnt == 0) || ($certif == 0))  {
            header('Location: index.php?page=form-files-alu&id='. $lstid .'');
        }else{
        $sucursales->values[] = "'". $fch_r ."'";
        $sucursales->values[] = $lstid;
        $sucursales->values[] = $idCurp;
        $sucursales->values[] = $idCompbnt;
        $sucursales->values[] = $idFoto;
        $sucursales->values[] = $idCertif;
        $sucursales->values[] = $idpdf;

        $sucursales->updatePub($id);

        header('Location: index.php?page=lst-alu');

        }
    }elseif($action === 'delete')   {
        foreach($dtkdx as $row):
            $id_alu = $row['Matricula'];
            $id_a1 = $row['id_archivo1'];
            $id_a2 = $row['id_archivo2'];
            $id_a3 = $row['id_archivo3'];
            $id_a4 = $row['id_archivo4'];
            $id_a5 = $row['id_archivo5'];
        endforeach;

        $sucursales->deletePub($id);
        $alumnos->deleteAlumno($id_alu);
        $archivo->deleteArchivo($id_a1);
        $archivo->deleteArchivo($id_a2);
        $archivo->deleteArchivo($id_a3);
        $archivo->deleteArchivo($id_a4);
        $archivo->deleteArchivo($id_a5);

        header('Location: index.php?page=lst-alu');
    } 
}


?>