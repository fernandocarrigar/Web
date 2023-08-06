<?php

require_once('Recursos/config/db.php');
require_once('Controladores/controller_publicaciones.php');

$publicacion = new Publicacion ();
$publicacion->setTable("publicaciones");
$publicacion->setView('');

$publicacion->setKey('IdPublic');

$publicacion->setColumns('Seccion');
$publicacion->setColumns('Principal');
$publicacion->setColumns('Secundario');
$publicacion->setColumns('IdArchivo');

$fch_r = date('Y-m-d');     //OBTIENE LA FECHA ACTUAL

if ((!empty($_GET['id'])) && (isset($_GET['Id'])))  {
    $Id = $_GET['id'];
    $dtpubwhere = $publicacion->getWhere($Id);
}else{
    $id = "";
    $dtpub = $publicacion->getAll();
}

if ((!empty($_POST['Seccion'])) && (isset($_POST['Seccion'])))  {
    $Seccion = $_POST['Seccion'];
    $dtSecpub = $publicacion->getWhereSeccion($Seccion);
}else{
    $Seccion = "";
    $dtpub = $publicacion->getAll();
}

if((!empty($_GET["form"])) && (isset($_GET["form"]))){
    $form = $_GET["form"];
}else{
    $form = "";
}

// DEFINE LA ACCION A REALIZAR: INSERT, UPDATE Y DELETE
if((!empty($_GET['action'])) && (isset($_GET['action']))) {
    $action = $_GET['action'];
    if($action === 'insert') {
        // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
        if($arch == 0)  {
            header('Location: index.php?page=Edicion&insertado=no');
        }else{
            $publicacion->values[] = "'".$_POST['Seccion']."'";
            $publicacion->values[] = "'".$_POST['Principal']."'";
            $publicacion->values[] = "'".$_POST['Secundario']."'";
            $publicacion->values[] = $idfile;

            $publicacion->insertPub();

        }
    }elseif($action === 'update'){
        if(($curp == 0) || ($foto == 0) || ($compbnt == 0) || ($certif == 0))  {
            header('Location: index.php?page=form-files-alu&id='. $lstid .'');
        }else{
        $publicacion->values[] = "'". $fch_r ."'";
        $publicacion->values[] = $lstid;
        $publicacion->values[] = $idCurp;
        $publicacion->values[] = $idCompbnt;
        $publicacion->values[] = $idFoto;
        $publicacion->values[] = $idCertif;
        $publicacion->values[] = $idpdf;

        $publicacion->updatePub($id);

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

        $publicacion->deletePub($id);
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