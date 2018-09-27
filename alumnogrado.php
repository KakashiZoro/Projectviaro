<?php
    try {
        require_once('conexion.php');
        $sql = 'select * from alumnogrado';
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
   
    <title>Formulario de Alumno grado</title>
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
                <label>Ingrese nombre de la seccion <input name="seccion" type="text" placeholder="seccion" required></label>
            </div>
        
                <input type="submit" class="btn btn-primary" value="Enviar datos">
        </form>
    </div>
    <br>
    <table class="table table-striped table-hover tb">

        <thead>
            <tr>
                <th>Seccion</th>
            </tr>
        </thead>

        <tbody>
            <?php while($registros = $resultado->fetch_assoc() ) {  ?>
            <tr>   
                <td><?php echo $registros['seccion']; ?> </td>
            </tr>
        
            <?php }?>
        
        </tbody>
    </table>
    
    
</body>
</html>