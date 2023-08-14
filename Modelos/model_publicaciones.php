<?php

require_once('Recursos/config/db.php');
require_once('Controladores/controller_publicaciones.php');

$publicacion = new Publicacion ();
$publicacion->setTable("publicaciones");
$publicacion->setView('view_publicaciones');

$publicacion->setKey('IdPublic');

$publicacion->setColumns('Seccion');
$publicacion->setColumns('Principal');
$publicacion->setColumns('Secundario');
$publicacion->setColumns('IdArchivo');

$fch_r = date('Y-m-d');     //OBTIENE LA FECHA ACTUAL

if ((!empty($_GET['Id'])) && (isset($_GET['Id'])))  {
    $Id = $_GET['Id'];
    $dtpubwhere = $publicacion->getWhere($Id);
}else{
    $Id = null;
    $dtpubwhere = null;
}

$dtpub = $publicacion->getView();

$dtpubSeccion = $publicacion->getViewSeccion("ImagenesCarrusel");

if ((!empty($_POST['Seccion'])) && (isset($_POST['Seccion'])))  {
    $Seccion = $_POST['Seccion'];
    $dtSecpub = $publicacion->getWhereSeccion($Seccion);
}else{
    $Seccion = null;
}

if((!empty($_GET["form"])) && (isset($_GET["form"]))){
    $form = $_GET["form"];
}else{
    $form = null;
}

// DEFINE LA ACCION A REALIZAR: INSERT, UPDATE Y DELETE
if((!empty($_GET['actionpub'])) && (isset($_GET['actionpub']))) {
    $action = $_GET['actionpub'];
    if($action === 'insert') {
        // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
        if($arch == 0)  {
            header('Location: index.php?page=Edicion&form='. $Seccion .'&Id= '. $Id .'');
        }else{
            $publicacion->values[] = "'".$_POST['Seccion']."'";
            $publicacion->values[] = "'".$_POST['Principal']."'";
            $publicacion->values[] = "'".$_POST['Secundario']."'";
            $publicacion->values[] = $idfile;

            $publicacion->insertPub();

            echo '<script>location.replace("index.php?page=Publicaciones&ins=Ok");</script>';
        }
    }else if($action === 'update'){
        
        foreach($dtpubwhere as $rowid):
            $Idarchivo = $rowid['IdArchivo'];
        endforeach;

        $archivoname = $_FILES['Archivo']['name'];
        $archivotype = $_FILES['Archivo']['type'];
        $archivosize = $_FILES['Archivo']['size'];
        $archivofile = $_FILES['Archivo']['tmp_name'];
        
        if((!empty($archivofile)) && (isset($archivofile))){

            $upload = new ArchivosModel();
            $arch = $upload->uploadFile($archivoname,$archivotype,$archivosize,$archivofile);

            // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
            if($arch == 0)  {
                header('Location: index.php?page=Edicion&form='. $form .'');
            }else{

                //  MOVEMOS EL ARCHIVO A UNA RUTA DEL SERVIDOR LOCAL DE MANERA TEMPORAL

                $dir_file = $dir_doc . basename($archivoname);   //  ATRAPA EL ARCHIVO
                $typefile = strtolower(pathinfo($dir_file,PATHINFO_EXTENSION)); //  OBTIENE LA INFORMACION DEL ARCHIVO COMO: RUTA, NOMBRE Y EXTENSION

                $rtfile = $dir_doc . "Archivo_" . $archivoname . $typefile; 
                move_uploaded_file($archivofile,$rtfile);

                $gestor = fopen($rtfile, "r");
                $filesize = filesize($rtfile);
                $content = fread($gestor, $filesize);
                $dtfile = addslashes($content);
                fclose($gestor);

                $filetype = mime_content_type($rtfile);

                // INSERTAMOS EL ARCHIVO EN LA BASE DE DATOS 
                $archivo->updateArchivo($Idarchivo,$dtfile,$filetype,$archivoname);

                // BORRA LOS ARCHIVOS QUE SE GUARDARON TEMPORALMENTE EN EL SERVIDOR
                unlink($rtfile);

                echo '<script>location.replace("index.php?page=Publicaciones&upd=Ok");</script>';
            }
        }

        $publicacion->values[] = "'".$_POST['Seccion']."'";
        $publicacion->values[] = "'".$_POST['Principal']."'";
        $publicacion->values[] = "'".$_POST['Secundario']."'";
        $publicacion->values[] = $Idarchivo;
        $publicacion->updatePub($Id);

    }else if($action === 'delete')   {
        foreach($dtpubwhere as $row):
            $Idarchdel = $row['IdArchivo'];
        endforeach;

        $publicacion->deletePub($Id);
        $archivo->deleteArchivo($Idarchdel);

        echo '<script>location.replace("index.php?page=Publicaciones&del=Ok");</script>';

    } 
}


?>