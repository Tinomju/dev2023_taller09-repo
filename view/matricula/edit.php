<?php
 include_once ($_SERVER['DOCUMENT_ROOT'].'/taller17/routes.php');
 require_once(CONTROLLER_PATH.'matriculaController.php');
 $object = new matriculaController();
 $idMatricula = $_GET['id'];
 $matriculas = $object->search($idMatricula);
 $estudiantes = $object->combolist(); 
 $cursos = $object->combolistC(); 
 $usuarios = $object->combolistU(); 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PHP</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <?php
        require_once(VIEW_PATH.'/navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Editando Registros</h2>
        </div>
        <form id="formMatricula" action="update.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="id" class="form-label">ID Mat.</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$matriculas[0]?>" type="text" class="form-control" id="id" name="id" readonly>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Fecha</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$matriculas[1]?>" type="date" class="form-control" id="fecha" name="fecha" autofocus required>
                 <div class="invalid-feedback">¡Ingrese una fecha válida!</div>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Id Estudiante</label>
                <select class="form-control" name="idEstudiante" id="idEstudiante" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($estudiantes as $estudiante) { 
                        if ($matriculas[2]==$estudiante['idEstudiante']) { ?>
                            <option selected="selected" value="<?=$estudiante['idEstudiante']?>"><?=$estudiante['nombre']?></option> 
                        <?php } else { ?>
                            <option value="<?=$estudiante['idEstudiante']?>"><?=$estudiante['nombre']?></option> 
                    <?php } 
                        }?>
                </select>
                <div class="invalid-feedback">¡Seleccione un elemento válido!</div>      
            </div>
            <div class="mb-3">
                <label for="idCurso" class="form-label">Código Curso</label>
                <select class="form-control" name="idCurso" id="idCurso" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($cursos as $curso) { 
                        if ($matriculas[3]==$curso['idCurso']) { ?>
                            <option selected="selected" value="<?=$curso['idCiudad']?>"><?=$curso['nombre']?></option> 
                        <?php } else { ?>
                            <option value="<?=$curso['idCurso']?>"><?=$curso['nombre']?></option> 
                    <?php } 
                        }?>
                </select>
                <div class="invalid-feedback">¡Seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="idUsuario" class="form-label">Código Usuario</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($usuarios as $usuario) { 
                        if ($matriculas[3]==$usuario['idCurso']) { ?>
                            <option selected="selected" value="<?=$usuario['idUsuario']?>"><?=$usuario['alias']?></option> 
                        <?php } else { ?>
                            <option value="<?=$usuario['idUsuario']?>"><?=$usuario['alias']?></option> 
                    <?php } 
                        }?>
                </select>
                <div class="invalid-feedback">¡Seleccione un elemento válido!</div>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
    </div>
    
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>
</html>