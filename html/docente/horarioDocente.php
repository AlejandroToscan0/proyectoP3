<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Seleccionar la materia que quire dar</h1>
<?php 
    include('../../php/horarioDocenteConn.php');    
?>
<form action="../../php/horarioDocenteConn.php" method="post">
    <select id="materiaSelected" name="materiaSelected">
        <option value="">Seleccione una materia</option>
        <?php foreach ($materias as $materia) : ?>
            <option value="<?php echo $materia['ID_MATERIA']; ?>" <?php if ($materia['ID_MATERIA'] == $materiaSeleccionada) echo 'selected="selected"'; ?>>
                <?php echo $materia['NOMBRE_MATERIA']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <div >
        <div class="form-actions">
            <button type="submit" value="Registrar Horario">
                Ingresar
            </button>
        </div>
    </div>
</form>

</body>
</html>