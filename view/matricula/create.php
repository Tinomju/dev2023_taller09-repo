<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/taller17/routes.php');
   
    require_once(CONTROLLER_PATH.'matriculaController.php');
    $object = new matriculaController();
    $idestudiante = $object->combolist();
    $idcurso = $object->combolistC();
    $idusuario = $object->combolistU();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Matriculas</title>
</head>
<body>
    <?php
        require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Agregando nuevo registro</h2>
        </div>
        <form id="formMatricula" action="store.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="date" class="form-control" id="fecha" name="fecha" autofocus required>
                 <div class="invalid-feedback">¡Ingrese o seleccione una fecha válida!</div>
            </div>
            <div class="mb-3">
                <label for="idEstudiante" class="form-label">Código estudiante</label>
                <select class="form-control" name="idEstudiante" id="idEstudiante" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($idestudiante as $estudiante) { ?>
                       <option value="<?=$estudiante['idEstudiante']?>"><?=$estudiante['idEstudiante']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">¡Seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="idCurso" class="form-label">Código curso</label>
                <select class="form-control" name="idCurso" id="idCurso" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($idcurso as $curso) { ?>
                       <option value="<?=$curso['idCurso']?>"><?=$curso['nombre']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="idUsuario" class="form-label">Código curso</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option selected disabled value="1">Admin</option>
                    <?php foreach ($idusuario as $usuario) { ?>
                       <option value="<?=$usuario['idUsuario']?>"><?=$usuario['alias']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">¡Seleccione un elemento válido!</div>
            </div>                        
            <button type="submit" class="btn btn-primary btn-lg col-4">Guardar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>

</html>