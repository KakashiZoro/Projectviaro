<?php
    try {
        require_once('conexion.php');
        $sql = 'select * from alumno';
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
    <title>formulario alumno</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/indexstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    
    
</head>
<body>
    <h1 class="formalumno">Formulario Alumno</h1>
    <hr>
        <form action="crear.php" method="post">
        <div class="contenido">
            <div class="form-group">
            <br>
                <label for="nombre">Ingresa tu nombre 
                <input type="text" name="nombre" id="nombre" placeholder="nombre" required>
                </label>
            </div>

            <div class="form-group">
                <label for="apellido">Ingresa tu apellido 
                <input type="text" name="apellido" id="apellido" placeholder="apellido" required>
                </label>
            </div>

            <div class="form-group"> 
                <label class="form-check-label" for="genero">Selecciona tu genero 
                <input type="radio" name="genero" id="genero" value="masculino" required> Masculino 
                <input type="radio" name="genero" id="genero" value="femenino" required> Femenino
                </label>
                </div>
            </div>
        </div>
            <div class="form-group date">
                <label for="fecha">Ingresa tu fecha de nacimiento
                <input type="date" name="fecha" id="fecha" required>
                </label>
            </div>
            <br>
            <div class="boton">
            <button type="submit" class="btn btn-primary boton">Agregar alumno</button>
            </div>
        </form>
        <hr>
            <h3>Alumnos Existentes</h3>
            <p>
                Numero de alumnos: <?php echo $resultado->num_rows; ?>
            </p>
            <br>
            <table class="table table-striped table-hover tabla">
                <thead>
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Genero</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Editar</th>
                        <th>Borrar</th>

                    </tr>
                </thead>

                <tbody>
                    <?php while($registros = $resultado->fetch_assoc() ) {  ?>
                    <tr> 
                         
                        <td><i class="fas fa-user-tie"></i>&nbsp<?php echo $registros['nombre']; ?> </td>
                        <td><?php echo $registros['apellido'] ?> </td>
                        <td><?php echo $registros['genero'] ?> </td>
                        <td><?php echo $registros['fecha_nacimiento'] ?> </td>
                        <td> <a href="editar.php?id=<?php echo $registros['id']; ?>" title="Editar" onclick="return confirm('desea editar este alumno? ')" class="btn btn-primary"><i class="fas fa-user-edit"></i></a></td>
                        <td><a href="borrar.php?id=<?php echo $registros['id']; ?>" title="Eliminar" onclick="return confirm('Esta seguro que desea borrar los datos de este alumno? ')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>
                        
                    </tr>
            
                    <?php }?>
                </tbody>
            </table>
    <?php
        $conn->close; 
    ?>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>