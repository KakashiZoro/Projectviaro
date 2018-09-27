<?php
    try {
        require_once('conexion.php');
        $sql = 'select * from grado';
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
   
    <title>Formulario de grado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/gradestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <h1>Formulario de Grado</h1>
        <hr>
        <form>
            <div class="form-group">
                <label>Ingrese nombre del grado <input name="grado" type="text" placeholder="grado" required></label>
            </div>
        
                <input type="submit" class="btn btn-primary" value="Enviar datos">
        </form>
    </div>
    <br>
    <table class="table table-striped table-hover tb">

        <thead>
            <tr>
                <th>nombre</th>
                <th>id del profesor</th>
            </tr>
        </thead>

        <tbody>
            <?php while($registros = $resultado->fetch_assoc() ) {  ?>
            <tr>   
                <td><?php echo $registros['nombre']; ?> </td>
                <td><?php echo $registros['profesor_id']; ?> </td>
            </tr>
        
            <?php }?>
        
        </tbody>
    </table>
    
    
</body>
</html>