
<?php

    include("conex.php");
    error_reporting(0);
    $tablaConsulta=$_POST['tablaConsulta']; 
    $con=conectarsebd();

    $sql="select * from $tablaConsulta";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Tipo de documento</th>
                                        <th>Numero de documento</th>
                                        <th>Correo</th>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Celular</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['Nombres']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>
                                                <th><?php  echo $row['Tipo_documento']?></th> 
                                                <th><?php  echo $row['Numero_documento']?></th> 
                                                <th><?php  echo $row['Correo']?></th>  
                                                <th><?php  echo $row['Edad']?></th>    
                                                <th><?php  echo $row['Sexo']?></th> 
                                                <th><?php  echo $row['Celular']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['Numero_documento'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php id=<?php echo $row['Numero_documento'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <div class="buttun-close">
            <button><a href="../sistema/admin.php">Close</a></button>
            </div>
    </body>
</html>

