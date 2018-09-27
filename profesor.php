<?php
    try {
        require_once('conexion.php');
        $sql = 'select * from profesor';
        $resultado = $conn->query($sql);
    } catch (exception $e) {
        $error = $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Colegio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/profesor.css">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
</head>

<body>

    <div class="container" >
    <h1>Formulario Profesor</h1>
    <hr/>
  
    <form class="form-group" method="post">
  

                <div class="campo">
                    <label for="nombre">Ingrese su Nombre
                        <input type="text" name="nombre" id="nombre" placeholder="nombre" required>
                    </label>
                </div>

                <div class="campo">
                    <label for="apellido">Ingrese su apellido
                        <input type="text" name="apellido" id="apellido" placeholder="apellido" required>
                    </label>
                </div>

                 <label> Seleccione su genero
                <input type="radio" name="rname" value="masc" required>Masculino</label> 
            <label> <input type="radio" name="rname" value="feme" required>Femenino</label> 
            <br>
           
            <br>
            <input type="submit" class="btn btn-primary button" value="Enviar datos">
        </form>
    </div>       
            <br><br><hr>
        <div class="contact">
            <h3>Profesores Existentes</h3>
        </div> 
            <p>
                Numero de profesores: <?php echo $resultado->num_rows; ?>
            </p>

            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>Apellido</th>
                        <th>Genero</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while($registros = $resultado->fetch_assoc() ) {  ?>
                     <tr>   
                         <td><?php echo $registros['nombre']; ?> </td>
                         <td><?php echo $registros['apellido'] ?> </td>
                         <td><?php echo $registros['genero'] ?> </td>
                    </tr>
                  
                    <?php }?>
                   
                </tbody>
            </table>
    <?php
        $conn->close();
    ?>
</body>
</html>