<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/taller17/routes.php');
    require_once(CONTROLLER_PATH.'matriculaController.php');
    $object = new matriculaController();

    $idMatricula = $_REQUEST['id'];
    $object->delete($idMatricula);
    
?>