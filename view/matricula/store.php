<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/taller17/routes.php');
    require_once(CONTROLLER_PATH.'matriculaController.php');
    $object = new matriculaController();

    $fecha = $_REQUEST['fecha'];
    $codest = $_REQUEST['idEstudiante'];
    $idcurso = $_REQUEST['idCurso'];
    $idus = $_REQUEST['idUsuario'];

    $registro = $object->insert($fecha,$codest,$idcurso,$idus);
    
?>