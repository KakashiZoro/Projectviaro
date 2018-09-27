<?php
    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    }
    try {
        require_once('conexion.php');
        $sql = "delete from `alumno` where `id` = '{$id}'; ";
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
    <title>Borrado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <h1>Alumno</h1>
        <?php
            if($resultado){
                echo "alumno borrado";
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