<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/taller18/routes.php');

    require_once(CONTROLLER_PATH.'estudianteController.php');
    $object = new estudianteController();

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $idCiudad = $_REQUEST['idCiudad'];
    
    $registro = $object->insert($nombre,$apellido,$idCiudad);

?>