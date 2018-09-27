<?php
    if(isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    }
    if(isset($_POST['apellido'])) {
        $apellido = $_POST['apellido'];
    }
    if(isset($_POST['genero'])) {
        $genero = $_POST['genero'];
    }
    if(isset($_POST['fecha'])) {
        $fecha = $_POST['fecha'];
    }

    try {
        require_once('conexion.php');
        $sql = "insert into `alumno` (`id`, `nombre`, `apellido`, `genero`, `fecha_nacimiento`) ";
        $sql .= "values (null, '{$nombre}', '{$apellido}', '{$genero}', '{$fecha}'); ";
        $resultado = $conn->query($sql);
    } catch (exception $e) {
        $error = $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno creado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <h1>Alumno</h1>
        <?php
            if($resultado){
                echo "alumno creado";
            } else {
                echo "Error" . $conn->error;
            }
        ?>
        <br>
        <a href="index.php">Volver al formulario</a>
    <?php
        $conn->close();
    ?>
</body>
</html>