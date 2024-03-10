<?php 
    include('conexion.php');

    // DEPARTAMENTOS
    try {
        $query = "SELECT * FROM departamento";
    
        $statement = $conn->prepare($query);
        $statement->execute();
    
        $departamentos = array();
    
        while($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
            $departamentos[] = $fila;
        }
        echo "<br> DEPARTAMENTOS <br>";
        foreach ($departamentos as $departamento) {
            echo "ID_DEP: " . $departamento['ID_DEP'] . ", NOMBRE_DEP: " . $departamento['NOMBRE_DEP'] . "<br>";
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // CRRERAS
    try {
        $query = "SELECT * FROM carrera";
    
        $statement = $conn->prepare($query);
        $statement->execute();
    
        $carreras = array();
    
        while($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
            $carreras[] = $fila;
        }
        echo "<br> CARRERAS <br>";
        foreach ($carreras as $carrera) {
            echo "ID_CARRERA: " . $carrera['ID_CARRERA'] . ", ID_DEP: " . $carrera['ID_DEP'] . ", NOMBRE_CARRERA: " . $carrera['NOMBRE_CARRERA'] . "<br>";
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Franjas Horarias
    try {
        $query = "SELECT * FROM franja_horaria";
    
        $statement = $conn->prepare($query);
        $statement->execute();
    
        $franjasHorarias = array();
    
        while($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
            $franjasHorarias[] = $fila;
        }
        echo "<br> FRANJAS HORARIAS <br>";
        foreach ($franjasHorarias as $franja) {
            echo "ID_FRANJA: " . $franja['ID_FRANJA'] . ", ID_PERIODO: " . $franja['ID_PERIODO'] . ", HORA_INICIAL: " . $franja['HORA_INICIAL'] . ", HORA_FINAL: " . $franja['HORA_FINAL'] . ", DIA: " . $franja['DIA'] . "<br>";
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Laboratorios
    try {
        $query = "SELECT * FROM laboratorio";
    
        $statement = $conn->prepare($query);
        $statement->execute();
    
        $laboratorios = array();
    
        while($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
            $laboratorios[] = $fila;
        }
        echo "<br> LABORATORIOS <br>";
        foreach ($laboratorios as $laboratorio) {
            echo "ID_LAB: " . $laboratorio['ID_LAB'] . ", NOMBRE_LAB: " . $laboratorio['NOMBRE_LAB'] . "<br>";
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Materias
    try {
        $query = "SELECT * FROM materia";
    
        $statement = $conn->prepare($query);
        $statement->execute();
    
        $materias = array();
    
        while($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
            $materias[] = $fila;
        }
        echo "<br> MATERIAS <br>";
        foreach ($materias as $materia) {
            echo "ID_MATERIA: " . $materia['ID_MATERIA'] . ", ID_FRANJA: " . $materia['ID_FRANJA'] . ", ID_LAB: " . $materia['ID_LAB'] . ", ID_CARRERA: " . $materia['ID_CARRERA'] . ", NOMBRE_MATERIA: " . $materia['NOMBRE_MATERIA'] . ", NRC: " . $materia['NRC'] . ", DOCENTE_ACARGO: " . $materia['DOCENTE_ACARGO'] . "<br>";
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Periodos
    try {
        $query = "SELECT * FROM periodo";
    
        $statement = $conn->prepare($query);
        $statement->execute();
    
        $periodos = array();
    
        while($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
            $periodos[] = $fila;
        }
        echo "<br> PERIODOS <br>";
        foreach ($periodos as $periodo) {
            echo "ID_PERIODO: " . $periodo['ID_PERIODO'] . ", NOMBRE_PERIODO: " . $periodo['NOMBRE_PERIODO'] . ", ESTADO_PERIODO: " . $periodo['ESTADO_PERIODO'] . "<br>";
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Perfiles
    try {
        $query = "SELECT * FROM perfil";
    
        $statement = $conn->prepare($query);
        $statement->execute();
    
        $perfiles = array();
    
        while($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
            $perfiles[] = $fila;
        }
        echo "<br> PERFILES <br>";
        foreach ($perfiles as $perfil) {
            echo "ID: " . $perfil['id'] .", Nombre: " . $perfil['nombre'] . ", USUARIO: " . $perfil['usuario'] . ", PASSWORD: " . $perfil['password'] . ", ROL: " . $perfil['rol'] . ", CORREO: " . $perfil['correo'] . ", CEDULA: " . $perfil['cedula'] . "<br>";
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


    
?>