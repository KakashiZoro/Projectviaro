<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    try {
        require_once('conexion.php');
        $sql = "select * from alumno where `id` = {$id}";
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
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/editstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    
</head>
<body>
   
    <h1>Editar Alumno</h1>

        <form action="actualizado.php" method="get">
            <div class="content">
                <div class="form-group">
                <?php while($registro = $resultado->fetch_assoc() ) {?>
                    <div class="form-group">
                    <label for="nombre">Ingresa tu nombre 
                        <input type="text" name="nombre" id="nombre" value="<?php echo $registro ['nombre'];?>">
                    </label>

                    <div class="form-group">
                    <label for="apellido">Ingresa tu apellido 
                        <input type="text" name="apellido" id="apellido" value="<?php echo $registro ['apellido'];?>">
                    </label>
                    
                    <div class="form-group">
                    <label for="genero">Ingresa tu genero&nbsp
                        <input type="radio" name="genero" id="genero" value="masculino"> Masculino &nbsp
                        <input type="radio" name="genero" id="genero" value="Femenino"> Femenino
                    </label>
                    
                    <div class="form-group">
                    <label for="fecha">Ingresa tu fecha de naciemiento
                        <input type="date" name="fecha" id="fecha">
                    </label>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
                    <br>
                    <input type="submit" value="Modificar" class="btn btn-primary but">
                <?php } ?>
            </div>
        </form>

            
    <?php
        $conn->close; 
    ?>
</body>
</html>