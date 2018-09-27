<?php
    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    }
    if(isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
    }
    if(isset($_GET['apellido'])) {
        $apellido = $_GET['apellido'];
    }
    if(isset($_GET['genero'])) {
        $genero = $_GET['genero'];
    }
    if(isset($_GET['fecha'])) {
        $fecha = $_GET['fecha'];
    }

    try {
        require_once('conexion.php');
        $sql = "update `alumno` set ";
        $sql .= "`nombre` = '{$nombre}',";
        $sql .= "`apellido` = '{$apellido}',";
        $sql .= "`genero` = '{$genero}',";
        $sql .= "`fecha_nacimiento` = '{$fecha}' ";
        $sql .= "where `id` = {$id} ";
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
    <title>Actualizado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <h1>Alumno</h1>
        <?php
            if($resultado){
                echo "alumno actualizado";
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