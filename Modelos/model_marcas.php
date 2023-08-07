<?php

require_once("Recursos/config/db.php");
require_once("Controladores/controller_marcas.php");

class MarcasModel extends Marcas {

    private $conArc;
    public  $lastidupd;
    public  $fidUpd;

    public function __construct(){
        $conArc = new Archivos();
        $this->lstid = $conArc->lastId();
    }

    public function uploadFile($fname,$ftype,$fsize,$file) {
    // SUBIR ARCHIVOS
        $dir_doc = "Recursos/Archivos/";
        $uploadOk = 1;

        $dir_file = $dir_doc . basename($fname);   //  ATRAPA EL ARCHIVO
        $typefile = strtolower(pathinfo($dir_file,PATHINFO_EXTENSION)); //  OBTIENE LA INFORMACION DEL ARCHIVO COMO: RUTA, NOMBRE Y EXTENSION

        //  VERIFICA EL TAMAÑO DEL ARCHIVO
        if($fsize > 5000000) {
            $uploadOk = 0;
        }

        //  MUEVE EL ARCHIVO AL SERVIDOR SOLO CUANDO TODOS LOS FILTROS ANTERIORES SEAN CORRECTOS
        if ($uploadOk == 0) {
            // $errorfile = 'Error en el tipo de archivo, deben ser "PNG, JPG ó JPEG"';
            $errorfile = 0;
            return $errorfile;
        }else{

            // $fch_r = date('Y-m-d');     //OBTIENE LA FECHA ACTUAL
            
            $gestor     =   fopen($file, "r");
            $content    = fread($gestor, $fsize);
            $dtarchivo  = addslashes($content);
            fclose($gestor);

            return $dtarchivo;
        }
    }

    public function comprobarType($type) {
        if ($type == 'image/jpg') {
            $typeresult = ".jpg";
            return $typeresult;
        }else{
            $typeresult = ".jpeg";
            return $typeresult;
        }
    }
}

$marca = new Marcas ();
$marca->setTable("marcas");
$marca->setView('');

$marca->setKey('IdMarca');

$marca->setColumns('Nombre');
$marca->setColumns('Archivo');
$marca->setColumns('MimeType');

$dtarc = $marca->getAll();

if((!empty($_GET['Id'])) && (isset($_GET['Id']))) {
    $Id = $_GET['Id'];
    $dtmarcawhere = $marca->getWhere($Id);
}else{
    $Id = null;
    $dtmarca = $marca->getAll();
}

$dir_doc = "Recursos/Archivos/";

// DEFINE LA ACCION A REALIZAR: INSERT, UPDATE Y DELETE
if((!empty($_GET['actionmarc'])) && (isset($_GET['actionmarc']))) {
    $action = $_GET['actionmarc'];

    if($action === 'insert') {

        //VERIFICA QUE $_FILES NO ESTE VACIO Y QUE SI CONTENGA ALGUN OBJETO
        if(!empty($_FILES['Archivo']))  { 
            
            $archivoname = $_FILES['Archivo']['name'];
            $archivotype = $_FILES['Archivo']['type'];
            $archivosize = $_FILES['Archivo']['size'];
            $archivofile = $_FILES['Archivo']['tmp_name'];
            
            $upload = new ArchivosModel();
            $arch = $upload->uploadFile($archivoname,$archivotype,$archivosize,$archivofile);

            // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
            if($arch == 0)  {
                header('Location: index.php?page=Catalogos&form='. $form .'');
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
                $marca->insertMarca($dtfile,$filetype,$archivoname);
                $idfile = $marca->lastId();

                // BORRA LOS ARCHIVOS QUE SE GUARDARON TEMPORALMENTE EN EL SERVIDOR
                unlink($rtfile);
            }
        }else{
            header('Location: index.php?pageEdicion&Id='. $Id .'');
        }
    }
}

?>