<?php

$nombre = $_POST['Nombre'];
$email = $_POST['Email'];
$motivo=$_POST['Motivo'];
   include("conex.php");
   
$link=conectarse(); #conexion a la base de datos

$var_consulta= "INSERT INTO solicitante VALUES ('$email','$nombre','$motivo')"; # aqui se define la sentencia esta es permite enviar datos
#$var_consulta= insert into pre_inscripcion values("juanito@gmail.com".,"juanito alimaña"."formar parte");
$link->query($var_consulta);#query es una operacion que se hace en la base de datos y se guarda en $var_consulta y le indica que me haga 
?>
            <script >
            alert("Sus datos han sido enviados correctamente, pronto nos comunicaremos con usted!");
          </script>
       <?php
header("location:../weblaboratorio");
?>