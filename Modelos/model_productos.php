<?php

require_once('Recursos/config/db.php');
require_once('Controladores/controller_productos.php');

class ProductosModel extends Productos
{

    private $conArc;
    public  $lastidupd;
    public  $fidUpd;

    public function __construct()
    {
        $conArc = new Archivos();
        $this->lstid = $conArc->lastId();
    }

    public function uploadFile($fname, $ftype, $fsize, $file)
    {
        // SUBIR ARCHIVOS
        $dir_doc = "Recursos/Archivos/";
        $uploadOk = 1;

        $dir_file = $dir_doc . basename($fname);   //  ATRAPA EL ARCHIVO
        $typefile = strtolower(pathinfo($dir_file, PATHINFO_EXTENSION)); //  OBTIENE LA INFORMACION DEL ARCHIVO COMO: RUTA, NOMBRE Y EXTENSION

        //  VERIFICA EL TAMAÑO DEL ARCHIVO
        if ($fsize > 5000000) {
            $uploadOk = 0;
        }

        //  MUEVE EL ARCHIVO AL SERVIDOR SOLO CUANDO TODOS LOS FILTROS ANTERIORES SEAN CORRECTOS
        if ($uploadOk == 0) {
            // $errorfile = 'Error en el tipo de archivo, deben ser "PNG, JPG ó JPEG"';
            $errorfile = 0;
            return $errorfile;
        } else {

            // $fch_r = date('Y-m-d');     //OBTIENE LA FECHA ACTUAL

            $gestor     =   fopen($file, "r");
            $content    = fread($gestor, $fsize);
            $dtarchivo  = addslashes($content);
            fclose($gestor);

            return $dtarchivo;
        }
    }

    public function comprobarType($type)
    {
        if ($type == 'image/jpg') {
            $typeresult = ".jpg";
            return $typeresult;
        } else {
            $typeresult = ".jpeg";
            return $typeresult;
        }
    }
}

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

if ((!empty($_POST['Marca'])) && (isset($_POST['Marca'])))  {
    $Marca = $_POST['Marca'];
    $dtmarcawhere = $producto->getWhereMarca($Marca);
}else{
    $dtmarcawhere = null;
}

if ((!empty($_GET['Marca'])) && (isset($_GET['Marca']))) {
    $Marca = $_GET['Marca'];
    $dtmarcawhere = $producto->getWhereMarca($Marca);
} else {
    $dtmarcawhere = null;
}

// DEFINE LA ACCION A REALIZAR: INSERT, UPDATE Y DELETE
if((!empty($_GET['actionprod'])) && (isset($_GET['actionprod']))) {
    $action = $_GET['actionprod'];
    if($action === 'insert') {
        // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
        //VERIFICA QUE $_FILES NO ESTE VACIO Y QUE SI CONTENGA ALGUN OBJETO
        if (!empty($_FILES['Archivo'])) {

            $archivoname = $_FILES['Archivo']['name'];
            $archivotype = $_FILES['Archivo']['type'];
            $archivosize = $_FILES['Archivo']['size'];
            $archivofile = $_FILES['Archivo']['tmp_name'];

            $upload = new ProductosModel();
            $arch = $upload->uploadFile($archivoname, $archivotype, $archivosize, $archivofile);

            // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
            if ($arch == 0) {
                header('Location: index.php?page=Catalogos&form=' . $form . '');
            } else {

                //  MOVEMOS EL ARCHIVO A UNA RUTA DEL SERVIDOR LOCAL DE MANERA TEMPORAL

                $dir_file = $dir_doc . basename($archivoname);   //  ATRAPA EL ARCHIVO
                $typefile = strtolower(pathinfo($dir_file, PATHINFO_EXTENSION)); //  OBTIENE LA INFORMACION DEL ARCHIVO COMO: RUTA, NOMBRE Y EXTENSION

                $rtfile = $dir_doc . "Archivo_" . $archivoname . $typefile;
                move_uploaded_file($archivofile, $rtfile);

                $gestor = fopen($rtfile, "r");
                $filesize = filesize($rtfile);
                $content = fread($gestor, $filesize);
                $dtfile = addslashes($content);
                fclose($gestor);

                $filetype = mime_content_type($rtfile);

                // INSERTAMOS LA MARCA EN LA BASE DE DATOS 

                $descrip = "". $_POST['Descripcion'] ."";
                $idmar = "". $_POST['IdMarca'] ."";

                $producto->insertProducto($descrip, $dtfile, $filetype,$idmar);

                // BORRA LOS ARCHIVOS QUE SE GUARDARON TEMPORALMENTE EN EL SERVIDOR
                unlink($rtfile);

                echo '<script>location.replace("index.php?page=Productos&ins=Ok");</script>';
            }
        } else {
            header('Location: index.php?pageEdicion&Id=' . $Id . '');
        }
    }else if($action === 'update'){
        
        //VERIFICA QUE $_FILES NO ESTE VACIO Y QUE SI CONTENGA ALGUN OBJETO
        if (!empty($_FILES['Archivo'])) {

            $archivoname = $_FILES['Archivo']['name'];
            $archivotype = $_FILES['Archivo']['type'];
            $archivosize = $_FILES['Archivo']['size'];
            $archivofile = $_FILES['Archivo']['tmp_name'];

            $upload = new ProductosModel();
            $arch = $upload->uploadFile($archivoname, $archivotype, $archivosize, $archivofile);

            // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
            if ($arch == 0) {
                header('Location: index.php?page=Catalogos&form=' . $form . '');
            } else {

                //  MOVEMOS EL ARCHIVO A UNA RUTA DEL SERVIDOR LOCAL DE MANERA TEMPORAL

                $dir_file = $dir_doc . basename($archivoname);   //  ATRAPA EL ARCHIVO
                $typefile = strtolower(pathinfo($dir_file, PATHINFO_EXTENSION)); //  OBTIENE LA INFORMACION DEL ARCHIVO COMO: RUTA, NOMBRE Y EXTENSION

                $rtfile = $dir_doc . "Archivo_" . $archivoname . $typefile;
                move_uploaded_file($archivofile, $rtfile);

                $gestor = fopen($rtfile, "r");
                $filesize = filesize($rtfile);
                $content = fread($gestor, $filesize);
                $dtfile = addslashes($content);
                fclose($gestor);

                $filetype = mime_content_type($rtfile);

                // INSERTAMOS LA MARCA EN LA BASE DE DATOS 

                $descrip = "". $_POST['Descripcion'] ."";
                $idmar = "". $_POST['IdMarca'] ."";

                $producto->updateProducto($Id,$descrip, $dtfile, $filetype,$idmar);

                // BORRA LOS ARCHIVOS QUE SE GUARDARON TEMPORALMENTE EN EL SERVIDOR
                unlink($rtfile);

                echo '<script>location.replace("index.php?page=Productos&upd=Ok");</script>';
            }
        } else {
            header('Location: index.php?pageEdicion&Id=' . $Id . '');
        }

    }else if($action === 'delete')   {
        $producto->deleteProducto($Id);
        echo '<script>location.replace("index.php?page=Productos&del=Ok");</script>';
    } 
}
