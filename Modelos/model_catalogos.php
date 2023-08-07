<?php

require_once('Recursos/config/db.php');
require_once('Controladores/controller_catalogos.php');

$producto = new Productos ();
$producto->setTable("productos");
$producto->setView('view_productos');

$producto->setKey('IdProductos');

$producto->setColumns('Descripcion');
$producto->setColumns('Archivo');
$producto->setColumns('MimeType');
$producto->setColumns('IdMarca');

// $fch_r = date('Y-m-d');     //OBTIENE LA FECHA ACTUAL

if ((!empty($_GET['Id'])) && (isset($_GET['Id'])))  {
    $Id = $_GET['Id'];
    $dtprodwhere = $producto->getWhere($Id);
}else{
    $Id = null;
    $dtprodwhere = null;
}

$dtprod = $producto->getView();

if ((!empty($_POST['Seccion'])) && (isset($_POST['Seccion'])))  {
    $Seccion = $_POST['Seccion'];
    $dtSecpub = $producto->getWhereMarca($Seccion);
}else{
    $Seccion = null;
}

if((!empty($_GET["form"])) && (isset($_GET["form"]))){
    $form = $_GET["form"];
}else{
    $form = null;
}

// DEFINE LA ACCION A REALIZAR: INSERT, UPDATE Y DELETE
if((!empty($_GET['actionprod'])) && (isset($_GET['actionprod']))) {
    $action = $_GET['actionprod'];
    if($action === 'insert') {
        // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
        if($arch == 0)  {
            header('Location: index.php?page=Edicion&form='. $Seccion .'&Id= '. $Id .'');
        }else{
            $producto->values[] = "'".$_POST['Seccion']."'";
            $producto->values[] = "'".$_POST['Principal']."'";
            $producto->values[] = "'".$_POST['Secundario']."'";
            $producto->values[] = $idfile;

            $producto->insertProd();

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

            $upload = new MarcasModel();
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
                $marca->updateMarca($Idarchivo,$dtfile,$filetype,$archivoname);

                // BORRA LOS ARCHIVOS QUE SE GUARDARON TEMPORALMENTE EN EL SERVIDOR
                unlink($rtfile);
            }
        }

        $producto->values[] = "'".$_POST['Seccion']."'";
        $producto->values[] = "'".$_POST['Principal']."'";
        $producto->values[] = "'".$_POST['Secundario']."'";
        $producto->values[] = $Idarchivo;
        $producto->updateProd($Id);

    }else if($action === 'delete')   {
        foreach($dtpubwhere as $row):
            $Idarchdel = $row['IdArchivo'];
        endforeach;

        $producto->deleteProd($Id);
        $marca->deleteMarca($Idarchdel);

    } 
}


?>